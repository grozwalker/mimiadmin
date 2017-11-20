Dropzone.autoDiscover = false;
var uploadingPreviewTemplate = $('#dropzone-uploading-preview-template').html();

var repositoryFactory = function (repositoryName) {
  return {
    fetchGallery: function (id) {
      return $.ajax({
        url: '/dashboard/' + repositoryName + '/' + id + '/' + repositoryName + '-file'
      });
    },
    storeGalleryImage: function (id, data) {
      return $.ajax({
        url: '/dashboard/' + repositoryName + '/' + id + '/' + repositoryName + '-file',
        method: 'post',
        data: {
          src: data.src
        }
      });
    },
    updateImage: function (parentId, data) {
      return $.ajax({
        url: '/dashboard/' + repositoryName + '/' + parentId + '/' + repositoryName + '-file/' + data.id,
        method: 'put',
        data: {
          city_id: data.city_id,
          title: data.title,
          file: data.image
        }
      });
    },
    destroy: function (materialId, id) {
      return $.ajax({
        url: '/dashboard/' + repositoryName + '/' + materialId + '/' + repositoryName + '-file/' + id,
        method: 'delete'
      });
    }
  }
};

Vue.component('form-gallery', {
  template: '#form-gallery-template',
  data: function () {
    return {
      images: [],
      current: {}
    }
  },
  props: ['galleryId', 'galleryName'],

  created: function () {
    this.repo = repositoryFactory(this.galleryName);
    this.fetchData();
  },

  methods: {
    fetchData: function () {
      var self = this;
      this.repo.fetchGallery(this.galleryId).then(function (data) {
        self.images = data;
      });
    },
    addImage: function (data) {
      var self = this;
      this.repo.storeGalleryImage(this.galleryId, {
        src: data.filename
      }).then(function (data) {
        self.images.push(data);
      });
    },
    edit: function (image) {
      this.current = image;
      this.modal('show');
    },
    save: function () {
      if (!$(this.$el).find('.rk-photo-city-name').val()) {
        this.current.city_id = null;
        this.current.city_name = '';
      }
      this.repo.updateImage(this.galleryId, this.current).then(function () {
        this.modal('hide');
      }.bind(this));
    },
    destroy: function (image) {
      this.repo.destroy(this.galleryId, image.id).then(function () {
        this.images = _.without(this.images, _.findWhere(this.images, {id: image.id})); // remove from items array
      }.bind(this));
    },
    modal: function (method) {
      $(this.$el).find('.modal').modal(method);
    }
  },
  mounted: function () {
    var self = this;
    self.$nextTick(function () {
      Sortable.create($(this.$el).find('.form-gallery-list')[0], {
        animation: 150,
        onEnd: function (e) {
          var clonedItems = self.images.filter(function (item) {
            return item;
          });
          clonedItems.splice(e.newIndex, 0, clonedItems.splice(e.oldIndex, 1)[0]);

          var moved = clonedItems[e.newIndex];
          var next = clonedItems[e.newIndex + 1];
          var previous = clonedItems[e.newIndex - 1];

          changePosition({
            type: previous ? 'moveAfter' : 'moveBefore',
            entityName: 'photos',
            id: moved.id,
            positionEntityId: previous ? previous.id : next.id
          });

          self.images = [];
          self.$nextTick(function () {
            self.images = clonedItems;
          });
        }
      });

    });


    $(this.$el).find('.modal').on('hidden.bs.modal', function () {
      self.current = {};
    });

    var $pseudofield = $(this.$el).find('.rk-photo-city-name');

    var autocomplete = new google.maps.places.Autocomplete(($pseudofield[0]), {
      types: ['(cities)'],
      language: 'RU'
    });

    autocomplete.addListener('place_changed', function () {
      var place = autocomplete.getPlace();
      console.log(place);
      self.current.city_id = place ? place.place_id : null;
      self.current.city_name = place ? place.name : null;
    });
  }
});
Vue.component('form-gallery-file', {
  template: '\
    <div class="img-ent">\
    <div class="thumb" @click.prevent="edit" style="cursor: pointer" :style="\'background-image: url(\' + image.photo_src + \')\'"></div> \
    <div>\
    <p style="padding: 0 10px; margin: 0">{{ image.city_name }}&nbsp;</p>\
    <a href="#" @click.prevent="edit" class="btn btn-link btn-sm pull-right"><i class="glyphicon glyphicon-edit"></i></a>\
    <a href="#" @click.prevent="destroy" class="btn btn-link btn-sm"><i class="glyphicon glyphicon-trash"></i></a>\
    </div>\
    </div>\
    ',
  props: ['image'],
  computed: {
    src: function () {
      return '/storage/upload/' + this.image.image;
    }
  },
  methods: {
    edit: function () {
      this.$emit('edit', this.image);
    },
    destroy: function () {
      this.$emit('destroy', this.image);
    }
  }
});

Vue.component('form-gallery-dropzone', {
  template: '<div class="dropzone"></div>',
  mounted: function () {
    var self = this;
    $(this.$el).dropzone({
      dictDefaultMessage: 'Перетащите файлы сюда или кликните',
      url: "/upload",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      previewTemplate: uploadingPreviewTemplate,
      init: function () {
        this.on('sending', function (file, xhr, formData) {
          formData.append('type', 'default');
        });
        this.on('success', function (file, data) {
          this.removeFile(file);
          self.$emit('new-image', data);
        });
      }
    });
  }
});
