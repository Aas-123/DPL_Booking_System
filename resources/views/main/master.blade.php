<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="{{asset('images/icon.png')}}">
	<title>@yield('title')</title>
   <link rel="stylesheet" href="{{asset('css/all.css')}}">
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">


</head>
<body>
@yield('content')


<script src="{{asset('js/all.js')}}"></script>
@yield('scripts')

@include('include.footer')

</body>
</html>