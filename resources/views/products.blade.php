@extends('layouts.master')

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
                  @foreach ( $categories as  $category)
                    <li class="breadcrumb-item">
                    <a href="{{ route("products", [
                      'category'=> $category->name
                    ]) }}">{{ $category->name }}</a>
                  </li>
                  @endforeach
                </ol>
              </nav>
            </div>
          </div>
        </div>
    
    </section>

    <!-- Products -->
    <section class="store-new-products" style="padding-top: 30px;">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h5>Products</h5>
          </div>

          <div class="row">
              @foreach ($products as $product)
                <div
                    class="col-6 col-md-4 col-lg-3"
                
                    data-aos-delay="100"
                >
                    <a href="{{ route('products.detail', $product->id) }}" class="component-products d-block">
                    <div class="products-thumbnail">
                        <div
                        class="products-image"
                        >
                        <img src="{{ asset($product->images[0]->image_path) }}" style="width: 225px; height: 150px;" alt="" />
                        </div>
                    </div>
                    <div class="products-text text-black-50">{{ $product->name }}</div>
                    <div class="products-price">Rp {{ $product->harga }}</div>
                    </a>
                </div>
              @endforeach
          </div>
        </div>
      </div>
    </section>
@endsection