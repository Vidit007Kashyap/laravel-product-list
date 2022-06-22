@extends('app')
@section('content')
    <div class="welcome-container">
        <div class="welcome-box text-center">
            <div class="welcome-title">
                <h2>Hi there! Welcome to my app</h2>
            </div>
            <div class="welcome-info ">
                <h6>
                    Login to explore what I've created. Register, if you haven't yet.
                </h6>
                <a class="btn btn-primary mt-2 me-3" href="{{ url('login') }}">Login</a>
                <a class="btn btn-primary mt-2" href="{{ url('register') }}">Register</a>
            </div>
        </div>
    </div>
@endsection
