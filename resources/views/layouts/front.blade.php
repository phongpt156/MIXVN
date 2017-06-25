<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MIX VN @yield('title')</title>
	<link rel="stylesheet" href="{!! asset('plugins/bootstrap/css/bootstrap.min.css') !!}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/home/css/header.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/home/fonts/font-awesome.min.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/home/css/footer.css') }}"/>
	
	<script type="text/javascript" src="{!! asset('plugins/jquery/jquery.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
	@yield('assets')
	<style type="text/css" media="screen">
		@font-face {
		    font-family: VL_Piron;
		    src: url('{!!asset("plugins/home/fonts/VL_Piron.ttf")!!}');
		}
		@font-face {
		    font-family: VNF-Stag-Sans-Book;
		    src: url('{!!asset("plugins/home/fonts/VNF-Stag Sans-Book.ttf")!!}');
		}
		@font-face {
		    font-family: Saigonese;
		    src: url('{!!asset("plugins/home/fonts/Saigonese.otf")!!}');
		}
	</style>
</head>
<body>
	@if(!Auth::check())
		@include('layouts.alert-login')
	@endif
	<div class="container-fluid mix-container">
    	@yield('content')
	</div>
	<div class="modal fade" id="product-detail-card">
	    <div class="modal-dialog" role="document" id="">
    		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<div class="product-detail-card clearfix">
		    </div>
	    </div>
	</div>
</body>
</html>
