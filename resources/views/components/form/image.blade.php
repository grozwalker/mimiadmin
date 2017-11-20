<div class="bs-image-form-group form-group @if ($errors->has($name)) has-error @endif">
  <label class="col-sm-2 control-label">{{ $label }}</label>
  <div class="col-sm-10">
    <p>
      <a href=""><img src="" /></a>
    </p>
    <span class="btn btn-default btn-sm fileinput-button"><i class="glyphicon glyphicon-picture"></i><input type="file" /></span>
    <span class="btn btn-default btn-sm rk-upload-remove"><i class="glyphicon glyphicon-remove"></i></span>
    <a class="rk-upload-link" href="" target="_blank"></a>
    {!! Form::text($name, $value, array_merge(['class' => 'form-control rk-uploader-field hidden'], $attributes)) !!}
    @if ($errors->has($name)) <p class="help-block">{{ $errors->first($name) }}</p> @endif
  </div>
</div>