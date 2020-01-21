$(document).ready(function() {

    'use strict';	
	var mail_form = $('.contact__form');
	var message_alert = $('.contact__msg');
	var form_data;

	function done_func(response){
		// console.log(response)
		message_alert.fadeIn().removeClass('alert-danger').addClass('alert-success');
		message_alert.text(response);
		setTimeout(function(){
			message_alert.fadeOut();
		}, 2000);
		mail_form.trigger('reset');
		// form.find('input:not([type="submit"]), textarea').val('');

	}

	function fail_func(data){
		// console.log(data);
		message_alert.fadeIn().removeClass('alert-success').addClass('alert-danger');
		message_alert.text(data.responseText);
		setTimeout(function(){
			message_alert.fadeOut();
		}, 2000);

	}

	mail_form.submit(function (event){
		event.preventDefault();
		form_data = $(this).serialize();
		// console.log(form_data);
		$.ajax({
			type: 'POST',
			url: './php/data.php',
			data: form_data
		})
		.done(done_func)
		.fail(fail_func);
	});

});