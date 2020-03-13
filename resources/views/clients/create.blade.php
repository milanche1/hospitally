@extends('layout')

@section('content')
<h3 class="p-3">Insert New Client</h3>
<div class="row justify-content-md-center p-3">
    <div class="col-6">
        <form action="/clients" method="post">
            @csrf
            <div class="pt-3 form-group">
                <label for="name">Name: </label><br />
                <input class="form-control" type="text" name="name" id="name" placeholder="your name" value={{ old('name') }}>
            </div>
            <div class="form-group pt-3">
                <label for="email">Customer Email: </label><br />
                <input class="form-control" type="email" name="email" id="email" placeholder="your email" value={{old('email')}}>
            </div>
            <div class="form-group pt-3">
                <select name="doctor_id" id="doctor_id">
                    @foreach ($doctors as $doctor)
                        <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Client</button>
            {{$errors->first('name')}}
            {{$errors->first('email')}}
      </form>
    </div>
</div>
  
@endsection