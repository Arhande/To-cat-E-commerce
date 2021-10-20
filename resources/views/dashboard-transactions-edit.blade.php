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
              </ul>
            </div>
          </nav>

          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">#{{ $order->id }}</h2>
                <p class="dashboard-subtitle">Transaction Details</p>
              </div>
              <div class="dashboard-content" id="transactionDetails">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <p style="padding-right: 32%; margin-left: 6%;">Bukti Transfer</p>       <p>Detail Order</p>
                        </div>
                        <div class="row">
                          @if ($order->image_path)
                            <img src="{{ $order->image_path }}" style="height: 200px; margin-right: 10%; margin-left: 5%;" alt="bukti-tf-images">
                          
                          @else
                            <p  style="height: 200px; margin-right: 10%; margin-left: 5%;"> 
                              Belum ada bukti
                            </p>
                          @endif
                          <div class="col-12 col-md-6">
                            <table class="table">
                              <thead style="background-color: rgb(0, 124, 62); color: white;">
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Nama Produk</th>
                                  <th scope="col">Qty</th>
                                  <th scope="col">Harga satuan</th>
                                  <th scope="col">Harga total</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($order->products as $product)
                                  <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->pivot->qty }}</td>
                                    <td>{{ $product->harga }}</td>
                                    <td>{{ $product->harga * $product->pivot->qty }}</td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <form class="col-12 col-md-8" method="POST" action="{{ route('dashboard.transactions.update', ['order'=>$order->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-2" data-aos-delay="200">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="addressOne">Receipent's Name</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="receipentsname"
                                    aria-describedby="emailHelp"
                                    name="receipentsname" disabled
                                    value="{{ $order->nama_penerima }}"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="addressTwo">Address</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="addressTwo"
                                    aria-describedby="emailHelp"
                                    name="addressTwo" disabled
                                    value="{{ $order->alamat }}"
                                  />
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="province">Provinsi</label>
                                  <input type="text" 
                                  id="provinsi" disabled
                                  name="provinsi" 
                                  class="form-control" 
                                  value="{{ $order->provinsi }}"/>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="kota">Kota</label>
                                  <input type="text" 
                                  id="kota" disabled
                                  name="kota" 
                                  class="form-control" 
                                  value="{{ $order->kota }}">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="postalCode">Postal Code</label>
                                  <input
                                    class="form-control"
                                    id="postalCode"
                                    name="postalCode" disabled
                                    value="{{ $order->kode_pos }}"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="country">Country</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="country"
                                    name="country"
                                    value="Indonesia"
                                    readonly
                                    value="{{ $order->negara }}"
                                  />
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="mobile">Mobile Phone</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="mobile" disabled
                                    name="mobile"
                                    value="{{ $order->phone }}"
                                  />
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="city">Shipment</label>
                                  <input type="text" 
                                  id="shipment" disabled
                                  name="shipment" 
                                  class="form-control" 
                                  value="{{ $order->kurir }}">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="no_resi">Update Resi</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="no_resi"
                                    name="no_resi"
                                    placeholder="masukkan resi"
                                    value="{{ $order->no_resi }}"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="country">Status</label>
                                  <select class="form-control" name="status" id="status">
                                    <option value="Unpaid" @if ($order->status == 'Unpaid') selected @endif >Menunggu Pembayaran</option>
                                    <option value="Pending" @if ($order->status == 'Pending') selected @endif>Pending</option>
                                    <option value="Shipping" @if ($order->status == 'Shipping') selected @endif>Dalam Pengiriman</option>
                                    <option value="Success" @if ($order->status == 'Success') selected @endif>Pengiriman Sukses</option>
                                  </select>
                                </div>
                              </div>
                              <button class="col-md-2 btn btn-primary h-25 mt-4 ml-3" type="submit">Submit</button>
                            </div>
                          </fo>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /#page-content-wrapper -->
@endsection