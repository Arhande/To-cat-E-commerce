@extends('layouts.master')

@section('content')

<!-- Page Content -->
    <div class="page-content page-auth" id="register">
      <div class="section-store-auth">
        <div class="container" style="justify-content: center;">
          <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-4 col-5">
              <h2 class="text-center" style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; ">Login Account</h2>
              <form class="login-form" action="{{ route('login.store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label>Email Address</label>
                  <input
                    name="email"
                    type="text"
                    class="form-control"
                    aria-describedby="emailHelp"
                    v-model="email"
                  />
                  @error('email')
                    <div>
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password"/>
                  @error('password')
                    <div>
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <button class="btn btn-dark btn-block mt-4" style="font-family: Poppins; font-style: normal; font-weight: normal;" type="submit">
                  LOGIN
                </button>
                <div class="text-center m-2">OR</div>
                <a href="{{ route('google') }}" class="btn btn-light btn-block mt-4">
                  <img src="./images/google.png" width="35px" alt="google">
                </a>
            </div>
            <div class="col-lg-2">
            
            </div>
            <div class="col-lg-4 col-4" >
              <h2 class="text-center" style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; ">Register Account</h2><br>
              <form class="mt-3">
                <div class="form-group" style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 15px;">
                 <p>If you don’t have an account, see this option to access the registration form. <br>
                  <br> 
                  When you provide us with details, you will have a fast and pleasant shopping experience with <img src="./images/toketgede.png" alt="logo" style="width: 90px" /></p>
                  
                </div>
               
                <a href="{{ route('register') }}" class="btn btn-dark btn-block mt-4">
                  REGISTER
                </a>
            </div>
            <div class="col-lg-1"></div>
          </div>
        </div>
      </div>
    </div>
@endsection