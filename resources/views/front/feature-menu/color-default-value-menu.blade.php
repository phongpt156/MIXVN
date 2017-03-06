@if(isset($color_default_values))
<ul class="dropdown-menu list-color-item">
    @foreach($color_default_values as $key => $value)
    	<li class="color-item"><a href="" title="" style="background-color:{{ $value->other_value or $value->vn_value }}"></a></li>
    @endforeach
</ul>
@endif
