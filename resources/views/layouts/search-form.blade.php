{!! Form::open(['url' => '', 'class' => 'search-form'])!!}
	<div class="search-tagging">
		{!!
			Form::text(
				'',
				'',
				[
					'placeholder' => 'Nhập hoặc chọn "Từ Khóa" bên dưới để tìm sản phẩm'
				]
			)
		!!}
	</div>
	<div class="search-icon">
		<img src="http://i.imgur.com/lga22vW.png" alt="">
	</div>
{!! Form::close() !!}
