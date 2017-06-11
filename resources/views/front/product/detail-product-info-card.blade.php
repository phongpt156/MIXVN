@if(isset($product))
	<div class="product-detail-card-aside">
		<div class="product-detail-image">
			<img src="{{ $product->pg_i_name }}" alt="">
		</div>
		<div class="product-detail-card-aside-footer">
			<div class="facebook-icon">
				<span><i class="fa fa-facebook white"></i></span>
			</div>
		</div>
	</div>
	<div class="product-detail-card-main">
		<div style="display:inline-block;max-width:160px">
			<div class="product-detail-card-header">
				<a href=""><h3 class="product-card-name">{{$product->p_name}}</h3></a>
				<a href=""><h4 class="text-right">{{$product_collection->c_name or ''}}</h4></a>
				<hr />
			</div>
			<div class="product-detail-card-body">
				<h3 class="product-detail-card-body-title">Thông tin</h3>
				<hr />
				<div class="product-card-feature-info">
					<p>Giá : <a href="">{{$product->p_price}}</a> VNĐ</p>
					@if(isset($feature_name))
						@foreach($feature_name as $fn_key => $fn_value)
							<p class="product-card-feature-item">
								<a href="">{{$fn_value->f_name}}</a> : 
								@if(isset($product_feature_value))
									@foreach($product_feature_value as $pfv_key => $pfv_value)
										@if($pfv_value->p_f_v_feature_id === $fn_value->f_id)
											<span class="product-card-feature-name">
												<a href="">{{$pfv_value->p_f_v_vn_value or $p_f_v_value->pfv_other_value}}</a>, 
											</span>
										@endif
									@endforeach
								@endif
							</p>
						@endforeach
					@endif
					<p>Địa chỉ : <a href="">{{$product->s_address}}</a></p>
				</div>
			</div>
		</div>
	</div>
@endif