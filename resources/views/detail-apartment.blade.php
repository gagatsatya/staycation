@extends('layout.main')
@section('container')

<section class="detail">
    <div class="row" style="margin-top:80px">
        <div class="col"></div><div class="col-auto text-center">
            <h1>{{ $item->name }}</h1>
          <p>
            {{ $item->city }},{{ $item->country }}
          </p>
        </div>
        <div class="col"></div>
    </div>
    <div class="row">
        <div class="col-6">
            <img src="/images/{{ $item->img1 }}" alt="img" width="643" height="500">
        </div>
        <div class="col-6">
            <img src="/images/{{ $item->img2 }}" alt="img" width="450" height="245" style="margin-left:80px">
            <img src="/images/{{ $item->img3 }}" alt="img" width="450" height="245" style="margin-left:80px;margin-top:10px">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-6">
            <h4>About the place</h4>
            <p>{!! $item->desc !!}</p>
        </div>
        <div class="col-6 text-center align-self-center">
            <h2>${{ $item->price }} per night</h2>
            <a href="#"><button style="padding:10px 40px 10px 40px;background-color:#3F6DF6;color:white">Book Now</button></a>
        </div>
    </div>

</section>
@endsection