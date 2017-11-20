@extends('admin.layout')

@section('content')
    <h1 class="page-header">Товары</h1>

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
    <div class="row active-goods">
        <div class="col-sm-12">
            <a href="{{ route('goods.index') }}" class="btn {{ Route::getCurrentRoute()->getName() == 'goods.index' ? 'btn-success' : 'btn-info' }} all-goods">Активные</a>
            <a href="{{ route('goods.nonactive') }}" class="btn {{ Route::getCurrentRoute()->getName() == 'goods.nonactive' ? 'btn-success' : 'btn-info' }} nonactive-goods">Неактивные</a>
            <!-- /.all-goods -->
        </div>
        <!-- /.col-sm-12 -->
    </div>
    <!-- /.row -->
    <div class="row category-list ">
        <div class="col-sm-12">
            <ul class="list-unstyled">
                @foreach($categories as $categorie)
                    <li class="category-list_item"><a href="{{ route('goods.category', $categorie->id) }}">{{ $categorie->name }}</a></li>
                    <!-- /.category category_item -->
                @endforeach
            </ul>
            <!-- /.category category_list -->
        </div>
        <!-- /.col-sm-12 -->
        <div class="col-sm-12">
            <a href="{{ route('goods.index') }}">Все</a>
        </div>
        <!-- /.col-sm-12 -->
    </div>
    <!-- /.row -->
    @if ( isset($category) )
        <h2>Категория: {{ $category->name }}</h2>
    @endif

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
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($goods as $good)
                <tr>
                    <td>{{ $good->id }}</td>
                    <td>{{ $good->name }}</td>
                    <td>
                        @if ($good->img)
                            <img class="good_preview" src="/images/catalog/preview/{{ $good->id }}.jpg">
                        @else
                            <img class="good_preview" src="/images/noImg.png">
                        @endif
                    </td>
                    <td>{{ $good->category->name }}</td>
                    <td>{{ $good->price }}</td>
                    <td>{{ $good->active }}</td>
                    <td>
                        <a class="btn btn-info" href="/admin/goods/{{ $good->id }}/edit">
                            Просмотр <span class="glyphicon glyphicon-search"></span>
                        </a>
                    </td>
                    <td>
                        {{ Form::open([ 'method'  => 'delete', 'route' => [ 'goods.destroy', $good->id ] ]) }}

                        <button type="submit" id="delete-task-{{ $good->id }}" class="btn btn-danger">
                            <i class="fa fa-btn fa-cloud"></i>Удалить
                        </button>

                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ Request::url() }}/create"><span class="glyphicon glyphicon-plus"></span> Добавить товар</a>
    </div>
    {{ $goods->links() }}
@endsection