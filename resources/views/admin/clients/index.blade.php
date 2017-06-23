@extends('admin.layout')

@section('content')
    <h1 class="page-header">Клиенты</h1>

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
        <a href="/admin/clients/create" class="text-left"><span class="glyphicon glyphicon-plus"></span> Добавить клиента</a>
        <table class="table table-responsive table-hover table_type_clients">
            <thead>
            <tr>
                <th style="width: 2%;">№</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Ссылка</th>
                <th>Телефон</th>
                <th style="width: 1%;">Просмотр</th>
                <th style="">Удалить</th>
                <th>ПК</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr  @if ($client->pk == 1) class="client_pk" @endif  >
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->surname }}</td>
                    <td>{{ $client->link }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>
                        <a class="btn btn-info" href="/admin/clients/{{ $client->id }}/edit">
                            Просмотр <span class="glyphicon glyphicon-search"></span>
                        </a>
                    </td>
                    <td>
                        {{ Form::open([ 'method'  => 'delete', 'route' => [ 'clients.destroy', $client->id ] ]) }}

                        <button type="submit" id="delete-task-{{ $client->id }}" class="btn btn-danger">
                            <i class="fa fa-btn fa-cloud"></i>Удалить
                        </button>

                        {{ Form::close() }}
                    </td>
                    <td>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('clients.create') }}"><span class="glyphicon glyphicon-plus"></span> Добавить клиента</a>
    </div>

@endsection