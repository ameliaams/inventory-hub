@extends('layouts.guest')

@section('title', 'Register')

@section('content')
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3>Sign Up</h3>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input name="name" type="text" class="form-control" id="floatingText" placeholder="jhondoe">
                        <label for="floatingText">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input name="password_confirmation" type="password" class="form-control" id="floatingConfirmPassword" placeholder="Confirm Password">
                        <label for="floatingConfirmPassword">Confirm Password</label>
                    </div>                    
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                        </div>
                        <a href="">Forgot Password</a>
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                </form>
                <p class="text-center mb-0">Already have an Account? <a href="{{ route('login') }}">Sign In</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
