<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	 <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <!-- title of the page -->
	<title>@yield('title')</title>

   <!-- css of admin-->
   <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
   
  

</head>