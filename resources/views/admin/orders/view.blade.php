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
    'route' => $order->id ? ['orders.update', $order->id] : ['orders.store'],
    'class' => 'form-horizontal row',
    'method' => $order->id ? 'PUT' : 'POST',
    'files' => true]) !!}

    <div class="col-sm-6">

        <h2>Информация о заказе</h2>

        <div class="form-group {{ $errors->has('client_id') ? 'has-error' : '' }}">
            {!! Form::label('clients_id', 'Выбирете клиента', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::select('client_id', $clientsList, $order->client_id, ['class' => 'form-control', 'id' => 'client_id'])  !!}
                {!! $errors->first('client_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
            {!! Form::label('date', 'Дата продажи', ['class' => 'col-sm-12'])  !!}
            <div class="col-sm-12">
                {!! Form::date('date', \Carbon\Carbon::parse($order->date)->format('Y-m-d'), ['class' => 'form-control'])  !!}
                {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('prepaid_amount') ? 'has-error' : '' }}">
            {!! Form::label('prepaid_amount', 'Сумма предоплаты', ['class' => 'col-sm-12 col-xs-12'])  !!}
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
        <div class="order-goods">

            <table>
                <thead>
                    <th>№</th>
                    <th>Наименование</th>
                    <th>Количество</th>
                    <th>Цена</th>
                    <th>Сумма</th>
                </thead>
            @foreach($goods as $good)
                <tr>
                    <td></td>
                    <td>{{ $good->name }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
            </table>
            
        </div>
        <a href="#" class="btn btn-success add-good" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span></a>
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


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Добавить товар</h4>
          </div>
          <div class="modal-body">

            {!! Form::open([
            'route'     => 'orders.add-good',
            'method'    => 'POST',
            'class' => 'form-horizontal form_add-good',
            ]) !!}

                {!! Form::number('order_id', $order->id, ['id' => 'order_id', 'class' => 'form-control'])  !!}


                <div class="form-group {{ $errors->has('good_id') ? 'has-error' : '' }}">
                  {!! Form::label('good_id', 'Выбирете товар', ['class' => 'col-sm-12'])  !!}
                  <div class="col-sm-12">
                      {!! Form::select('good_id', $goodsList, null, ['id' => 'good_id', 'class' => 'form-control'])  !!}
                      {!! $errors->first('good_id', '<p class="help-block">:message</p>') !!}
                  </div>
                </div>

                <div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
                    {!! Form::label('quantity', 'Количество', ['class' => 'col-sm-12 col-xs-12'])  !!}
                    <div class="col-sm-4 col-xs-12">
                        {!! Form::number('quantity', 0, ['class' => 'form-control good_quantity'])  !!}
                        {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>

                <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                    {!! Form::label('price', 'Цена продажи за ед.', ['class' => 'col-sm-12 col-xs-12'])  !!}
                    <div class="col-sm-4 col-xs-12">
                        {!! Form::number('price', 0, ['class' => 'form-control good_price', 'step' => 'any', 'min' => 0])  !!}
                        {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('price', 'Общая сумма строки', ['class' => 'col-sm-12 col-xs-12'])  !!}
                    <div class="col-sm-4 col-xs-12">
                        {!! Form::number('sum_price', 0, ['class' => 'form-control sum_price', 'step' => 'any', 'min' => 0, 'disabled'])  !!}
                    </div>
                </div>

              {!! Form::close() !!}


          </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Отмена</button>
                <button type="submit" class="btn btn-success submit_add-good">Добавить</button>
            </div>
        </div>

      </div>
    </div>


@endsection


@section('script')
    <script type="text/javascript">
        $('#client_id').select2();
        $('#category_id').select2();
        //$('#good_id').select2({ width: '100%' });

        $('#good_id').change(function () {
            $.get(
                '{{ route('goods.get-price') }}', {'id': $(this).val()},
                function () {
                })
                .done(function(data) {
                    $('.good_price').val(data);
                })
                .fail(function() {
                    alert( "Ошибка при получении цены товара" );
                });
        });

        $('.good_quantity, .good_price').change(function() {
            var sum = $('.good_quantity').val() * $('.good_price').val();
            $('.sum_price').val(sum);
        });

        $('.submit_add-good').on('click', function () {
            $('.form_add-good').submit();
        })
    </script>
@endsection