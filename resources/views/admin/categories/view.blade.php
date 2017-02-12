@extends('admin.layout')

@section('content')

    <h2>Добавить категорию</h2>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model(
    $category, [
    'route' => $category->id ? ['categories.update', $category->id] : ['categories.store'],
    'class' => 'form-horizontal',
    'method' => $category->id ? 'PUT' : 'POST']) !!}

    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        {!! Form::label('name', 'Наименование', ['class' => 'col-sm-12'])  !!}
        <div class="col-sm-12">
            {!! Form::text('name', $category->name, ['class' => 'form-control'])  !!}
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10">
            <a class="btn btn-default btn-danger" href="{{ url()->previous() }}">Отмена</a>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </div>
    </div>

    {!! Form::close() !!}

@endsection