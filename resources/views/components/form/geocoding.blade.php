<div class="form-group @if ($errors->has($name)) has-error @endif">
  <label class="col-sm-2 control-label">{{ $label }}</label>
  <div class="col-sm-10">

    <div class="input-group">
      {!! Form::text($name, $value, array_merge(['class' => 'form-control rk-geocoding-field'], $attributes)) !!}
      <span class="input-group-btn rk-geocoding-btn">
        <a class="btn btn-default" type="button">
          <span class="glyphicon glyphicon-screenshot"></span>
        </a>
      </span>
    </div>


    @if ($errors->has($name)) <p class="help-block">{{ $errors->first($name) }}</p> @endif

  </div>
</div>