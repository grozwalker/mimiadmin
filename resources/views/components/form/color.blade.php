<div class="form-group @if ($errors->has($name)) has-error @endif">
  <label class="col-sm-2 control-label">{{ $label }}</label>
  <div class="col-sm-10">
    <div class="input-group rk-color-field">
      {!! Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) !!}
      <span class="input-group-addon"><i></i></span>
    </div>

    @if ($errors->has($name)) <p class="help-block">{{ $errors->first($name) }}</p> @endif
  </div>
</div>
