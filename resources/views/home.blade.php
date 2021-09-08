@extends('layouts.app')
@section('title', 'Box for travel')
    

@section('content')

  {{-- CAROUSEL --}}
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" style="height: 580px" data-bs-interval="10000">
        <img src="{{asset('img/london.jpg')}}" class="img-fluid" style="object-position:bottom;" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container">
    <h4 class="py-3">Pack your bags, let's go! choose one of our <a href="{{route('productpage')}}">packages...</a> </h4>
  </div>

@endsection