<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Form::component('bsCheckbox', 'components.form.checkbox', ['label', 'name', 'value' => null, 'attributes' => []]);
        \Form::component('bsCkeditor', 'components.form.ckeditor', ['label', 'name', 'value' => null, 'attributes' => []]);
        \Form::component('bsCode', 'components.form.code', ['label', 'name', 'value' => null, 'attributes' => []]);
        \Form::component('bsColor', 'components.form.color', ['label', 'name', 'value' => null, 'attributes' => []]);
        \Form::component('bsDate', 'components.form.date', ['label', 'name', 'value' => null, 'attributes' => []]);
        \Form::component('bsGeocoding', 'components.form.geocoding', ['label', 'name', 'value' => null, 'attributes' => []]);
        \Form::component('bsGeopoint', 'components.form.geopoint', ['label', 'name', 'value' => null, 'attributes' => []]);
        \Form::component('bsImage', 'components.form.image', ['label', 'name', 'value' => null, 'attributes' => []]);
        \Form::component('bsImages', 'components.form.images', ['label', 'name', 'value' => null, 'attributes' => []]);
        \Form::component('bsMultiselect', 'components.form.multiselect', ['label', 'name', 'options', 'value' => null, 'attributes' => []]);
        \Form::component('bsMultiselect2', 'components.form.multiselect2', ['label', 'name', 'options', 'value' => null, 'attributes' => []]);
        \Form::component('bsNumber', 'components.form.number', ['label', 'name', 'value' => null, 'attributes' => []]);
        \Form::component('bsText', 'components.form.text', ['label', 'name', 'value' => null, 'attributes' => []]);
        \Form::component('bsTextarea', 'components.form.textarea', ['label', 'name', 'value' => null, 'attributes' => []]);
        \Form::component('bsSubmit', 'components.form.submit', ['value' => null, 'attributes' => []]);
        \Form::component('bsSelect', 'components.form.select', ['label', 'name', 'options', 'value' => null, 'attributes' => []]);
        \Form::component('bsCity', 'components.form.city', ['label', 'name', 'value' => null, 'visibleValue' => null, 'attributes' => []]);

        \Form::component('bsGallery', 'components.form.gallery', ['label', 'galleryId' => null, 'galleryName' => 'gallery', 'attributes' => []]);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
