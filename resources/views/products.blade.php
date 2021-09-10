@extends('layouts.app')
@section('title', 'All travels')

@section('content')
    
    {{-- PAGE TITLE --}}
    <div class="container">
        <h2 class="py-5">Choose your next adventure...</h2>
    </div>

    {{-- PAGE CONTENT: all products --}}
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-5">

            @foreach ($trips as $trip)
                <div class="col">
                    <div class="card h-100">
                        {{-- CARD HEADER: name --}}
                        <div class="card-header">
                            <h4 class="card-title">{{$trip['name']}}</h4>
                        </div>
                        {{-- CARD BODY: city, people, button(more details) --}}
                        <div class="card-body">
                            <h5 class="card-text">
                                <img src="{{asset('img/place.gif')}}" style="width: 30px;" alt="place icon">
                                <span class="ps-3">City:</span> {{$trip['city']}}
                            </h5>
                            <h6>
                                <img src="{{asset('img/users.png')}}" style="width: 30px;" alt="people icon">
                                <span class="ps-3">People:</span> {{$trip['people']}}
                            </h6>
                            <a href="{{route('detailpage', ['id'=>$trip->id])}}" class="btn btn-dark mt-2">More Details</a>
                        </div>
                        {{-- CARD FOOTER: price--}}
                        <div class="card-footer text-muted text-center">
                            <h5>Price: {{$trip['price']}} $</h5>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- Pagination --}}
            <div class="py-4">
                {{$trips->links()}}
            </div>

        </div>
    </div>

@endsection
