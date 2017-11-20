<div class="bs-image-form-group form-group @if ($errors->has($name)) has-error @endif">
  <label class="col-sm-2 control-label">{{ $label }}</label>
  <div class="col-sm-10">
    <div class="gallery-wrapper clearfix">

    </div>
    <span class="btn btn-default btn-sm fileinput-button"><i class="glyphicon glyphicon-picture"></i><input type="file" multiple /></span>
    {!! Form::text($name, $value, array_merge(['class' => 'form-control rk-uploader-multiple-field hidden'], $attributes)) !!}
    @if ($errors->has($name)) <p class="help-block">{{ $errors->first($name) }}</p> @endif
  </div>
</div>