@extends('admin.layout')

@section('content')
    <h1 class="page-header">Закупки</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Внимание!</strong> {{ $errors->first() }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-sm-12">
        <a href="/admin/orders/create" class="text-left"><span class="glyphicon glyphicon-plus"></span> Добавить заказ</a>
        <table class="table table-responsive table-hover">
            <thead>
            <tr>
                <th style="width: 2%;">№</th>
                <th>Клиент</th>
                <th>Дата</th>
                <th>Предоплата</th>
                <th>Место отдачи</th>
                <th style="width: 1%;">Просмотр</th>
                <th style="">Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ \Carbon\Carbon::parse($purchase->date)->format('d.m.Y') }}</td>
                    <td>{{ $order->client->name }}</td>
                    <td>{{ $order->prepaid_amount }}</td>
                    <td>{{ $order->issue_place }}</td>
                    <td>
                        <a class="btn btn-info" href="/admin/clients/{{ $order->id }}/edit">
                            Просмотр <span class="glyphicon glyphicon-search"></span>
                        </a>
                    </td>
                    <td>
                        {{ Form::open([ 'method'  => 'delete', 'route' => [ 'orders.destroy', $order->id ] ]) }}

                        <button type="submit" id="delete-task-{{ $order->id }}" class="btn btn-danger">
                            <i class="fa fa-btn fa-cloud"></i>Удалить
                        </button>

                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="/admin/orders/create"><span class="glyphicon glyphicon-plus"></span> Добавить заказ</a>
    </div>
    {{ $orders->links() }}
@endsection