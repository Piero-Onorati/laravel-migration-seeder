@extends('layouts.app')
@section('title', 'Details Trip')

@section('content')

    <div class="container d-flex justify-content-center pt-5 overflow-hidden">

        {{-- CARD  --}}
        <div class="card" style="max-width: 940px; height:390px;">
            <div class="row g-0">

                {{-- LEFT PART: image --}}
                <div class="col-md-4">
                    <img src="{{asset('img/paris-details.jpg')}}" class="img-fluid" alt="...">
                </div>

                {{-- RIGHT PART: --}}
                <div class="col-md-8">

                    {{-- Card-Body --}}
                    <div class="card-body">
                        {{-- Name --}}
                        <h3 class="card-title pb-2">{{$trip->name}}</h3>
                        {{-- Description --}}
                        <p class="card-text">{{$trip->description}}.</p>
                        {{-- City --}}
                        <h5 class="card-text">
                            <img src="{{asset('img/place.png')}}" style="width: 30px;" alt="place icon">
                            <span class="ps-3">City:</span> {{$trip->city}}
                        </h5>
                        {{-- People --}}
                        <h5>
                            <img src="{{asset('img/people.png')}}" style="width: 30px;" alt="people icon">
                            <span class="ps-3">People:</span> {{$trip->people}}
                        </h5>
                        {{-- Price --}}
                        <h5 class="card-text">
                            <img src="{{asset('img/price.png')}}" style="width: 30px;" alt="place icon">
                            <span class="ps-3">Price:</span> {{$trip->price}} $
                        </h5>
                    </div>

                    {{-- Card-Footer --}}
                    <div class="card-footer  text-center">
                        <h6>Validity: <span class="text-primary">{{$trip->validity}}</span></h6>
                    </div>

                </div>

            </div>
        </div>
    </div>

    
@endsection