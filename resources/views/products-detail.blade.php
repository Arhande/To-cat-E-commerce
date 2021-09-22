@extends('layouts.master')

@push('styles')
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
      <link href="{{ asset('style/main.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <!-- Page Content -->
    <!-- Categories -->
    <section class="store-breadcrumbs"style="margin-top: 100px;">
      <section  data-aos-delay="100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item ">
                    <a href="{{ route('landing') }}">Home</a>
                  </li>
                    <li class="breadcrumb-item">
                      {{ $product->category->name }}
                    </li>
                  </li>
                  
                </ol>
              </nav>
            </div>
          </div>
        </div>
    
    </section>

    <!-- Products -->
    <div class="Container">
      <div class="row">
        <div class="col-lg-1 col-1 col-md-1"></div>
        <div class="col-lg-4 col-9 m-2" style="margin-left:-8.3%;">
          <img src="{{ asset($product->images[0]->image_path) }}" alt="{{ $product->name }}" width="100%"/>
        </div>
          
        <div class="col-lg-6">
          <h4 style="margin-left:4%; margin-top:-3%;"><br>
            {{ $product->name }}
          </h4>
          <h5 style="margin-left:4%;" class="text-danger">Rp {{ $product->harga }}</h5>
          <br>
          <h5 style="margin-left:4%;" class="text-black-50">
            Description
          </h5>
          <p style="margin-left:4%;" class="text">
            {{ $product->description }}
          </p> <br>
          <form action="{{ route('products.detail.cart', $product) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success" style="margin-left:4%;">
              Add to cart
            </button>
          </form>
        </div>
      </div>
    </div>
@endsection

@push('scripts')
     <script src="./vendor/jquery/jquery.slim.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="./script/navbar.scroll.js"></script>
@endpush