@extends('layouts.master')

@section('content')

<div class="page-content page-cart">
      <section class="store-breadcrumbs" data-aos-delay="100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Cart</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-cart">
        <div class="container">
          <!-- Product -->
          <div class="row" data-aos-delay="100">
            <div class="col-12 table-responsive">
              <table
                class="table table-borderless table-cart"
                aria-describedby="Cart"
              >
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Qty</th>
                    <th scope="col"></th>
                  </tr>
                </thead>

                <tbody>

                  @foreach ($carts as $cart)
                    <tr>
                      <td style="width: 25%">
                        <img
                          src="{{ asset($cart->products->images[0]->image_path) }}"
                          alt=""
                          class="cart-image"
                          style="width: 180px"
                        />
                      </td>
                      <td style="width: 35%">
                        <div class="product-title">{{ $cart->products->name }}</div>
                      </td>
                      <td style="width: 25%">
                        <div class="product-title">{{ $cart->products->harga }}</div>
                        <div class="product-subtitle">IDR</div>
                      </td>
                      <td style="width: 20%">
                        <div class="product-pesanan">{{ $cart->qty }}</div>
                      </td>
                      <td style="width: 20%">
                        <a href="#" class="btn btn-remove-cart btn-danger">
                          Remove
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- Shipping -->
          <form action="{{ route('orders') }}" method="POST">
            @csrf
            <div class="row" data-aos-delay="150">
              <div class="col-12">
                <hr />
              </div>
              <div class="col-12">
                <h2 class="mb-4">Shipping Details</h2>
              </div>
            </div>
            <div class="row mb-2" data-aos-delay="200">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nama_penerima">Receipent's Name</label>
                  <input
                  type="text"
                  class="form-control"
                  id="nama_penerima"
                  aria-describedby="emailHelp"
                  name="nama_penerima"
                  placeholder="Enter your full name"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="alamat">Address</label>
                  <input
                  type="text"
                  class="form-control"
                  id="alamat"
                  aria-describedby="emailHelp"
                  name="alamat"
                  placeholder="Jln Rawamangun Muka"
                  />
                </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
                <label for="province">Provinsi</label>
                <input type="text" id="provinsi" name="provinsi" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="kota" name="kota" class="form-control">
              </div>
            </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="kode_pos">Zip Code</label>
                  <input
                  class="form-control"
                  id="kode_pos"
                  name="kode_pos"
                  placeholder="123456"
                  />
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="negara">Country</label>
                <input
                  type="text"
                  class="form-control"
                  id="negara"
                  name="negara"
                  value="Indonesia"
                  readonly
                />
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="phone">Mobile Phone</label>
                <input
                  type="text"
                  class="form-control"
                  id="phone"
                  name="phone"
                  placeholder="+62 12345 678"
                />
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="shipment">Shipment</label>
                <select name="kurir" id="kurir" class="form-control">
                  <option value="Tiki">Tiki</option>
                  <option value="JNE">JNE Express</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="pembayaran">Pembayaran</label>
                <select name="pembayaran" id="pembayaran" class="form-control">
                  <option value="1">  
                    <div class="row">
                      <img src="./images/bri.png" style="width: 50px;" alt="">
                      0340 0110 2960 506 - BRI (Arga Widya Samudera)</option>
                    </div>
                  <option value="2">55000 64597 - BCA (Farhan Fadhlurrohman)</option>
                  
                </select>
              </div>
          <div class="row" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2>Payment Informations</h2>
            </div>
          </div>

          <!-- Price -->
          <div class="row" data-aos-delay="200">
            <div class="col-4 col-md-3">
              <div class="subtotal">Sub Total :</div>
              <div class="shippingfee">Shipping Fee :</div>
              <div class="total">Total :</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="subtotal">IDR {{ $total }}</div>
              <div class="shippingfee">IDR 10.000</div>
              <div class="product-title text-success"><u>IDR {{ $total }}</u></div>
              <input
                  type="text"
                  value="{{ $total }}"
                  name="total"
                  hidden
                />
            </div>


            <div class="col-8 col-md-3">
              <button type="submit" class="btn btn-dark mt-4 px-4 btn-block">
                Checkout Now
              </button>
            </div>
          </div>
          </form>
        </div>
      </section>
    </div>
@endsection
