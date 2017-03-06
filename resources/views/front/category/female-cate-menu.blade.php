@if(isset($female_cate))
	@php
		function ShowFemaleMenuCategory($categories, $sub_id = 0) {
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
					echo '<li class="cate-item"><a href="" title="">' . $item->name . '</a>';
					ShowFemaleMenuCategory($categories, $item->id);
					echo '</li>';
					
				}
				echo '</ul>';
			}
		}
		ShowFemaleMenuCategory($female_cate);
	@endphp
@endif
