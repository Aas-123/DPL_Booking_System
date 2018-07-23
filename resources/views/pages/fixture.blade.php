
@extends('main.master')
@extends('include.header')

@section('title')
Points Table
@endsection
 <link rel="icon" type="image/png" href="{{asset('images/icon.png')}}">
@section('content')
<img src="{{asset('images/image1.jpg')}}" style="width: 100%;overflow: hidden; position: fixed;margin-top: -10px;z-index: -1;">
<div class="container-fluid" style="width: 50%;">
	<div class="row">
		<div class="col-lg-12">

<table class="table table-sm table-dark" style="margin-top: 20%;">
  <caption class="text-success">List of users</caption>
  <thead>
    <tr>
      <th scope="col">Teams</th>
      <th scope="col">Played</th>
      <th scope="col">Won</th>
      <th scope="col">Draw</th>
      <th scope="col">Lost</th>
      <th scope="col">Points</th>
    </tr>
  </thead>
  <tbody>
   @foreach($point as $poi)
    <tr>
      <td>{{$poi->teams}}</td>
      <td class="text-center">{{$poi->played}}</td>
      <td class="text-center">{{$poi->won}}</td>
      <td class="text-center">{{$poi->draw}}</td>
      <td class="text-center">{{$poi->lost}}</td>
      <td class="text-center">{{$poi->point}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </div>
</div>


@endsection


