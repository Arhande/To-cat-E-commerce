@extends('layouts.master')

@section('content')
<div class="page-content page-details">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Details</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-gallery" id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
              <transition name="slide-fade" mode="out-in">
                <img
                  :src="photos[activePhoto].url"
                  :key="photos[activePhoto].id"
                  class="w-100 main-image"
                  alt=""
                />
              </transition>
            </div>
            <div class="col-lg-2">
              <div class="row">
                <div
                  class="col-3 col-lg-12 mt-2 mt-lg-0"
                  v-for="(photo, index) in photos"
                  :key="photo.id"
                  data-aos="zoom-in"
                  data-aos-delay="100"
                >
                  <a href="#" @click="changeActive(index)">
                    <img
                      :src="photo.url"
                      class="w-100 thumbnail-image"
                      :class="{ active: index == activePhoto }"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-7" style="margin-top: 20px;">
                <h2>Royal Canin Kitten 1kg</h2>
                <div class="owner">By To-Cat Store</div>
                <div class="price">IDR 80,000</div>
              </div>
            </div>
          </div>
        </section>
        <section class="store-description">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-6" style="padding-top: 30px;">
                <h3>Description Product</h3>
                <p>
                  Royal Canin kitten 1 Kg
                  baik untuk kucing anda yang umurnya
                  dibawah 12 bulan, dan product ini berukuran
                  kecil sehingga pas untuk anak kucing
                  dan anda tidak perlu khawatir kucing adna 
                  akan tersedak.
                </p>
              </div>
            </div>
          </div>
          <a href="cart.html" class="btn btn-success" style="margin-left: 75px;">
            Add to cart
          </a>
        </section>
      </div>
    </div>
@endsection

@push('scripts')
    <script src="./vendor/vue/vue.js'"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery",
        mounted() {
          AOS.init();
        },
        data: {
          activePhoto: 0,
          photos: [
            {
              id: 1,
              url: "./images/details/produk1/detail3.png",
            },
            {
              id: 2,
              url: "./images/details/produk1/detail1.png",
            },
            {
              id: 3,
              url: "./images/details/produk1/detail2.jpg",
            },
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
@endpush