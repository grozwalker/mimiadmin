@extends('admin.layout')

@section('content')

    <h2>Добавить продажу</h2>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <a href="/admin/clients/create"><span class="glyphicon glyphicon-plus"></span> Добавить клиента</a>

    {!! Form::model(
    $order, [
    'route' => $order->id ? ['goods.update', $order->id] : ['goods.store', 111],
    'class' => 'form-horizontal row',
    'method' => $order->id ? 'PUT' : 'POST',
    'files' => true]) !!}

    <div class="col-sm-6">

        <h2>Информация о заказе</h2>

        <div class="form-group {{ $errors->has('client_id') ? 'has-error' : '' }}">
            {!! Form::label('clients_id', 'Выбирете клиента', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::select('client_id', $clientsList, $client_id, ['class' => 'form-control'])  !!}
                {!! $errors->first('client_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
            {!! Form::label('date', 'Дата продажи', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::date('date', $order->date, ['class' => 'form-control'])  !!}
                {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('prepaid_amount') ? 'has-error' : '' }}">
            {!! Form::label('prepaid_amount', 'Цена продажи', ['class' => 'col-sm-12 col-xs-12'])  !!}
            <div class="col-sm-12 col-xs-12">
                {!! Form::number('prepaid_amount', $order->prepaid_amount, ['class' => 'form-control'])  !!}
                {!! $errors->first('prepaid_amount', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('issue_place') ? 'has-error' : '' }}">
            {!! Form::label('issue_place', 'Место отдачи', ['class' => 'col-sm-12 col-xs-12'])  !!}
            <div class="col-sm-12 col-xs-12">
                {!! Form::text('issue_place', $order->issue_place, ['class' => 'form-control'])  !!}
                {!! $errors->first('issue_place', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

    </div>
    <!-- /.col-sm-6 -->

    <div class="col-sm-6">
        <h2>Информация о товарах</h2>
        <div class="form-group ">
            <div class="col-sm-12">
                <div class="row {{ $errors->has('good_id') ? 'has-error' : '' }}">
                    {!! Form::label('good_id', 'Выбирете категорию', ['class' => 'col-sm-12'])  !!}
                    <div class="col-sm-12">
                        {!! Form::select('good_id', $goods , null, ['class' => 'form-control'])  !!}
                        {!! $errors->first('good_id', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-sm-6 -->
        </div>
    </div>
    <!-- /.col-sm-6 -->

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="col-sm-10">
                    <a class="btn btn-default btn-danger" href="{{ url()->previous() }}">Отмена</a>
                    <button type="submit" class="btn btn-success">Сохранить</button>
                </div>
            </div>
        </div>
        <!-- /.col-sm-12 -->
    </div>
    <!-- /.row -->

    {!! Form::close() !!}


@endsection

