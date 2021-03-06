@extends('admin.layout')

@section('content')

    <h2>Добавить Закупку</h2>

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

        {!! Form::model(
        $purchase, [
        'route' => $purchase->id ? ['purchase.update', $purchase->id] : ['purchase.store'],
        'class' => 'form-horizontal col-sm-6',
        'method' => $purchase->id ? 'PUT' : 'POST']) !!}

        <div class="form-group {{ $errors->has('good_id') ? 'has-error' : '' }}">
            {!! Form::label('good_id', 'Выбирете товар', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::select('good_id', $goodsList, $good_id, ['id' => 'good_id', 'class' => 'form-control'])  !!}
                {!! $errors->first('good_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
            {!! Form::label('price', 'Цена закупки', ['class' => 'col-sm-12 col-xs-12'])  !!}
            <div class="col-sm-12 col-xs-12">
                {!! Form::number('price', $purchase->price, ['class' => 'form-control', 'step' => 'any', 'min' => 0])  !!}
                {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
            {!! Form::label('quantity', 'Количество', ['class' => 'col-sm-12 col-xs-12'])  !!}
            <div class="col-sm-12 col-xs-12">
                {!! Form::number('quantity', $purchase->quantity, ['class' => 'form-control'])  !!}
                {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('link') ? 'has-error' : '' }}">
            {!! Form::label('link', 'Ссылка на товар', ['class' => 'col-sm-12 col-xs-12'])  !!}
            <div class="col-sm-12 col-xs-12">
                {!! Form::text('link', $purchase->link, ['class' => 'form-control'])  !!}
                {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('purchase_date') ? 'has-error' : '' }}">
            {!! Form::label('purchase_date', 'Дата закупки', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::date('purchase_date', $purchase->purchase_date, ['class' => 'form-control'])  !!}
                {!! $errors->first('purchase_date', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('departure_date') ? 'has-error' : '' }}">
            {!! Form::label('departure_date', 'Дата отправки', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::date('departure_date', $purchase->departure_date, ['class' => 'form-control'])  !!}
                {!! $errors->first('departure_date', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('buyer_protection') ? 'has-error' : '' }}">
            {!! Form::label('buyer_protection', 'Дата защиты покупателя', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::date('buyer_protection', $purchase->buyer_protection, ['class' => 'form-control'])  !!}
                {!! $errors->first('buyer_protection', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('arrival_date') ? 'has-error' : '' }}">
            {!! Form::label('arrival_date', 'Дата получения', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::date('arrival_date', $purchase->buyer_protection, ['class' => 'form-control'])  !!}
                {!! $errors->first('arrival_date', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-10">
                <a class="btn btn-default btn-danger" href="{{ url()->previous() }}">Отмена</a>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </div>
        </div>

        {!! Form::close() !!}
        <div class="col-sm-6">
            <a href="{{ Request::url() }}/create"><span class="glyphicon glyphicon-plus"></span> Добавить товар</a>
            <div class="purchase-price">
                <h3><span>{{ $purchase->purchase_price }}</span> р. - Сумма закупки</h3>
            </div>
            <!-- /.purchase-price -->

            <a class="btn btn-default btn-info purchase__link" href="{{ $purchase->link }}" target="_blank" @if( !$purchase->link ) style="display: none" @endif >Открыть товар</a>

        </div>
        <!-- /.col-sm-6 -->
    </div>
    <!-- /.row -->

@endsection


@section('script')
    <script type="text/javascript">
        $('#good_id').select2();

        $('#quantity, #price').change(function() {
            var sum = $('#quantity').val() * $('#price').val();
            $('.purchase-price span').html(sum);
        });

        $('#link').change(function() {
            $('.purchase__link').attr('href', $('#link').val());
            $('.purchase__link').show();
        });
    </script>
@endsection