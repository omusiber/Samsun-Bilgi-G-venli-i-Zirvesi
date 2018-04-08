<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
   <title>Samsun Bilgi Güvenliği Zirvesi</title>
   <meta name="description" content="">  
   <meta name="author" content="">
   <meta name="csrf-token" content="{{ csrf_token() }}">   

   <!-- mobile specific metas
   ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">  
   <link rel="stylesheet" href="{{ secure_asset('assets/css/bootstrap.min.css') }}">   
   <link rel="stylesheet" href="{{ secure_asset('assets/css/base.css') }}">
   <link rel="stylesheet" href="{{ secure_asset('assets/css/vendor.css') }}">
   @stack('styles')  
   <link rel="stylesheet" href="{{ secure_asset('assets/css/main.css') }}">  
   <link rel="stylesheet" href="{{ secure_asset('assets/css/datatables.min.css') }}">   
   <link rel="stylesheet" href="{{ secure_asset('assets/css/admin.css') }}">   


   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

<div class="container" id="app">
        @yield('content')
</div>

	
   <!-- script
   ================================================== -->
   <script src="{{ secure_asset('assets/js/jquery-2.1.3.min.js') }}"></script>
   <script src="{{ secure_asset('assets/js/datatables.min.js') }}"></script>
   @stack('scripts')
</body>
</html>