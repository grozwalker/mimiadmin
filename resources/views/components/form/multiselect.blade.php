<div class="form-group @if ($errors->has('event_type_id')) has-error @endif">
  <label class="col-sm-2 control-label">{{ $label }}</label>
  <div class="col-sm-10">
    {!! Form::select($name, $options, $value, array_merge(['class' => 'form-control'], $attributes)) !!}
    @if ($errors->has($name)) <p class="help-block">{{ $errors->first($name) }}</p> @endif
  </div>
</div>