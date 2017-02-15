@extends('admin.layout')

@section('content')
    <h1>Закупки</h1>

    <div class="table-responsive">
        <table class="table table-responsive table-hover">
            <thead>
            <tr>
                <th style="width: 2%;">№</th>
                <th>Дата закупки</th>
                <th>Дата отправки</th>
                <th>Дата прихода</th>
                <th>Защита покупателя</th>
                <th style="width: 1%;">Просмотр</th>
            </tr>
            </thead>
            <tbody>
            @foreach($purchases as $purchase)
                <tr>
                    <td>{{ $purchase->id }}</td>
                    <td>{{ $purchase->purchase_date }}</td>
                    <td>{{ $purchase->departure_date }}</td>
                    <td>{{ $purchase->arrival_date }}</td>
                    <td>{{ $purchase->buyer_protection }}</td>
                    <td><a href="/admin/purchase/{{ $purchase->id }}/edit"><span class="glyphicon glyphicon-search"></span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="/admin/purchase/create"><span class="glyphicon glyphicon-plus"></span> Добавить Закупку</a>
    </div>

@endsection