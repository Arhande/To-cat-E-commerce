@extends('layouts.master')

@section('content')
    <div class="container mb-3" style="margin-top: 100px">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex flex-row p-2"> <img src="{{ asset('images/toketgede.png') }}" width="120">
                        <div class="d-flex flex-column"> <span class="font-weight-bold">{{ $order->nama_penerima }}</span> <small>No. Order: {{ $order->id }}</small> </div>
                    </div>
                    <hr>
                    <div class="table-responsive p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td>To</td>
                                </tr>
                                <tr class="content">
                                    <td class="font-weight-bold">Nama: {{ $order->nama_penerima }} <br>Alamat: {{ $order->alamat }} <br>Phone: {{ $order->phone }} <br>Kota: {{ $order->kota }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="products p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td>Description</td>
                                    <td>Qty</td>
                                    <td>Price</td>
                                    <td class="text-center">Total</td>
                                </tr>
                                @foreach ($order->products as $product)
                                  <tr class="add">
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->pivot->qty }}</td>
                                    <td>Rp. {{ $product->harga }}</td>
                                    <td class="text-center">Rp. {{ $product->pivot->qty * $product->harga }}</td>
                                  </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="products p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td></td>
                                    <td>Subtotal</td>
                                    <td>Ongkir</td>
                                    <td class="text-center">Total</td>
                                </tr>
                                <tr class="content">
                                    <td></td>
                                    <td>Rp. {{ $order->total_harga - 10000 }}</td>
                                    <td class="text-primary">Rp. 10000</td>
                                    <td class="text-center text-success">Rp. {{ $order->total_harga }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="address p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td>Kirim ke Bank</td>
                                </tr>
                                <tr class="content">
                                    <td> Bank Name : {{ $order->rekening->nama_bank }} <br> Atas nama: {{ $order->rekening->atas_nama }} <br> Dari Rekening : {{ $order->rekening->nomor_rekening }} <br> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @if ($order->image_path)
                        <div class="address p-2">
                          <table class="table table-borderless">
                            <tbody>
                              <tr class="add">
                                <td>Bukti Bayar</td>
                              </tr>
                              <tr class="content" style="display: flex; justify-content: center">
                                <td>
                                  <img src="{{ $order->image_path }}" alt="" width="400">
                                </td>
                              </tr>
                              
                            </tbody>
                          </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection