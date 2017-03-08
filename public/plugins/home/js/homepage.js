$(document).ready(function () {
	window.Product = {
		init: function() {
			$(".product-navigation-item").on("click", function () { /* Hiển thị kiểu sản phẩm mới nhất, nhiều like nhất ...*/
				$(".product-item").remove();
				var url = $(this).attr("product-type");
				$(".product-navigation-item").each(function () {
					if($(this).attr("class").search("active") !== -1) {
						$(this).removeClass("active");
						return false;
					};
				});
				$(this).addClass("active");
				$.ajax({
					url: "/product/" + url + "-product",
					type: "GET",
					dataType: "html",
					beforeSend: function () {
						$(".product-list-item").append("<div class='product-loading-image'><img src='https://img06.rl0.ru/5df7336964a28e1a118c2624e5fb31dc/c800x800/ponyach.ru/images/loading.gif'></div>");
					},
					success: function (data) {
						$(".product-list-item").html(data);
						/* load thêm sản phẩm khi còn chỗ*/
						var height = $(".product-list-item").innerHeight();
						var parent_height = $(".product-list-item-container").innerHeight();
						if(height < parent_height) {
							if($(".product-current-page").last().text() !== $(".product-last-page").last().text()) {
								url = $(".product-next-page-url").last().text();
								$.ajax({
									async: false,
									url: url,
									type: "GET",
									dataType: "html",
									success: function (data) {
										$(".product-loading-image").remove();
										$(".product-list-item").append(data);
									}
								});
							}
						}
						$(".product-loading-image").remove();
						/* end load thêm sản phẩm khi còn chỗ*/
					}
				});
			});

			/* load thêm sản phẩm khi còn chỗ*/
			var height = $(".product-list-item").innerHeight();
			var parent_height = $(".product-list-item-container").innerHeight();
			if(height < parent_height) {
				if($(".product-current-page").last().text() !== $(".product-last-page").last().text()) {
					url = $(".product-next-page-url").last().text();
					$.ajax({
						url: url,
						type: "GET",
						dataType: "html",
						beforeSend: function () {
							$(".product-list-item").append("<div class='product-loading-image'><img src='https://img06.rl0.ru/5df7336964a28e1a118c2624e5fb31dc/c800x800/ponyach.ru/images/loading.gif'></div>");
						},
						success: function (data) {
							$(".product-loading-image").remove();
							$(".product-list-item").append(data);
						}
					});
				}
			}
			/* end load thêm sản phẩm khi còn chỗ*/
			/* Load thêm sản phẩm khi scroll */
			$(".product-list-item-container").on("scroll", function () {
				if($(".product-list-item-container").scrollTop() >= $(".product-list-item").height() - $(".product-list-item-container").height()) {
					if($(".product-current-page").last().text() !== $(".product-last-page").last().text()) {
					url = $(".product-next-page-url").last().text();
					$.ajax({
						async: false,
						url: url,
						type: "GET",
						dataType: "html",
						beforeSend: function () {
							$(".product-list-item").append("<div class='product-loading-image'><img src='https://img06.rl0.ru/5df7336964a28e1a118c2624e5fb31dc/c800x800/ponyach.ru/images/loading.gif'></div>");
						},
						success: function (data) {
							$(".product-loading-image").remove();
							$(".product-list-item").append(data);
						}
					});
				}
				}
			});
			/* End Load thêm sản phẩm khi scroll */
		}
	};
});
