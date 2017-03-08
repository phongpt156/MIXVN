@if(isset($collections))
	@foreach($collections as $key => $value)
		<li class="collection-item"><a href="" title=""><img src="{{ $value->col_i_name }}" alt=""></a></li>
	@endforeach
@endif
