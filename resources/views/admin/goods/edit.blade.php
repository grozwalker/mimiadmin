@extends('admin.layout')

@section('content')

    <h2>Изменить товар</h2>

    {!! Form::open([
    'url' => 'admin/goods/'.$good->id,
    'method' => 'PUT',
    'class' => 'form-horizontal']) !!}

    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        {!! Form::label('name', 'Наименование', ['class' => 'col-sm-5'])  !!}
        <div class="col-sm-12">
            {!! Form::text('name', $good->name, ['class' => 'form-control'])  !!}
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    <div class="form-group ">
        <div class="col-sm-6">
            <div class="row {{ $errors->has('category_id') ? 'has-error' : '' }}">
                {!! Form::label('category_id', 'Выбирете категорию', ['class' => 'col-sm-5'])  !!}
                <div class="col-sm-12">
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control'])  !!}
                    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-sm-6 -->
        <div class="col-sm-6">
            <div class="row {{ $errors->has('price') ? 'has-error' : '' }}">
                {!! Form::label('price', 'Цена', ['class' => 'col-sm-5'])  !!}
                <div class="col-sm-12">
                    {!! Form::number('price', $good->price, ['class' => 'form-control'])  !!}
                    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-sm-6 -->
    </div>


   <!-- Пока нет описания товара
   <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
        {!! Form::label('description', 'Описание товара', ['class' => 'col-sm-5'])  !!}
        <div class="col-sm-12">
            {!! Form::textarea('description', $good->description, ['class' => 'form-control'])  !!}
            {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
        </div>

    </div>
    -->


    <div class="form-group {{ $errors->has('active') ? 'has-error' : '' }}">
        {!! Form::label('active', 'Активный', ['class' => 'col-sm-1'])  !!}
        <div class="col-sm-10">
            {!! Form::checkbox('active', $good->active, ['class' => 'form-control'])  !!}
            {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10">
            <a class="btn btn-default btn-danger" href="{{ url('/admin/goods') }}">Отмена</a>
            <button type="submit" class="btn btn-default">Сохранить</button>
        </div>
    </div>


    {!! Form::close() !!}


@endsection