@extends('admin.layout')

@section('content')
    <h1>Закупки</h1>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('success') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-responsive table-hover">
            <thead>
            <tr>
                <th style="width: 2%;">№</th>
                <th>Товар</th>
                <th>Количество</th>
                <th>Цена закупки</th>
                <th>Дата закупки</th>
                <th>Дата отправки</th>
                <th>Защита покупателя</th>
                <th>Дата прихода</th>
                <th style="width: 1%;">Просмотр</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($purchases as $purchase)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $purchase->good->name }}</td>
                    <td>{{ $purchase->quantity }}</td>
                    <td>{{ $purchase->price }}</td>
                    <td>{{ $purchase->purchase_date }}</td>
                    <td>{{ $purchase->departure_date }}</td>
                    <td>{{ $purchase->buyer_protection }}</td>
                    <td>{{ $purchase->arrival_date }}</td>
                    <td><a href="/admin/purchase/{{ $purchase->id }}/edit"><span class="glyphicon glyphicon-search"></span></a></td>
                    <td>

                        {{ Form::open([ 'method'  => 'delete', 'route' => [ 'purchase.destroy', $purchase->id ] ]) }}

                        <button type="submit" id="delete-task-{{ $purchase->id }}" class="btn btn-danger">
                            <i class="fa fa-btn fa-cloud"></i>Удалить
                        </button>

                        {{ Form::close() }}
                        </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="/admin/purchase/create"><span class="glyphicon glyphicon-plus"></span> Добавить Закупку</a>
    </div>

@endsection