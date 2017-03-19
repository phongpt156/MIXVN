@if(isset($male_cate))
	@php
		function ShowMaleMenuCategory($categories, $sub_id = 0) {
			$tmp = [];
				foreach($categories as $key => $value) {
					if($value->sub_id == $sub_id) {
						$tmp[] = $value;
						unset($categories[$key]);
					}
				}
			if($tmp) {
				if($sub_id ==0) echo '<ul class="dropdown-menu nav-justified list-cate-item">';
				else echo '<ul class="nav nav-bar sub-list-cate-item">';
				foreach($tmp as $item) {
					echo '<li class="cate-item"><a value="' . $item->name . '" href="" title="" class="search-element">' . $item->name . '</a>';
					ShowMaleMenuCategory($categories, $item->id);
					echo '</li>';
					
				}
				echo '</ul>';;
			}
		}
		ShowMaleMenuCategory($male_cate);
	@endphp
@endif
