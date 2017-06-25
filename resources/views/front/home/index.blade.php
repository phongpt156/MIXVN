@extends('layouts.front')
@section('title')
- Trang chủ
@endsection
@section('assets')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/home/css/homepage-body.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/home/css/slide.css') }}"/>

<script src="{{ asset('plugins/home/js/header.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('plugins/home/js/homepage.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('plugins/home/js/jssor.slider-24.1.5.min.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('plugins/home/js/slide.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('plugins/jquery/jquery.validate.min.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('plugins/jquery/additional-methods.min.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection
@section('content')
	@include('layouts.header')
	<div class="homepage-body">
		<div class="slide-container">
			<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:440px;overflow:hidden;visibility:hidden;">
		        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:440px;overflow:hidden;">
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
		<div class="homepage-main-container">
			<div class="homepage-main clearfix">
				<aside class="homepage-aside">
					<div class="nav navbar-nav">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".collection-list-item">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
				    	</button>
						<div class="collection-container">
							<ul class="navbar-collapse collapse collection-list-item nav nav-bar">
								<li class="collection-link-container"><a href="" title="" class="collection-link">Bộ sưu tập<i class="fa fa-angle-down"></i></a></li>
								@include('front.collection.collection-list', ['collections' => $collections])
							</ul>
						</div>
					</div>
				</aside>
				<div class="product-show">
					<div class="product-container">
						<div class="product-navigation-container clearfix">
							<div class="product-navigation">
								<div class="triangle-left">
								
								</div>
								<ul class="nav navbar-nav">
									<li class="active product-navigation-item" product-type="newest"><a href="javascript:void(0)" title=""><p>Mới nhất</p></a></li>
									<li class="product-navigation-item" product-type="mostlike"><a href="javascript:void(0)" title=""><p>Thích nhiều nhất</p></a></li>
									<li class="product-navigation-item" product-type="discount"><a href="javascript:void(0)" title=""><p>Sale</p></a></li>
									<li class="product-navigation-item" product-type="tendency"><a href="javascript:void(0)" title=""><p>Xu hướng</p></a></li>
								</ul>
							</div>
						</div>
						<div class="product-list-item-container">
							<ul class="product-list-item clearfix">
								@include('front.product.homepage-product-list', ['products' => $products])
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('layouts.footer')
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			Slide.init();
			User.init();
			Product.init();
			SearchTagging.init();
			Product.action();
			Product.detail();
		});
	</script>
@endsection
