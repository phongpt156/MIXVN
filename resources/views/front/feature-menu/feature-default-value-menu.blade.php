@if(isset($feature_default_values))
<ul class="dropdown-menu list-feature-item">
	@foreach($feature_default_values as $key => $value)
		<li class="feature-item"><a href="" title="" class="search-element" value="{{ $value->vn_value or $value->other_value }}">{{ $value->vn_value or $value->other_value }}</a></li>
	@endforeach
</ul>
@endif
