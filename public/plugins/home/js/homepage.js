$(document).ready(function () {
	window.Product = {
		init: function() {
			var productTypeRequest = false;
			$(".product-navigation-item").on("click", function () { /* Hiển thị kiểu sản phẩm mới nhất, nhiều like nhất ...*/
				if(productTypeRequest) {
					return;
				}
				productTypeRequest = true;
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
					},
					complete: function () {
						productTypeRequest = false;
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
				var product_item_scroll = $(this);
				if($(".product-list-item-container").scrollTop() >= $(".product-list-item").height() - $(".product-list-item-container").height()) {
					if($(".product-current-page").last().text() !== $(".product-last-page").last().text()) {
					url = $(".product-next-page-url").last().text();
					if(product_item_scroll.data("loadMoreProductRequest")) {
						return;
					}
					product_item_scroll.data("loadMoreProductRequest", true);
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
						},
						complete: function () {
							product_item_scroll.data("loadMoreProductRequest", false);
						}
					});
				}
				}
			});
			/* End Load thêm sản phẩm khi scroll */
		},
		action: function () {
            $(document).on('hidden.bs.modal', '#alert-login-modal', function () {
        		$("#alert-login-modal").remove();
        		$(".mix-container").removeClass("blur");
        	});
			$(document).on("click", ".user-product-action > ul > li", function (e) {
				var action_status = $(this).attr("class").search("action-status");
				var product_object = $(this);
				var type_action = $(this).attr("action");
				if(product_object.data('requestRunning')) {
					return;
				}
				product_object.data('requestRunning', true);
				$.ajax({
					url: "/user/check-login",
					type: "GET",
					dataType: "json",
					success: function (login_status) {
						if(!login_status) { /* Nếu chưa login thì hiển thị yêu cầu login*/ 
							$(".mix-container").addClass("blur");
							var html = '<div class="modal fade" id="alert-login-modal"><div class="modal-dialog" role="document" id=""><div class="alert-login"><div class="alert-login-background"></div><div class="alert-login-logo"><a href="" title=""><img src="http://i.imgur.com/qwR1IG9.png" alt=""></a></div><p>Đăng nhập ngay để được cập nhật những item mới nhất theo sở thích của bạn nhé</p><div class="alert-login-footer row"><div class="alert-register col-xs-6"><a href="" title="">Đăng ký</a></div><div class="alert-register col-xs-6"><a href="" title="">Đăng nhập</a></div></div></div></div></div>';
							$("body").append(html);
							$("#alert-login-modal").modal({
				                show: true,
				                keyboard: 'static',
				                backdrop: true
				            });
						}
						else { /* Nếu đã login */
							switch(type_action)
							{
								case "like-product" : {
									var url = "/user/like-product";
									var product_id = product_object.attr("product-id");
									if(action_status === -1) {
										var sum_like = $(".product-sum-like > div[product-id='" + product_id + "']").html();
										++sum_like;
									}
									else {
										var sum_like = $(".product-sum-like > div[product-id='" + product_id + "']").html();
										--sum_like;
									}
									$(".product-sum-like > div[product-id='" + product_id + "']").html(sum_like);
								}
							}
							if(action_status === -1) {
								product_object.addClass("action-status");
							}
							else {
								product_object.removeClass("action-status");
							}
							$.ajax({
								async: false,
								url: url,
								type: 'GET',
								data: {
									product_id: product_id
								},
								dataType: 'json',
								success: function (data) {
									sum_like = $(".product-sum-like > div[product-id='" + product_id + "']").html(data);
								}
							});
						}
					},
					complete: function () {
						product_object.data('requestRunning', false);
					}
				})
			});	
		}
	};
});
