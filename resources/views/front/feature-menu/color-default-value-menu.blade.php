@if(isset($color_default_values))
<ul class="dropdown-menu list-color-item">
    @foreach($color_default_values as $key => $value)
    	<li class="color-item"><a href="" title="" style="background-color:{{ $value->other_value or $value->vn_value }}" class="search-element" value="{{ $value->vn_value or $value->other_value }}"></a></li>
    @endforeach
</ul>
@endif
