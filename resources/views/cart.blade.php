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
                  <tr>
                    <td style="width: 25%">
                      <img
                        src="/images/cart/pic1.png"
                        alt=""
                        class="cart-image"
                        style="width: 180px"
                      />
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Royal Canin For Kitten</div>
                    </td>
                    <td style="width: 25%">
                      <div class="product-title">76,000</div>
                      <div class="product-subtitle">IDR</div>
                    </td>
                    <td style="width: 20%">
                      <div class="product-pesanan">1</div>
                    </td>
                    <td style="width: 20%">
                      <a href="#" class="btn btn-remove-cart btn-danger">
                        Remove
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td style="width: 25%">
                      <img
                        src="/images/cart/pic2.png"
                        alt=""
                        class="cart-image"
                        style="width: 180px"
                      />
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">
                        Royal Canin Protein for Adult Persian
                      </div>
                    </td>
                    <td style="width: 25%">
                      <div class="product-title">79,000</div>
                      <div class="product-subtitle">IDR</div>
                    </td>
                    <td style="width: 20%">
                      <div class="product-pesanan">1</div>
                    </td>
                    <td style="width: 20%">
                      <a href="#" class="btn btn-remove-cart btn-danger">
                        Remove
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td style="width: 25%">
                      <img
                        src="/images/cart/pic3.jpg"
                        alt=""
                        class="cart-image"
                        style="width: 180px"
                      />
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Royal Canin for Adult</div>
                    </td>
                    <td style="width: 25%">
                      <div class="product-title">85,000</div>
                      <div class="product-subtitle">IDR</div>
                    </td>
                    <td style="width: 20%">
                      <div class="product-size">1</div>
                    </td>
                    <td style="width: 20%">
                      <a href="#" class="btn btn-remove-cart btn-danger">
                        Remove
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- Shipping -->
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
                <label for="addressOne">Receipent's Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="receipentsname"
                  aria-describedby="emailHelp"
                  name="receipentsname"
                  placeholder="Enter your full name"
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
                  name="addressTwo"
                  placeholder="Jln Rawamangun Muka"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="province">Province</label>
                <select name="province" id="province" class="form-control">
                  <option value="Bandung">Bandung</option>
                  <option value="Banten">Banten</option>
                  <option value="Bekasi">Bekasi</option>
                  <option value="Bogor">Bogor</option>
                  <option value="Cirebon">Cirebon</option>
                  <option value="Depok">Depok</option>
                  <option value="Denpasar">Solo</option>
                  <option value="Jakarta">DKI Jakarta</option>
                  <option value="Kediri">Kediri</option>
                  <option value="Lampung">Lampung</option>
                  <option value="Malang">Malang</option>
                  <option value="Medan">Medan</option>
                  <option value="Palembang">Palembang</option>
                  <option value="Padang">Padang</option>
                  <option value="Purwakarta">Purwakarta</option>
                  <option value="Semarang">Semarang</option>
                  <option value="Surabaya">Surabaya</option>
                  <option value="Solo">Solo</option>
                  <option value="Tangerang">Tangerang</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="city">City</label>
                <select name="city" id="city" class="form-control">
                  <option value="Jakarta">Jakarta Pusat</option>
                  <option value="Surabaya">Jakarta Barat</option>
                  <option value="Semarang">Jakarta Timur</option>
                  <option value="Semarang">Jakarta Utarar</option>
                  <option value="Semarang">Jakarta Selatan</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="postalCode">Zip Code</label>
                <input
                  class="form-control"
                  id="postalCode"
                  name="postalCode"
                  placeholder="123456"
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
                />
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="mobile">Mobile Phone</label>
                <input
                  type="text"
                  class="form-control"
                  id="mobile"
                  name="mobile"
                  placeholder="+62 12345 678"
                />
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="city">Shipment</label>
                <select name="city" id="city" class="form-control">
                  <option value="Jakarta">Tiki</option>
                  <option value="Surabaya">JNE Express</option>
                </select>
              </div>
            </div>
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
              <div class="subtotal">IDR 240,000</div>
              <div class="shippingfee">IDR 10.000</div>
              <div class="product-title text-success"><u>IDR 250,000</u></div>
            </div>

            <div class="col-8 col-md-3">
              <a href="pembayaran.html" class="btn btn-dark mt-4 px-4 btn-block">
                Checkout Now
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
