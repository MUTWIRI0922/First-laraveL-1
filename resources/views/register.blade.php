@extends('layouts.app')
@section('content')
    <div class="col-4">
        @if(session()->has("successs"))
            <div class="alert alert-success">{{session()->get("success")}}</div>
        @endif
        @if(session()->has("fail"))
            <div class="alert alert-danger">{{session()->get("fail")}}</div>
        @endif
        <form action="{{route("register.submit")}}" method="post" class="mb-5">
            @csrf
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
                @if ($errors->has('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                @if ($errors->has('email'))
                     <span class="text-danger">{{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                @if ($errors->has('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="form-group"></div>
               
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
          
        </form>

    </div>
@endsection