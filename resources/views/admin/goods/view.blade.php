@extends('admin.layout')

@section('content')

    <h2>Добавить товар</h2>

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
    $good, [
    'route' => $good->id ? ['goods.update', $good->id] : ['goods.store', $category_id],
    'class' => 'form-horizontal',
    'method' => $good->id ? 'PUT' : 'POST',
    'files' => true]) !!}

      <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        {!! Form::label('name', 'Наименование', ['class' => 'col-sm-12'])  !!}
        <div class="col-sm-12">
            {!! Form::text('name', $good->name, ['class' => 'form-control'])  !!}
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group row {{ $errors->has('category_id') ? 'has-error' : '' }}">
        {!! Form::label('category_id', 'Выбирете категорию', ['class' => 'col-sm-12'])  !!}
        <div class="col-sm-12">
            {!! Form::select('category_id', $categories, $category_id, ['class' => 'form-control'])  !!}
            {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
        {!! Form::label('description', 'Описание', ['class' => 'col-sm-12 col-xs-12'])  !!}
        <div class="col-sm-12 col-xs-12">
            {!! Form::textarea('description', $good->description, ['class' => 'form-control'])  !!}
            {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('img') ? 'has-error' : '' }}">
        {!! Form::label('img', 'Изображение', ['class' => 'col-sm-12 col-xs-12'])  !!}
        <div class="col-sm-12 col-xs-12">
            {!! Form::file('img', null)  !!}
            {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
        {!! Form::label('price', 'Цена продажи', ['class' => 'col-sm-1 col-xs-12'])  !!}
        <div class="col-sm-2 col-xs-12">
            {!! Form::number('price', $good->price, ['class' => 'form-control'])  !!}
            {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group">
        <div class="funkyradio col-sm-2">
            <div class="row">
                <div class="funkyradio-primary {{ $errors->has('active') ? 'has-error' : '' }}">
                    {!! Form::checkbox('active', 1, $good->active == 1 ? true : false, ['id' => 'active'])  !!}
                    {!! Form::label('active', 'Активный', ['class' => 'col-sm-1 col-xs-12'])  !!}
                    {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
                </div>

                <div class="funkyradio-primary {{ $errors->has('have_photo') ? 'has-error' : '' }}">
                    {!! Form::checkbox('have_photo', 1,  $good->have_photo == 1 ? true : false, ['id' => 'have_photo'])  !!}
                    {!! Form::label('have_photo', 'Фото', ['class' => 'col-sm-1 col-xs-12'])  !!}
                    {!! $errors->first('have_photo', '<p class="help-block">:message</p>') !!}
                </div>

                <div class="funkyradio-primary {{ $errors->has('featured') ? 'has-error' : '' }}">
                    {!! Form::checkbox('featured', 1, $good->featured == 1 ? 1 : 0, ['id' => 'featured'])  !!}
                    {!! Form::label('featured', 'Хитяо', ['class' => 'col-sm-1 col-xs-12'])  !!}
                    {!! $errors->first('featured', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <!-- /.funkyradio -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.fankygroup -->

    <div class="form-group">
        <div class="col-sm-10">
            <div class="row">
                <a class="btn btn-default btn-danger" href="{{ url()->previous() }}">Отмена</a>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </div>
            <!-- /.row -->
        </div>
    </div>

    {!! Form::close() !!}

@endsection

