@extends('layouts.app')
@section('title', 'Box for travel')
    

@section('content')

  {{-- CAROUSEL --}}

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" style="height: 650px" >
        <img src="{{asset('img/london.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Pack your bags, let's go! choose one of our <a class="link-light" href="{{route('productpage')}}">packages!</a></h3>
        </div>
      </div>
      <div class="carousel-item" style="height: 650px">
        <img src="{{asset('img/paris.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Romantic getaway in Paris? Check out our <a class="link-light" href="{{route('productpage')}}">offers!</a></h3>
        </div>
      </div>
      <div class="carousel-item" style="height: 650px">
        <img src="{{asset('img/new-york.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>New york is waiting for you...check our  <a class="link-light" href="{{route('productpage')}}">travel boxes!</a></h3>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

@endsection