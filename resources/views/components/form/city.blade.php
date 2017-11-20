<div class="form-group @if ($errors->has($name)) has-error @endif rk-city">
  <label class="col-sm-2 control-label">{{ $label }}</label>
  <div class="col-sm-10" class="">
    <input name="{{ $name . '_visible' }}" class="form-control rk-city-field-visible" value="{{ $visibleValue }}">
    {!! Form::hidden($name, $value, array_merge(['class' => 'form-control rk-city-field'], $attributes)) !!}
    @if ($errors->has($name)) <p class="help-block">{{ $errors->first($name) }}</p> @endif
  </div>
</div>
