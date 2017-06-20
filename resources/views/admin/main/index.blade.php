@extends('admin.layout')

@section('content')
    @if(count($birthClients) > 0)
        <div class="well clients-birthday">
            <div class="col-sm-6">
                <h2>Дни рождения!</h2>
                {{ Carbon\Carbon::now()->format('Y-m-d') }}
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>ФИО</td>
                        <td>Телефон</td>
                        <td>Постоянник</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($birthClients as $client)
                        <tr>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->phone }}</td>
                            <td>{{ $client->pk }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- /.table-striped -->
            </div>
            <!-- /.col-sm-6 -->
        </div>
    @endif
@endsection