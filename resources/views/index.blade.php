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
                        <a href="#" class="component-categories d-block">
                            <div class="categories-image">
                            <img src="{{ asset($category->image_path) }}" alt="" class="w-100" />
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
                <div class="col-6 col-md-4 col-lg-3" data-aos-delay="100">
                    <a href="register.html" class="component-products d-block">
                    <div class="products-thumbnail">
                        <div class="products-image">
                        <img
                            src="images/pic1.png"
                            style="width: 225px; height: 150px"
                            alt=""
                        />
                        </div>
                    </div>
                    <div class="products-text text-black-50">
                        Royal Canin Chaton Sterllise
                    </div>
                    <div class="products-price">Rp 70,000</div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-3" data-aos-delay="100">
                    <a href="register.html" class="component-products d-block">
                    <div class="products-thumbnail">
                        <div class="products-image">
                        <img
                            src="images/pic2.png"
                            style="width: 225px; height: 150px"
                            alt=""
                        />
                        </div>
                    </div>
                    <div class="products-text text-black-50">
                        Royal Canin Adult <br />
                        (7th+) indoor - 4kg
                    </div>
                    <div class="products-price">Rp 300,000</div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-3" data-aos-delay="300">
                    <a href="register.html" class="component-products d-block">
                    <div class="products-thumbnail">
                        <div class="products-image">
                        <img
                            src="images/pic3.png"
                            style="width: 225px; height: 150px"
                            alt=""
                        />
                        </div>
                    </div>
                    <div class="products-text">
                        Royal Canin for Adult <br />
                        Appatite Control"
                    </div>
                    <div class="products-price">Rp 249000</div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-3" data-aos-delay="400">
                    <a href="register.html" class="component-products d-block">
                    <div class="products-thumbnail">
                        <div class="products-image">
                        <img
                            src="images/pic4.png"
                            style="width: 225px; height: 150px"
                            alt=""
                        />
                        </div>
                    </div>
                    <div class="products-text">
                        Royal Canin for Adult <br />
                        persian indoor
                    </div>
                    <div class="products-price">Rp 360,000</div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-3" data-aos-delay="500">
                    <a href="register.html" class="component-products d-block">
                    <div class="products-thumbnail">
                        <div class="products-image">
                        <img
                            src="images/pic6.png"
                            style="width: 225px; height: 150px"
                            alt=""
                        />
                        </div>
                    </div>
                    <div class="products-text">Royal Canin for kitten</div>
                    <div class="products-price">Rp 59,000</div>
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-3" data-aos-delay="600">
                    <a href="register.html" class="component-products d-block">
                    <div class="products-thumbnail">
                        <div class="products-image">
                        <img
                            src="images/pic5.png"
                            style="width: 225px; height: 150px"
                            alt=""
                        />
                        </div>
                    </div>
                    <div class="products-text">
                        Royal Canin for kitten <br />
                        Persian 1 year old
                    </div>
                    <div class="products-price">Rp 79,000</div>
                    </a>
                </div>
                </div>
            </div>
            </div>
        </section>
        </div>
@endsection