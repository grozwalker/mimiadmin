<div class="form-group @if ($errors->has($name)) has-error @endif">
  <label class="col-sm-2 control-label">{{ $label }}</label>
  <div class="col-sm-10">
    <div class='input-group'>
      {!! Form::text(null, '', array_merge(['class' => 'datepicker form-control'], $attributes)) !!}
      <span class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
      </span>
    </div>
    {!! Form::hidden($name, $value) !!}
    @if ($errors->has($name)) <p class="help-block">{{ $errors->first($name) }}</p> @endif
  </div>
</div>