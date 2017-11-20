<div class="form-group @if ($errors->has($name)) has-error @endif">
  <label class="col-sm-2 control-label">{{ $label }}</label>
  <div class="col-sm-10">
    <input type="hidden" name="{{ $name }}" value="0" />
    {{ Form::checkbox($name, 1, $value) }}
    @if ($errors->has($name)) <p class="help-block">{{ $errors->first($name) }}</p> @endif
  </div>
</div>