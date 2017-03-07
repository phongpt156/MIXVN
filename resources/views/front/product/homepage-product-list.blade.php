@if(isset($products))
	@foreach($products as $key => $value)
	<li class="product-item">
		<div class="product-card">
			<div class="product-image-container">
				<div class="product-image">
					<img src="{{ $value->p_i_name }}" alt="">
				</div>
			</div>
			<div class="product-info">
				
			</div>
		</div>
	</li>
	@endforeach
@endif