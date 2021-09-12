<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard - ToCat Store</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="./style/main.css" rel="stylesheet" />
    <link rel="shortcut icon" href="./images/logokucingbulet.ico" />
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img
              src="./images/logocat.jpeg"
              alt=""
              class="my-4"
              style="width: 118px"
            />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="dashboard.html"
              class="list-group-item list-group-item-action active"
              >Dashboard</a
            >
            <a
              href="dashboard-products.html"
              class="list-group-item list-group-item-action"
              >My Products</a
            >
            <a
              href="dashboard-transactions.html"
              class="list-group-item list-group-item-action"
              >Transactions</a
            >
            <a
              href="dashboard-account.html"
              class="list-group-item list-group-item-action"
              >My Account</a
            >
          </div>
        </div>
        <!-- /#sidebar-ended -->

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
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="./vendor/jquery/jquery.slim.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
  </body>
</html>