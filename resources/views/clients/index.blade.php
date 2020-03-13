@extends('layout')

@section('content')
    <h1 class="pb-6">Our Clients</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Doctor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <th scope="row">{{$client->id}}</th>
                <td>{{$client->name}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->doctor->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary block" href="/clients/create">Create New</a>
@endsection