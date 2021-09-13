@extends('layouts.admin')


@section('content')
    <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
            data-aos="fade-down"
          >
            <button
              class="btn btn-secondary d-md-none mr-auto mr-2"
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
                    <a class="dropdown-item" href="dashboard-account.html"
                      >Settings</a
                    >
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/">Logout</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-inline-block mt-2" href="#">
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
                <h2 class="dashboard-title">My Account</h2>
                <p class="dashboard-subtitle">Update your current profile</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <form action="">
                      <div class="card">
                        <div class="card-body">
                          <div class="row mb-2">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="name">Nama Toko</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="name"
                                  aria-describedby="emailHelp"
                                  name="name"
                                  value="To-cat Store"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="email">Email Toko</label>
                                <input
                                  type="email"
                                  class="form-control"
                                  id="email"
                                  aria-describedby="emailHelp"
                                  name="email"
                                  value="TocatStoreJKT@gmail.com"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="addressOne">Address</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="addressOne"
                                  aria-describedby="emailHelp"
                                  name="addressOne"
                                  value="Jl Raya Cibubur Selatan"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="addressTwo">Address 2</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="addressTwo"
                                  aria-describedby="emailHelp"
                                  name="addressTwo"
                                  value="Blok B2 No. 34"
                                />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="province">Province</label>
                                <div
                                  name="province"
                                  id="province"
                                  class="form-control" aria-readonly="true"
                                >
                                  DKI Jakarta
                              </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="city">Kota</label>
                                <div
                                  name="city"
                                  id="city"
                                  class="form-control" aria-readonly="true"
                                >
                                    Jakarta Timur
                              </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="postalCode">Postal Code</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="postalCode"
                                  name="postalCode"
                                  value="40512"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="country" >Country</label>
                                <div
                                  type="text"
                                  class="form-control"
                                  id="country"
                                  name="country"
                                  aria-readonly="true"
                                > Indonesia
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="mobile"
                                  name="mobile"
                                  value="+628 1312 88199"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row" style="padding-top: 120px; margin-left: 180px;">
                            <div class="col text-right">
                              <button
                                type="submit"
                                class="btn btn-success px-5"
                              >
                                Save Now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /#page-content-wrapper -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
            data-aos="fade-down"
          >
            <button
              class="btn btn-secondary d-md-none mr-auto mr-2"
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
                <li class="nav-item">
                  <a class="nav-link d-inline-block mt-2" href="#">
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
                <h2 class="dashboard-title">My Products</h2>
                <p class="dashboard-subtitle">Manage it well and get money</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <a
                      href="dashboard-products-create.html"
                      class="btn btn-success"
                      >Add New Product</a
                    >
                  </div>
                </div>
                <div class="row">
              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="100" style="margin-top:15px;"
              >
                <a href="dashboard-products-details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                    >
                      <img src="images/pic1.png" style="width: 225px; height: 150px;" alt="" />
                    </div>
                  </div>
                  <div class="products-text text-black-50">Royal Canin Chaton Sterllise</div>
                  <div class="products-price">Rp 300000</div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="200" style="margin-top:15px;"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                    >
                      <img src="images/pic2.png" style="width: 225px; height: 150px;" alt="" />
                    </div>
                  </div>
                  <div class="products-text text-black-50">Royal Canin Adult <br>
                    (7th+) indoor - 4kg
                  </div>
                  <div class="products-price">Rp 300,000</div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="300" style="margin-top:15px;"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image">
                      <img src="images/pic6.png" style="width: 225px; height: 150px;" alt="" />
                    </div>
                  </div>
                  <div class="products-text">
                    Royal Canin for Adult <br>
                    Appatite Control"
                  </div>
                  <div class="products-price">Rp 249000</div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="400" style="margin-top:15px;"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                    >
                      <img src="images/pic3.png" style="width: 225px; height: 150px;" alt="" />
                    </div>
                  </div>
                  <div class="products-text">Royal Canin for Adult <br>
                    persian indoor</div>
                  <div class="products-price">Rp 360,000</div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="500" style="margin-top:15px;"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                    >
                      <img src="images/pic4.png" style="width: 225px; height: 150px;" alt="" />
                    </div>
                  </div>
                  <div class="products-text">
                    Royal Canin for kitten
                  </div>
                  <div class="products-price">Rp 59,000</div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="600" style="margin-top:15px;"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                    >
                      <img src="images/pic5.png" style="width: 225px; height: 150px;" alt="" />
                    </div>
                  </div>
                  <div class="products-text">Royal Canin for kitten <br>
                    Persian 1 year old</div>
                  <div class="products-price">Rp 79,000</div>
                </a>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /#page-content-wrapper -->
@endsection