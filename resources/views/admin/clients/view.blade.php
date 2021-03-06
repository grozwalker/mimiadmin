@extends('admin.layout')

@section('content')

    <h2>Добавить клиента</h2>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-6">
            <a href="{{ Request::url() }}/create"><span class="glyphicon glyphicon-plus"></span> Добавить товар</a>
        </div>
        <!-- /.col-sm-6 -->
    </div>
    <!-- /.row -->

    <div class="row">

        {!! Form::model(
        $client, [
        'route' => $client->id ? ['clients.update', $client->id] : ['clients.store'],
        'class' => 'form-horizontal col-sm-6',
        'method' => $client->id ? 'PUT' : 'POST']) !!}

        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name', 'Имя', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::text('name', $client->name, ['class' => 'form-control'])  !!}
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('surname') ? 'has-error' : '' }}">
            {!! Form::label('surname', 'Фамилия', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::text('surname', $client->surname, ['class' => 'form-control'])  !!}
                {!! $errors->first('surname', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('link') ? 'has-error' : '' }}">
            {!! Form::label('link', 'Ссылка', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::text('link', $client->link, ['class' => 'form-control'])  !!}
                {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
            {!! Form::label('phone', 'Телефон', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::text('phone', $client->phone, ['class' => 'form-control', 'placeholder' => '79181122333'])  !!}
                {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('birthday') ? 'has-error' : '' }}">
            {!! Form::label('birthday', 'Дата рождения', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::date('birthday', $client->birthday, ['class' => 'form-control'])  !!}
                {!! $errors->first('birthday', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('adress') ? 'has-error' : '' }}">
            {!! Form::label('adress', 'Адрес проживания', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::text('adress', $client->adress, ['class' => 'form-control'])  !!}
                {!! $errors->first('adress', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('note') ? 'has-error' : '' }}">
            {!! Form::label('note', 'Примечание', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::textarea('note', $client->note, ['class' => 'form-control'])  !!}
                {!! $errors->first('note', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group">
            <div class="funkyradio col-sm-4">
                <div class="funkyradio-primary {{ $errors->has('pk') ? 'has-error' : '' }}">
                    {!! Form::checkbox('pk', 1, $client->pk == 1 ? true : false, ['id' => 'pk'])  !!}
                    {!! Form::label('pk', 'Постоянник', ['class' => 'col-sm-1 col-xs-12'])  !!}
                    {!! $errors->first('pk', '<p class="help-block">:message</p>') !!}
                </div>
                <!-- /.funkyradio -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.fankygroup -->

        <div class="form-group row {{ $errors->has('wherefrom_id') ? 'has-error' : '' }}">
            {!! Form::label('wherefrom_id', 'Откуда пришел клиент', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::select('wherefrom_id', $whereFromClients, null, ['class' => 'form-control'])  !!}
                {!! $errors->first('wherefrom_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-10">
                <a class="btn btn-default btn-danger" href="{{ url()->previous() }}">Отмена</a>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </div>
        </div>

        {!! Form::close() !!}
    </div>
    <!-- /.row -->

@endsection


@section('script')

@endsection