@extends('layouts.master')

@section('content')
    <!-- Page Content -->
    <h5 style="margin-left: 4.5%; margin-top: 8%;">History Transaction</h5>
      <div class="row">
        <div class="col-lg-10" style="margin-left: 5%;">
            @foreach ($orders as $order)
                <div class="row" style="background-color: white;">
                    <!--code trx-->
                    <div class="col-lg-2 float-left">
                    <p style="margin-top: 8px;">{{ $order->id }}</p>
                    </div>
                    <!--nama-->
                    <div class="col-lg-2">
                    <p style="margin-top: 8px;">{{ $order->nama_penerima }}</p>
                    </div>
                    <!--tanggal-->
                    <div class="col-lg-2">
                    <p style="margin-top: 8px;">{{ $order->created_at }}</p>                    
                    </div>
                    <!--harga-->
                    <div class="col-lg-1">
                    <p class="mt-3 text-success">Rp. {{ $order->total_harga }}</p>
                    </div>
                    <!--status-->
                    <div class="col-lg-2">
                    <p class="btn btn-success" disabled style="margin-top: 8px;">{{ $order->status }}</p>                    
                    </div>
                    <!--bukti-->
                    <div class="col-lg-2">
                        <a class="btn btn-primary" href="{{ route('orders.show.bukti', ['order'=>$order->id]) }}" style="margin-top: 8px;">Upload Bukti</a>
                    </div>
                    <!--invoice--> 
                    <div class="col-lg-1">
                    <a href="{{ route('orders.show', ['order'=>$order->id]) }}" class="mt-2 btn btn-warning">Invoice</a>
                    </div>
                </div>
            @endforeach

              
        </div>
      </div>    
    </div> 
@endsection
