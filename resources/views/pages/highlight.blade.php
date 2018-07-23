
@extends('main.master')
@extends('include.header')


@section('title')
Highlight
@endsection
<link rel="icon" type="image/png" href="{{asset('images/icon.png')}}">
@section('content')
<div class="jsjs" style="height: 300%;">
  <img src="{{asset('images/sta.jpg')}}" style="width: 100%;overflow: hidden; position: fixed;margin-top: -10px;z-index: -1;">

  @foreach($highlight as $high)
<div class="card well" style="width: 90rem;float:left;margin-left: 15%;margin-top: 6%;">
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-5">
             <video width="400" height="200" controls>
            <source src="{{ asset('images/Highlight/'.$high->video) }}" alt="">
                 </video>
            </div>
                <div class="col-lg-2"></div>
                    <div class="col-lg-5">
                        <div class="card-body">
                             <h5 class="card-title">vvgcgv</h5>
                               <p class="card-text">{{$high->video_detail}}</p>
                          
                             </div>
                              </div>
                          </div>
                      </div>
                  </div>


@endforeach


</div>

@endsection
