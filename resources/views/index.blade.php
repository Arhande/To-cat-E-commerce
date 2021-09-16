@extends('layouts.master')

@section('content')
    <!-- Page Content -->
        <div class="page-content page-home">
        <!-- Carousel -->
        <section class="store-carousel" data-aos="zoom-in">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div
                    id="storeCarousel"
                    class="carousel slide"
                    data-ride="carousel"
                >
                    <ol class="carousel-indicators">
                    <li
                        class="active"
                        data-target="#storeCarousel"
                        data-slide-to="0"
                    ></li>
                    <li data-target="#storeCarousel" data-slide-to="1"></li>
                    <li data-target="#storeCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img
                        src="./images/topbanner1.png"
                        alt="bannerImg"
                        class="d-block w-100"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                        src="./images/topbanner2.png"
                        alt="bannerImg"
                        class="d-block w-100"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                        src="./images/topbanner3.png"
                        alt="bannerImg"
                        class="d-block w-100"
                        />
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Categories -->
        <section class="store-trend-categories">
            <div class="container">
            <div class="row">
                <div class="col-12">
                <h5>Categories</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-md-3 col-lg-2"></div>
                @foreach ($categories as $category)
                    <div class="col-6 col-md-3 col-lg-2">
                        <a href="/products?category={{ $category->name }}" class="component-categories d-block">
                            <div class="categories-image">
                            <img src="{{ asset($category->image_path) }}" alt="{{ $category->name }}" class="w-100" />
                            </div>
                            <p class="categories-text">{{ $category->name }}</p>
                        </a>
                    </div>
                @endforeach

                <div class="col-6 col-md-3 col-lg-2"></div>
            </div>
            </div>
        </section>

        <section class="store-new-products">
            <div class="container">
            <div class="row">
                <div class="col-12">
                <h5>Products</h5>
                </div>

                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-6 col-md-4 col-lg-3" data-aos-delay="600">
                            <a href="register.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image">
                                <img
                                    src="{{ asset($product->images[0]->image_path) }}"
                                    style="width: 225px; height: 150px"
                                    alt=""
                                />
                                </div>
                            </div>
                            <div class="products-text text-black-50">
                                {{ $product->name }}
                            </div>
                            <div class="products-price">Rp {{ $product->harga }}</div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3" data-aos-delay="600">
                            <a href="register.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image">
                                <img
                                    src="{{ asset($product->images[0]->image_path) }}"
                                    style="width: 225px; height: 150px"
                                    alt=""
                                />
                                </div>
                            </div>
                            <div class="products-text text-black-50">
                                {{ $product->name }}
                            </div>
                            <div class="products-price">Rp {{ $product->harga }}</div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3" data-aos-delay="600">
                            <a href="register.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image">
                                <img
                                    src="{{ asset($product->images[0]->image_path) }}"
                                    style="width: 225px; height: 150px"
                                    alt=""
                                />
                                </div>
                            </div>
                            <div class="products-text text-black-50">
                                {{ $product->name }}
                            </div>
                            <div class="products-price">Rp {{ $product->harga }}</div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            </div>
        </section>
        </div>
@endsection