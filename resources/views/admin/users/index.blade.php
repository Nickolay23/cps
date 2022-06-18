@extends('layouts.app')

@section('content')
    <div>
        <h3>{{__('User list')}}</h3>

        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">E-mail</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection