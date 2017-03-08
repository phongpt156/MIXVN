@if(isset($products))
	@foreach($products as $key => $value)
	<li class="product-item">
		<div class="product-card">
			<div class="product-image-container" product-id="{{ $value->p_id }}">
				<div class="product-image">
					<img src="{{ $value->p_i_name }}" alt="">
				</div>
				<div class="user-product-action">
					<ul class="row">
						@if(isset($list_product_user_like))
							@if(in_array($value->p_id, $list_product_user_like))
								<li class="col-xs-4 liked" action="like-product"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
							@else
								<li class="col-xs-4" action="like-product"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
							@endif
						@else
							<li class="col-xs-4" action="like-product"><a href="javascript:void(0)" title=""><img src="http://i.imgur.com/LjwCZFM.png" alt=""></a></li>
						@endif
						<li class="col-xs-4"><a href="javascript:void(0)" title="" data-toggle="tooltip"><img src="http://i.imgur.com/O7whI4a.png" alt=""></a></li>
						<li class="col-xs-4"><a href="javascript:void(0)" title=""><img src="https://s10.postimg.org/eaem2xss9/ghim.png" alt=""></a></li>
					</ul>
				</div>
			</div>
			<div class="product-info clearfix">
				<div class="product-name">
					<a href="" title="">{{ $value->p_name }}</a>
				</div>
				<div class="supplier-name">
					<a href="" title="">{{ $value->s_name }}</a>
				</div>
				<div class="product-info-footer clearfix">
					<div class="product-price">
						<a href="" title="">{{ $value->p_price }}</a>
					</div>
					<div class="product-sum-like">
						{{ $value->p_like }}
						<span class="fa fa-heart"></span>
					</div>
				</div>
			</div>
		</div>
	</li>
	@endforeach
	<div class="product-current-page">
		{{ $products->currentPage() }}
	</div>
	<div class="product-last-page">
		{{ $products->lastPage() }}
	</div>
	<div class="product-next-page-url">
		{{ $products->nextPageUrl() }}
	</div>
@endif
