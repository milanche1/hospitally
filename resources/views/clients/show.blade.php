@extends('layout')

@section('content')
    <h3>{{$client->name}} Info</h3>
    <ul>
        <li>Client's Name: {{$client->name}}</li>
        <li>Client's Email: {{$client->email}}</li>
    </ul>
@endsection