@extends('layouts.front')
@section('title')
- Trang chủ
@endsection
@section('assets')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/home/css/header.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/home/css/homepage-body.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/home/css/slide.css') }}"/>
<script src="{{ asset('plugins/home/js/header.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('plugins/home/js/jssor.slider-22.2.10.min.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('plugins/home/js/slide.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('plugins/jquery/jquery.validate.min.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('plugins/jquery/additional-methods.min.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection
@section('content')
	@include('layouts.header')
	<div class="homepage-body">
		<div class="slide-container">
			<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:540px;overflow:hidden;visibility:hidden;">
	        	<!-- Loading Screen -->
		        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
		            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
		            </div>
		            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
		            </div>
		        </div>
		        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:540px;overflow:hidden;">
		            <div>
		                <a href="" title=""><img data-u="image" src="https://s17.postimg.org/xdtdgrevj/bener_1.jpg" /></a>
		            </div>
		            <div>
		                <a href="" title=""><img data-u="image" src="https://s15.postimg.org/alo07fkcb/baner_2.jpg" /></a>
		            </div>
		            <div>
		                <a href="" title=""><img data-u="image" src="https://s32.postimg.org/w24b2hif9/baner_3.jpg" /></a>
		            </div>
		            <div>
		                <a href="" title=""><img data-u="image" src="https://s18.postimg.org/mphq0zv95/baner_4.jpg" /></a>
		            </div>
		            <div>
		                <a href="" title=""><img data-u="image" src="https://s31.postimg.org/gfw9h51x7/Homepage_1.jpg" /></a>
		            </div>
		        </div>
		        <!-- Arrow Navigator -->
		        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
		        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
		    </div>
		</div>
	</div>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			Slide.init();
			User.init();
		});
	</script>
@endsection
