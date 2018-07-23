@extends('main.master')
@include('include.header')
@include('include.nav')


<link rel="icon" type="image/png" href="{{asset('images/icon.png')}}">
@section('title')
DPL
@endsection

@section('content')
<section class="jsjs" style="height: 160%;background-color: grey;">
@foreach($news as $new)
<div class="card well" style="width: 43rem;float:left;margin-left: 14px;margin-top: 15px;">
  <img class="card-img-top" src="{{ asset('images/News/'.$new->feed_image) }}" alt="Card image cap" height="300px;">
  <div class="card-body">
    <h5 class="card-title">{{$new->feed_title}}</h5>
    <p class="card-text">{{$new->news_feed}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endforeach
</section>

@endsection


