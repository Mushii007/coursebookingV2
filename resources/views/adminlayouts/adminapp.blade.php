<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LMS | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
@include('adminincludes.header_include')
</head>	

 @if (Route::currentRouteName() != 'login' && Route::currentRouteName() != 'register')

<body class="hold-transition skin-blue sidebar-mini">

@endif

	<div class="wrapper">
			@if (Route::currentRouteName() != 'login' && Route::currentRouteName() != 'register')

		@include('adminincludes.header')
		@include('adminincludes.sidebar')

		@endif
		
		@yield('content')
		@include('adminincludes.footer_include')

	</div>	

</body>


</html>