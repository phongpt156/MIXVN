@if(isset($product))
	<div class="product-detail-card-aside">
		<div class="product-detail-image">
			<img src="{{ $product->p_i_name }}" alt="">
		</div>
		<div class="product-detail-card-footer">
			<div class="facebook-icon">
				<span><i class="fa fa-facebook white"></i></span>
			</div>
		</div>
	</div>
@endif