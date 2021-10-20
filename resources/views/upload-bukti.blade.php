@extends('layouts.master')

@section('content')
 <!-- Page Content -->
    <div class="page-content page-home">
        <div class="container">
          <div class="row">
              <div class="col-lg-5">
                  <div class="bg-primary text-white rounded-lg">
                    <div class="p-3">
                    <div > Rp. {{ $order->total_harga }}</div> <br>
                    <div style="font-size: 11px;">  Semua atas nama</div>
                    <Farhan style="font-size: 20px;">Tocat Store</div>  
                  </div>
                  <div>
                    <div class="card my-4">
                      <div class="card-header ">
                        <div class="d-flex justify-content-between">
                            <div>
                              Bank BCA
                            </div>
                          <div>
                            <img src="{{ asset('images/bca-bank.png') }}" style="height: 35px;" alt="atm">
                          </div>
                        </div> 
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <div class="d-flex justify-content-between">
                            <div>
                              Bank BRI
                            </div>
                          <div>
                            <img src="{{ asset('images/bri-bank.png') }}" style="height: 15px;" alt="atm">
                          </div>
                        </div> 
                        </li>
                        <li class="list-group-item">
                          <div class="d-flex justify-content-between">
                            <div>
                              Gopay
                            </div>
                          <div>
                            <img src="{{ asset('images/gopay.png') }}" style="height: 45px;" alt="atm">
                          </div>
                        </div> 
                        </li>
                        <li class="list-group-item">
                          <div class="d-flex justify-content-between">
                            <div>
                              OVO
                            </div>
                          <div>
                            <img src="{{ asset('images/ovo.png') }}" style="height: 15px;" alt="atm">
                          </div>
                        </div> 
                        </li>
                      </ul>
                    </div>
                  </div>
               </div>
           
             
             <div class="col-6">
              <form class="card" action="{{ route('orders.store.bukti', ['order'=>$order->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header ">
                <div class="d-flex justify-content-between">
                </div> 
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="">
                      <p>Metode Pembayaran</p>
                      <label class="form-select w-100" aria-label="Default select example">
                        <option selected>  
                          <div class="d-flex justify-content-between">
                            <div>
                              {{ $order->rekening->nama_bank }} -
                            </div>
                            <div>
                              {{ $order->rekening->nomor_rekening }}
                            </div>
                          </div> 
                        </option>
                      </label>
                    </div> 
                  </li>
                  <li class="list-group-item">
                    <div class="">
                      <p>Atas Nama</p>
                      <input type="text" placeholder="Nama Anda" 
                      name="atas_nama"
                      class="w-100 rounded-lg border py-2 pl-2"

                      >
                    </div> 
                  </li>
                  <li class="list-group-item">
                    <div class="">
                      <p>Dari Rekening</p>
                      <input type="text" 
                      placeholder="Rekening Anda" 
                      class="w-100 rounded-lg border py-2 pl-2 mb-3" 
                      name="dari_rekening"
                      >
                    </div> 
                  </li>
                  <li class="list-group-item">
                    <div class="">
                      <p>Bukti Transfer</p>
                      <input type="file"
                      class="w-100 rounded-lg border py-2 pl-2 mb-3" 
                      name="image_bukti"
                      >
                    </div> 
                  </li>
                </ul>
                <button type="submit" class="btn btn-primary">konfirmasi</button>
              </form>
             </div>
          </div>
        </div>
    </div>
@endsection