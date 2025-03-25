@extends ('layouts.app')
@section("title", "Login")
@section('content')
 <main class="mt-5">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <h3 class="card-header text-center">Login</h3>
                <div class="card-body">
                    <form  method="post" action="{{route("login.submit")}}">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text"id="" placeholder="Enter Email" class="form-control" name="email" reguired>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="Password" id="" placeholder="Enter Password" class="form-control" name="password" reguired>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{$errors->first('Password')}}</span>
                            @endif
                        </div>
                        <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark btn-block">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
 </main>

@endsection
