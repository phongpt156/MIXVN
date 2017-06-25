@extends('layouts.front')
@section('title')
- Trang tìm kiếm
@endsection

@section('assets')
<link rel="stylesheet" type="text/css" href="{{asset('plugins/home/css/searchpage-body.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('plugins/home/css/homepage-body.css')}}" />

<script src="{{ asset('plugins/home/js/jssor.slider-24.1.5.min.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('plugins/home/js/header.js') }}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
jQuery(document).ready(function ($) {
	SearchTagging.init();
	$('.product-image > img').on('click', function () {
		$('.md-product-image > img').attr('src', $(this).attr('src'));
	});
	$('.mix-product-item img').on('click', function () {
		$('.md-product-image > img').attr('src', $(this).attr('src'));
	});
	$('.product-set-item img').on('click', function () {
		$('.md-product-image > img').attr('src', $(this).attr('src'));
	})
    var jssor_1_options = {
      $AutoPlay: 0,
      $AutoPlaySteps: 9,
      $SlideDuration: 150,
      $SlideWidth: 72,
      $SlideHeight: 106,
      $SlideSpacing: 10,
      $Cols: 9,
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$,
        $Steps: 9
      },
      $BulletNavigatorOptions: {
        $Class: $JssorBulletNavigator$,
        $SpacingX: 1,
        $SpacingY: 1
      }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*responsive code begin*/
    /*remove responsive code if you don't want the slider scales while window resizing*/
    function ScaleSlider() {
        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
        if (refSize) {
            refSize = Math.min(refSize, 1920);
            jssor_1_slider.$ScaleWidth(refSize);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }
    ScaleSlider();
    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);

    var jssor_2_options = {
      $AutoPlay: 0,
      $AutoPlaySteps: 9,
      $SlideDuration: 150,
      $SlideWidth: 72,
      $SlideHeight: 106,
      $SlideSpacing: 10,
      $Cols: 9,
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$,
        $Steps: 9
      },
      $BulletNavigatorOptions: {
        $Class: $JssorBulletNavigator$,
        $SpacingX: 1,
        $SpacingY: 1
      }
    };

    var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);

    /*responsive code begin*/
    /*remove responsive code if you don't want the slider scales while window resizing*/
    function ScaleSlider2() {
        var refSize = jssor_2_slider.$Elmt.parentNode.clientWidth;
        if (refSize) {
            refSize = Math.min(refSize, 1920);
            jssor_2_slider.$ScaleWidth(refSize);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }
    ScaleSlider2();
    $(window).bind("load", ScaleSlider2);
    $(window).bind("resize", ScaleSlider2);
    $(window).bind("orientationchange", ScaleSlider2);

    var jssor_3_options = {
      $AutoPlay: 0,
      $AutoPlaySteps: 9,
      $SlideDuration: 150,
      $SlideWidth: 72,
      $SlideHeight: 106,
      $SlideSpacing: 10,
      $Cols: 9,
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$,
        $Steps: 9
      },
      $BulletNavigatorOptions: {
        $Class: $JssorBulletNavigator$,
        $SpacingX: 1,
        $SpacingY: 1
      }
    };

    var jssor_3_slider = new $JssorSlider$("jssor", jssor_3_options);

    /*responsive code begin*/
    /*remove responsive code if you don't want the slider scales while window resizing*/
    function ScaleSlider3() {
        var refSize = jssor_3_slider.$Elmt.parentNode.clientWidth;
        if (refSize) {
            refSize = Math.min(refSize, 1920);
            jssor_3_slider.$ScaleWidth(refSize);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }
    ScaleSlider3();
    $(window).bind("load", ScaleSlider3);
    $(window).bind("resize", ScaleSlider3);
    $(window).bind("orientationchange", ScaleSlider3);

    /*responsive code end*/
});
</script>
<style>

/* jssor slider arrow navigator skin 03 css */
/*
.jssora03l                  (normal)
.jssora03r                  (normal)
.jssora03l:hover            (normal mouseover)
.jssora03r:hover            (normal mouseover)
.jssora03l.jssora03ldn      (mousedown)
.jssora03r.jssora03rdn      (mousedown)
.jssora03l.jssora03ldn      (disabled)
.jssora03r.jssora03rdn      (disabled)
*/
.jssora03l, .jssora03r {
    display: block;
    top: -20px !important;
    position: absolute;
    /* size of arrow element */
    width: 10px;
    height: 10px;
    cursor: pointer;
    overflow: hidden;
}
.jssora03l {
	background: url(http://i.imgur.com/N0iLNfz.png) center center no-repeat;
}
.jssora03r {
	background: url(http://i.imgur.com/zKqUS4u.png) center center no-repeat;
}
.jssora03l {
	left: -15px !important;
}
.jssora03r {
	right: -15px !important;
}
.jssora03r { }
.jssora03l:hover {  }
.jssora03r:hover {  }
</style>
@endsection

@section('content')
	@include('layouts.header')
	<section class="searchpage-body">
		<div class="top-searchpage-body">
			<div class="left-top-searchpage-body">
				<div class="product-info-container clearfix">
					<div class="sr__product-image-container">
						<div class="md-product-image">
							<img src="{{asset('imgs/full.jpg')}}" alt="" />
							<div class="supplier-social-link">
								<div class="social-icon">
									<span><i class="fa fa-facebook white"></i></span>
								</div>
								<a href="#">decao.offical</a>
								<div class="social-icon">
									<span><i class="fa fa-instagram white"></i></span>
								</div>
								<a href="#">DECAO</a>
							</div>
						</div>
					</div>
					<div class="sr__product-info-container">
						<h1 class="sr__product-name text-center">
							{{ $product_name }}
						</h1>
						<h2 class="sr__product-collection">
							top 10 cách mặc
						</h2>
						<hr />

						<div class="sr__product-info-body">
							
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#common-info">Thông tin</a></li>
								<li><a data-toggle="tab" href="#menu1">Miêu tả</a></li>
							</ul>
							<div class="tab-content">
								<div id="common-info" class="tab-pane fade in active">
									<p>-Giá: <a href="#" title="">400.000</a> VNĐ</p>
									<p>-Size: <a href="#" title="">S, M, L, XL</a></p>
									<p>-Màu:
										<a href="#" title="">Đen</a>,
										<a href="#" title="">Ghi</a>,
										<a href="#" title="">Trắng</a>
									</p>
									<p>-Chất liệu: <a href="#" title="">Da bóng</a></p>
									<p>-Địa chỉ: <a href="#" title="">380 Phố Huế - Hai Bà Trưng - Hà Nội</a></p>
								</div>
								<div id="menu1" class="tab-pane fade">
									<div class="product-set-item">
										<div><img src="{{asset('imgs/vay2.jpg')}}" alt=""></div>
										<div style="display:inline-block;">Váy đỏ (red shop)</div>
									</div>
									<div class="product-set-item">
										<div><img src="{{asset('imgs/giay.jpg')}}" alt=""></div>
										<div style="display:inline-block;">Sneaker (red shop)</div>
									</div>
									<div class="product-set-item">
										<div><img src="{{asset('imgs/tui.jpg')}}" alt=""></div>
										<div style="display:inline-block;">Túi gucci (red shop)</div>
									</div>
									<div class="product-set-item">
										<div><img src="{{asset('imgs/vong.jpg')}}" alt=""></div>
										<div style="display:inline-block;">Choker (red shop)</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr style="border-bottom: 2px solid #4c4c4c; margin: 20px 0; border-top: none" />
				<div class="mix-product-info">
					<h1 class="text-center mix-product-title">mix</h1>
					<h2 class="text-center">gợi ý cách mặc món đồ này từ mọi người</h2>
					<div class="list-mix-product-container">
						<div class="list-mix-product">
							<div class="mix-product-item">
								<a href="#" title=""><img src="{{asset('imgs/v_mix1.jpg')}}" alt=""></a>
							</div>
							<div class="mix-product-item">
								<a href="#" title=""><img src="{{asset('imgs/v-mix2.jpg')}}" alt=""></a>
							</div>
							<div class="mix-product-item">
								<a href="#" title=""><img src="{{asset('imgs/v_mix3.jpg')}}" alt=""></a>
							</div>
							<div class="mix-product-item">
								<a href="#" title=""><img src="{{asset('imgs/v_mix4.jpg')}}" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="right-top-searchpage-body">
				<div class="list-product-result-container">
					<div class="list-product-result">
						
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/full.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v1.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v2.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v3.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v4.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v5.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v6.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v7.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v8.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v9.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v10.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v11.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v12.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v13.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v14.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v15.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v16.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v17.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v18.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v19.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="product-item">
							<div class="product-card">
								<div class="product-image-container">
									<div class="product-image">
										<img src="{{asset('imgs/v20.jpg')}}" alt="">
									</div>
									<div class="user-product-action">
										<ul class="row">
											<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
											<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
											<li class="col-xs-4" title="" ><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>

					</div>
				</div>
			</div>
		</div><!-- end top search page body -->
		<div class="mid-searchpage-body">
		<hr />
			<div class="ton-sur-ton-container">
				<h3 style="color: #fff; margin-bottom: 20px">Sản phẩm đã xem</h3>
				<div id="jssor" style="position:relative;margin:0 auto;top:0px;left:0px;width:809px;height:130px;overflow:hidden;visibility:hidden;">
			        <!-- Loading Screen -->
			        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:809px;height:130px;overflow:hidden;">
			            <div>
			                <img data-u="image" src="{{asset('imgs/full.jpg')}}" />
		                </div>
			        </div>
			    </div>
			</div>

			<hr />
			<div class="ton-sur-ton-container">
				<h3 style="color: #fff; margin-bottom: 20px">Ton-Sur-Ton</h3>
				<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:809px;height:130px;overflow:hidden;visibility:hidden;">
			        <!-- Loading Screen -->
			        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:809px;height:130px;overflow:hidden;">
			            <div>
			                <img data-u="image" src="{{asset('imgs/v20.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v2.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v3.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v4.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v5.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v6.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v7.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v8.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v9.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v10.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v11.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v12.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v13.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v14.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v15.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v16.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v17.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v18.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v19.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v20.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v1.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v2.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v3.jpg')}}" />
			            </div>
			        </div>
			        <!-- Arrow Navigator -->
			        <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:100%;" data-autocenter="2"></span>
			        <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:100%;" data-autocenter="2"></span>
			    </div>
			</div>

			<hr />
			<div class="people-like-container">
				<h3 style="color: #fff; margin-bottom: 20px">People like</h3>
				<div id="jssor_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:809px;height:130px;overflow:hidden;visibility:hidden;">
			        <!-- Loading Screen -->
			        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:809px;height:130px;overflow:hidden;">
			            <div>
			                <img data-u="image" src="{{asset('imgs/v20.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v19.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v18.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v17.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v16.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v15.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v14.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v13.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v12.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v11.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v10.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v9.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v8.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v7.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v6.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v5.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v4.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v3.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v2.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v20.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v19.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v18.jpg')}}" />
			            </div>
			            <div>
			                <img data-u="image" src="{{asset('imgs/v17.jpg')}}" />
			            </div>
			        </div>
			        <!-- Arrow Navigator -->
			        <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:100%;" data-autocenter="2"></span>
			        <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:100%;" data-autocenter="2"></span>
			    </div>
			</div>

		</div>
	</section>

	@include('layouts.footer')
@endsection
