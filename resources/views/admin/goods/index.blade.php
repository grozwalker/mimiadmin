@extends('admin.layout')

@section('content')
    <h1 class="page-header">Товары</h1>

    <a href="/admin/good"><span class="glyphicon glyphicon-plus"></span> Добавить товар</a>

    <div class="table-responsive">
        <table class="table table-responsive table-hover">
            <thead>
            <tr>
                <th style="width: 2%;">№</th>
                <th>Наименование</th>
                <th>Категория</th>
                <th>Цена</th>
                <th>Описание</th>
                <th>Ссылка ВК</th>
                <th>Активный</th>
                <th style="width: 1%;">Просмотр</th>
            </tr>
            </thead>
            <tbody>
            @foreach($goods as $good)
                <tr>
                    <td>{{ $good->id }}</td>
                    <td>{{ $good->name }}</td>
                    <td>{{ $good->category->name }}</td>
                    <td>{{ $good->price }}</td>
                    <td>{{ $good->description }}</td>
                    <td>{{ $good->vk_link }}</td>
                    <td>{{ $good->active }}</td>
                    <td><a href="/admin/goods/{{ $good->id }}/edit"><span class="glyphicon glyphicon-search"></span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="/admin/goods/create"><span class="glyphicon glyphicon-plus"></span> Добавить товар</a>
    </div>
@endsection