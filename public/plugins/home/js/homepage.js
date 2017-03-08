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
		},
		action: function () {
			$(document).on("click", ".user-product-action > ul > li", function () {
				$.ajax({
					url: "/user/check-login",
					type: "GET",
					dataType: "json",
					success: function (login_status) {
						if(!login_status) {
							$(".mix-container").addClass("blur");
							var html = '<div class="modal fade" id="alert-login-modal"><div class="modal-dialog" role="document" id=""><div class="alert-login"><div class="alert-login-background"></div><div class="alert-login-logo"><a href="" title=""><img src="http://i.imgur.com/qwR1IG9.png" alt=""></a></div><p>Đăng nhập ngay để được cập nhật những item mới nhất theo sở thích của bạn nhé</p><div class="alert-login-footer row"><div class="alert-register col-xs-6"><a href="" title="">Đăng ký</a></div><div class="alert-register col-xs-6"><a href="" title="">Đăng nhập</a></div></div></div></div></div>';
							$("body").prepend(html);
							$("#alert-login-modal").modal({
			                    show: true,
			                    keyboard: 'static',
			                    backdrop: true
			                });
			                $("#alert-login-modal").on('hidden.bs.modal', function () {
		                		$("#alert-login-modal").remove();
		                		$(".mix-container").removeClass("blur");
		                	});
						}
					}
				})
			});	
		}
	};
});
