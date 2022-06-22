@extends('app')

@section('content')
    <div class="container">
        <div class="row m-5 no-gutters shadow-lg">
            <div class="col-md-6 d-none d-md-block">
                <img src="{{ asset('assets/img/register.png') }}" class="img-fluid" />
            </div>
            <div class="col-md-6 bg-white p-5">
                <h3 class="pb-3">Register</h3>
                @if ($errors)
                    @foreach ($errors as $error)
                        <p>{{$error}}</p>
                    @endforeach
                @endif
                <div class="form-style">
                    <form action="{{url('register')}}" method="POST">
                        @csrf
                        <div class="form-group pb-3">
                            <input type="text" name="name" placeholder="Name" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group pb-3">
                            <input type="email" name="email" placeholder="Email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group pb-3">
                            <input type="password" name="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group pb-3">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="pb-2">
                            <button type="submit" class="btn btn-dark w-100 mt-2">Submit</button>
                        </div>
                    </form>
                    <div class="pt-4 text-center">
                        Already have an account? <a class="text-decoration-none" href="{{url('login')}}">Login</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
