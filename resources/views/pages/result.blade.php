
@extends('main.master')
@extends('include.header')

@section('title')
Result
@endsection

<link rel="icon" type="image/png" href="{{asset('images/icon.png')}}">
@section('content')
<div class="jsjs" style="height: 130%;">
  <img src="{{asset('images/resultstadium.jpg')}}" style="width: 100%;overflow: hidden; position: fixed;margin-top: -10px;z-index: -1;">
   <div class="card well" style="width: 90rem;float:left;margin-left: 18%;margin-top: 6%;">
     <div class="container-fluid">
       <div class="row">
            <div class="col-lg-12">
                 <div class="card-body">
                    <h1 class="card-title text-center"><legend>Result Of Latest Matches</legend></h1>
                  </div>
                </div>
             </div>
         </div>
    </div>
   @foreach($result as $res)
  <div class="card well" style="width: 42rem;float:left;margin-left: 2%;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5">
          <h3>{{$res->team1}}</h3>
      </div>
      <div class="col-lg-2">
        <h4 style="margin-left: -15px;">VS</h4>
      </div>
      <div class="col-lg-5">
          <h3>{{$res->team2}}</h3>
      </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card well" style="width: 42rem;margin-left: -35px;">
            <div class="card-body">
              <p>{{$res->result_detail}}</p>
            </div>
             </div>
        </div>
      </div>
    </div>
</div>
@endforeach
</div>
@endsection



