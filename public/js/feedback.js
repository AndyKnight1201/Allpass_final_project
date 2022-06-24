jQuery.validator.methods.matches = function (value, element, params) {
    var re = new RegExp(params);
    return this.optional(element) || re.test(value);
};

var re = new RegExp("^09\\d{8}$");
$( "#form" ).validate({
	rules: {
		phone: {
			required: true,
			matches: re, // <-- no such method called "matches"!
		},
		name: {
			required: true,
		},
		suggestion: {
			required: true,
		},
  	},

	messages: {
		phone: {
			required: "請填寫您的手機號碼",
			matches: "您的手機號碼格式錯誤",
		},
		name: {
			required: "請填寫您的姓名",
		},
		suggestion: {
			required: "請填寫建議內容",
		},
	},


	submitHandler: function (form, e) {
		e.preventDefault();

		$.ajaxSetup({
			headers: {
			   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		   }
	   });
		let formData = $('#form').serialize();
		$.ajax({
			url: '/store_feedback',
			type: 'POST',
			data: formData,
			cache: false,
			processData: false,
			success: function(form) {
				// sweetAlert
				Swal.fire({
					title: '謝謝您的留言',
					icon: 'success',
					confirmButtonText: '是',
				})
			},	
		})
	}
});