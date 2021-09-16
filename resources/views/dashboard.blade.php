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
                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button href="LandingPage.html" class="dropdown-item">Logout</button>
                  </form>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-inline-block mt-1" href="#">
                    <img src="./images/cart.svg" alt="" />
                    <div class="card-badge">3</div>
                  </a>
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

          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">Look what you have made today!</p>
              </div>

              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Customer</div>
                        <div class="dashboard-card-subtitle">15,209</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Revenue</div>
                        <div class="dashboard-card-subtitle">$931,290</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Transaction</div>
                        <div class="dashboard-card-subtitle">22,409,399</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Transactions</h5>
                    <a
                      class="card card-list d-block"
                      href="/dashboard-transactions-details.html"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="./images/dashboard/pic1.png"
                              alt=""
                              width="80px"
                            />
                          </div>
                          <div class="col-md-4">Royal Canin Kitten Persian</div>
                          <div class="col-md-3">To-Cat Store</div>
                          <div class="col-md-3">12 Agustus, 2021</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="./images/dashboard-arrow-right.svg"
                              alt=""
                              width="10px"
                            />
                          </div>
                        </div>
                      </div>
                    </a>

                    <a
                      class="card card-list d-block"
                      href="dashboard-transactions-details.html"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="./images/dashboard/pic2.png"
                              alt=""
                              width="80px"
                            />
                          </div>
                          <div class="col-md-4">Royal Canin Kitten</div>
                          <div class="col-md-3">To-Cat Store</div>
                          <div class="col-md-3">2 September, 2021</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="./images/dashboard-arrow-right.svg"
                              alt=""
                              width="10px"
                            />
                          </div>
                        </div>
                      </div>
                    </a>

                    <a
                      class="card card-list d-block"
                      href="dashboard-transactions-details.html"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="./images/dashboard/pic3.png"
                              alt=""
                              width="80px"
                            />
                          </div>
                          <div class="col-md-4" style="padding-left:10px;">Royal Canin Adult</div>
                          <div class="col-md-3">To-Cat Store</div>
                          <div class="col-md-3">30 Juli, 2021</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="./images/dashboard-arrow-right.svg"
                              alt=""
                              width="10px"
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Page Content ended -->

@endsection