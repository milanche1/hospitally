@extends('layout')

@section('content')
<h3 class="p-3">Edit Client</h3>
<div class="row justify-content-md-center p-3">
    <div class="col-6">
        <form action="/clients/{{$client->id}}" method="post">
            @csrf
            @method('PATCH')
            <div class="pt-3 form-group">
                <label for="name">Name: </label><br />
                <input class="form-control" type="text" name="name" id="name" placeholder="your name" value={{ $client->name ?? old('name') }}>
            </div>
            <div class="form-group pt-3">
                <label for="email">Customer Email: </label><br />
                <input class="form-control" type="email" name="email" id="email" placeholder="your email" value={{ $client->email ?? old('email')}}>
            </div>
            <div class="form-group pt-3">
                <select name="doctor_id" id="doctor_id">
                    @foreach ($doctors as $doctor)
                        <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save Client</button>
            {{$errors->first('name')}}
            {{$errors->first('email')}}
      </form>
    </div>
</div>
  
@endsection