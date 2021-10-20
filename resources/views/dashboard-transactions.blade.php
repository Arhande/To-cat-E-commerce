@extends('layouts.admin')


@section('content')
    
        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
            data-aos="fade-down"
          >
            <button
              class="btn btn-secondary d-md-none mr-auto mr-2 btn-menu"
              id="menu-toggle"
            >
              &laquo; Menu
            </button>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto d-none d-lg-flex">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <img
                      src="./images/user.svg"
                      alt=""
                      class="rounded-circle mr-2 profile-picture"
                    />
                    Hi, Admin
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.html">Back to Store</a>
                    <a class="dropdown-item" href="dashboard-account.html"
                      >Settings</a
                    >
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/">Logout</a>
                  </div>
                </li>
                
              </ul>
              <!-- Mobile Menu -->
              <ul class="navbar-nav d-block d-lg-none mt-3">
                <li class="nav-item">
                  <a class="nav-link" href="#"> Hi, Admin </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-inline-block" href="#"> Cart </a>
                </li>
              </ul>
            </div>
          </nav>

          <!--content-->
          <h5 class="ml-5" style="margin-left: 4.5%; margin-top: 8%;">History Transaction</h5>
            <div class="row ml-5">
              <div class="col-lg-12" style="margin-left: 5%;">
                @foreach ($orders as $order)
                  <div class="row" @if($loop->index % 2 == 0) style="background-color: rgb(230, 230, 230);" @else style="background-color: rgb(243, 243, 243);" @endif>
                    <!--code trx-->
                    <div class="col-lg-3 float-left">
                      <p style="margin-top: 8px;">{{ $order->id }}</p>
                    </div>
                    <!--nama-->
                    <div class="col-lg-3">
                      <p style="margin-top: 8px;">{{ $order->nama_penerima }}</p>
                    </div>
                    <!--tanggal-->
                    <div class="col-lg-2">
                      <p style="margin-top: 8px;">{{ $order->created_at }}</p>                    
                    </div>
                    <!--harga-->
                    <div class="col-lg-1">
                      <p class="mt-3 text-success text-center">Rp. {{ $order->total_harga }}</p>
                    </div>
                    <!--status-->
                    <div class="col-lg-3">
                      <a href="{{ route('dashboard.transactions.edit', ['order'=>$order->id]) }}" class="btn btn-warning ml-5" disabled style="margin-top: 8px;">Edit</a>                    
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
@endsection