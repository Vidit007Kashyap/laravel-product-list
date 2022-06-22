@extends('app')

@section('content')
    <div class="container">
        <div class="row m-5 no-gutters shadow-lg">
            <div class="col-md-6 d-none d-md-block">
                <img src="{{ asset('assets/img/login.webp') }}" class="img-fluid" />
            </div>
            <div class="col-md-6 bg-white p-5">
                <h3 class="pb-3">Login Form</h3>
                <div class="form-style">
                    <form action="{{url('login')}}" method="POST">
                        @csrf
                        <div class="form-group pb-3">
                            <input type="email" name="email" placeholder="Email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group pb-3">
                            <input type="password" name="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="pb-2">
                            <button type="submit" class="btn btn-dark w-100 mt-2">Submit</button>
                        </div>
                    </form>
                    <div class="pt-4 text-center">
                        Don't have account? <a class="text-decoration-none" href="{{url('register')}}">Sign Up</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
