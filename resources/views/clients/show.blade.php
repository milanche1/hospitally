@extends('layout')

@section('content')
    <h3>{{$client->name}} Info</h3>
    <ul>
        <li>Client's Name: {{$client->name}}</li>
        <li>Client's Email: {{$client->email}}</li>
        <li>Dedicated Doctor: {{$client->doctor->name}}</li>
    </ul>
    <a href="/clients" class="btn btn-primary">Back to Client's Page</a>
    <a href="/clients/{{$client->id}}/edit" class="btn btn-dark">Edit Client</a>
@endsection