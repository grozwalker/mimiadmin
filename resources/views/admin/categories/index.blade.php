@extends('admin.layout')

@section('content')
    <h1 class="page-header">Категории</h1>

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

    <div class="table-responsive col-sm-6">
        <a href="/admin/categories/create" class="text-left"><span class="glyphicon glyphicon-plus"></span> Добавить категорию</a>
        <table class="table table-responsive table-hover">
            <thead>
            <tr>
                <th style="width: 2%;">№</th>
                <th>Наименование</th>
                <th style="width: 1%;">Просмотр</th>
                <th style="">Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a class="btn btn-info" href="/admin/categories/{{ $category->id }}/edit">
                            Просмотр <span class="glyphicon glyphicon-search"></span>
                        </a>
                    </td>
                    <td>
                        {{ Form::open([ 'method'  => 'delete', 'route' => [ 'categories.destroy', $category->id ] ]) }}

                            <button type="submit" id="delete-task-{{ $category->id }}" class="btn btn-danger">
                                <i class="fa fa-btn fa-cloud"></i>Удалить
                            </button>

                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="/admin/categories/create"><span class="glyphicon glyphicon-plus"></span> Добавить категорию</a>
    </div>

@endsection