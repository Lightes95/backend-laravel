@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ciao umberto</h1>
@stop

@section('content')
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>

    @endforeach
@stop
