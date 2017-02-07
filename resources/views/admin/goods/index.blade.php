@extends('admin.layout')

@section('content')
    <h1 class="page-header">Товары</h1>

    <ul class="category-list list-unstyled">
        @foreach($categories as $categorie)
            <li class="category-list_item"><a href="{{ route('goods.category', $categorie->id) }}">{{ $categorie->name }}</a></li>
            <!-- /.category category_item -->
        @endforeach
    </ul>
    <!-- /.category category_list -->

    <a href="{{ Request::url() }}/create"><span class="glyphicon glyphicon-plus"></span> Добавить товар</a>

    <div class="table-responsive">
        <table class="table table-responsive table-hover">
            <thead>
            <tr>
                <th style="width: 2%;">№</th>
                <th>Наименование</th>
                <th>Изображение</th>
                <th>Категория</th>
                <th>Цена</th>
                <th>Активный</th>
                <th style="width: 1%;">Просмотр</th>
            </tr>
            </thead>
            <tbody>
            @foreach($goods as $good)
                <tr>
                    <td>{{ $good->id }}</td>
                    <td>{{ $good->name }}</td>
                    <td><img class="good_preview" src="/images/catalog/preview/{{ $good->id }}.jpg"></td>
                    <td>{{ $good->category->name }}</td>
                    <td>{{ $good->price }}</td>
                    <td>{{ $good->active }}</td>
                    <td><a href="/admin/goods/{{ $good->id }}/edit"><span class="glyphicon glyphicon-search"></span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ Request::url() }}/create"><span class="glyphicon glyphicon-plus"></span> Добавить товар</a>
    </div>
    {{ $goods->links() }}
@endsection