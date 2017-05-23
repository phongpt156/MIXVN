$(document).ready(function() {
	window.User = {
		init: function() {
			$("#register-box").modal({
		    	show: false,
		    	keyboard: 'static',
		    	backdrop: true
		    });
		    $("#login-box").modal({
		    	show: false,
		    	keyboard: 'static',
		    	backdrop: true
		    });
		    $("#success-modal").modal({
		    	show: true,
		    	keyboard: 'static',
		    	backdrop: true
		    })
		    $(".phone-register").on("click", function() {
		    	$(".phone-number-register-box").toggle();
		    	$(".gmail-register").toggle();
		    	$(".register-form-container").toggleClass("register-height");
		    });
		    $("#register-box").on("hidden.bs.modal", function() {
		    	$(".phone-number-register-box").css("display", "none");
		    	$(".gmail-register").css("display", "block");
		    	$("label.error").css("display", "none");
		    	$(".register-form-container").removeClass("register-height");
		    });
		    $.validator.addMethod(
		    	"vn_phonenumber",
		    	function(value, element) {
		    		return this.optional(element) || /^(01[2689]|09)[0-9]{8}$/.test(value);
		    	}
		    );
		    $(".phone-number-register-form").validate({
		    	rules: {
		    		phonenumber_register: {
		    			required: true,
		    			vn_phonenumber: true,
		    			remote: {
		    				url: "user/check-exist-user-phonenumber",
		    				type: "post",
		    				data: {
		    					phonenumber_register: $(".phonenumber_register").val(),
		    					_token: $('input[name=_token]').val()
		    				} 
		    					
		    			}
		    		},
		    		password_register: {
		    			required: true,
		    			minlength: 8
		    		},
		    		repeatpassword_register: {
		    			required: true,
		    			equalTo: "#password_register"
		    		}
		    	},
		    	messages: {
	    			phonenumber_register: {
	    				required: "Nhập số điện thoại",
	    				vn_phonenumber: "Số điện thoại không hợp lệ",
	    				remote: "Số điện thoại đã tồn tại"
	    			},
	    			password_register: {
	    				required: "Nhập mật khẩu",
	    				minlength: "Mật khẩu phải từ 8 ký tự trở lên"
	    			},
	    			repeatpassword_register: {
	    				required: "Nhập lại mật khẩu",
	    				equalTo: "Mật khẩu không khớp"
	    			}
	    		}
		    });
		    $(".phone-number-login-form").validate({
		    	rules: {
		    		phonenumber_login: {
		    			required: true,
		    			vn_phonenumber: true
		    		},
		    		password_login: {
		    			required: true,
		    			minlength: 8
		    		}
		    	},
		    	messages: {
	    			phonenumber_login: {
	    				required: "Nhập số điện thoại",
	    				vn_phonenumber: "Số điện thoại không hợp lệ"
	    			},
	    			password_login: {
	    				required: "Nhập mật khẩu",
	    				minlength: "Mật khẩu phải từ 8 ký tự trở lên"
	    			}
	    		}
		    });
		    $(".phone-login").on("click", function(){
		        $(".gmail-login").toggle();
		        $(".phone-number-login-box").toggle();
		        $(".login-form-container").toggleClass("login-height");
	      	});
	      	$("#login-box").on('hidden.bs.modal', function () {
	        	$(".gmail-login").show();
	        	$(".phone-number-login-box").hide();
	        	$(".login-form-container").removeClass("login-height");
	        });
	        $(".alert-register-button").on('click', function (e) {
	        	$("#alert-login-modal").modal('hide');
	        	$("#register-box").modal('show');
	        	e.preventDefault();
	        });
	        $(".alert-login-button").on('click', function (e) {
	        	$("#alert-login-modal").modal('hide');
	        	$("#login-box").modal('show');
	        	e.preventDefault();
	        });
		}
	};

	window.SearchTagging = {
		init: function () {
			$('.search-element').on('click', function (event) {
				event.preventDefault();
				var item = $(this).parent().attr("class");
				var value = $(this).attr("value");
				var tag_number = $('.tag-item').length;
				++tag_number;
				switch(item) {
					case 'cate-item' : {
						if($('.tag-item[item="cate-item"]').length > 0) {
							$('.tag-item[item="cate-item"]').remove();
						}
						$('.list-tagging-container').append('<div class="tag-item" stt="' + tag_number + '" item="cate-item"><div>' + value + '</div><div stt="' + tag_number + '" class="remove-tag-item">x</div><input type="hidden" value="' + value + '" name="' + item + '"/></div>');
						break;
					}
					case 'color-item' : {
						$('.list-tagging-container').append('<div class="tag-item" stt="' + tag_number + '" ><div>' + value + '</div><div stt="' + tag_number + '" class="remove-tag-item">x</div><input type="hidden" value="' + value + '" name="color-item[' + tag_number + ']"/></div>');
						break;
					}
					case 'feature-item' : {
						$('.list-tagging-container').append('<div class="tag-item" stt="' + tag_number + '" ><div>' + value + '</div><div stt="' + tag_number + '" class="remove-tag-item">x</div><input type="hidden" value="' + value + '" name="feature-item[' + tag_number + ']"/></div>');
						break;
					}
				}
			});
			$(document).on('click', '.remove-tag-item', function () {
				var stt = $(this).attr('stt');
				$('.tag-item').each( function () {
					if($(this).attr('stt') === stt) {
						$(this).remove();
					}
				});
			});
		}
	};
});
