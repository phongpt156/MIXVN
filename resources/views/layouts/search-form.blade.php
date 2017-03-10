{!! Form::open(['url' => '', 'class' => 'search-form'])!!}
	<div class="search-tagging">
		<div class="list-tagging-container">
				
		</div>
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
	<a class="search-icon">
		<img src="http://i.imgur.com/lga22vW.png" alt="">
	</a>
{!! Form::close() !!}
