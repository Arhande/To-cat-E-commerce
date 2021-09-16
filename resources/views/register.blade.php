@extends('layouts.master')

@section('content')

<!-- Page Content -->
    <div class="page-content page-auth">
      <div class="section-store-auth">
        <div class="container">
          <div class="text-center"></div>
          <div class="row align-items-center row-login">
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
              <img src="./images/turkishangora.png" alt="" width="352px" />
            </div>
            <div class="col-lg-5">
              <h2
                style="
                  font-family: Poppins;
                  font-style: normal;
                  font-weight: normal;
                "
              >
                Register Account
              </h2>
              <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" class="form-control w-75" name="name"/>
                  @error('name')
                    <div>
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Email Address</label>
                  <input
                  type="email"
                  class="form-control w-75"
                  aria-describedby="emailHelp"
                  name="email"
                  />
                  @error('email')
                    <div>
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control w-75" name="password"/>
                  @error('password')
                    <div>
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                
                <div class="form-group">
                  <label>Password Confirmation</label>
                  <input type="password" class="form-control w-75" name="password_confirmation"/>
                  @error('password_confirmation')
                    <div>
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <button
                class="btn btn-login btn-block w-75 mt-4 btn-dark"
                type="submit"
                >
                REGISTER NOW
              </button>
              <div class="text-center m-2">OR</div>
              <a href="{{ route('google') }}" class="btn btn-light btn-block mt-4">
                  <img src="./images/google.png" width="35px" alt="google">
                </a>
              <p
              style="
                    font-family: Poppins;
                    font-style: normal;
                    font-weight: normal;
                  "
                >
                  Or if you already have an Account
                  <a
                    href="{{ route('login') }}"
                    style="
                      font-family: Poppins;
                      font-style: normal;
                      font-weight: normal;
                    "
                  >
                    <u>Login Now</u>
                  </a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection