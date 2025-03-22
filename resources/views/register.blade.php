@extends('layouts.app')
@section('content')
    <div class="col-4">
        <h2></h2>
        <form action="" method="post" class="form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                @error('name')
                    <div class="alert alert-danger"></div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email') }}">
                @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                @error('password')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
                @error('password_confirmation')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group"></div>
                <label for="role">Role</label>
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
          
        </form>

    </div>
@endsection