@extends('layouts.main')

@section('container')
  {{-- <h1>Halaman Home</h1> --}}
{{-- banner --}}
  <img src="img/slider/slider1.png" class="banner img-fluid mb-4"style="border-radius: 15px" width="100%" alt="...">

{{-- category --}}
  <section class="pilih-liga mb-4">
    <h3>Pilih Liga</h3>
    <hr>
    <div class="row">
      @foreach ($ligas as $liga)     
      <div class="col">
        <div class="card shadow">
          <div class="card-body text-center" style="border-radius: 15px">
            {{-- {{ $liga->images }} --}}
            <img src="img/liga/{{ $liga->images }}" style="max-height: 100px" alt="">
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  <section class="pilih-product mb-4">
    {{-- product --}}
    <h3>Best Product</h3>
    <hr>
    <div class="row">
      @foreach ($products as $product)     
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img/jersey/{{ $product->images }}" class="card-img-top" style="max-height: 50%" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->price }} + {{ $product->price_nameset }}</p>
            <a href="#" class="btn btn-primary">Detail Product</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  <section class="pilih-product mb-4">
    {{-- product --}}
    <h3>Pilih Product</h3>
    <hr>
    <div class="row">
      @foreach ($all_products as $all_product)     
      <div class="col mb-3">
        <div class="card" style="width: 18rem;">
          <img src="img/jersey/{{ $all_product->images }}" class="card-img-top" style="max-height: 50%" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">{{ $all_product->name }}</h5>
            <p class="card-text">Rp. {{ number_format($all_product->price) }} + Rp. {{  number_format($all_product->price_nameset) }}</p>
            <a href="#" class="btn btn-primary">Detail Product</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
 
@endsection