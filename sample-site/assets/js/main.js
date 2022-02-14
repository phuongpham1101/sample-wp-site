jQuery(document).ready(function($){ 
	/**
	 * This function calls ajax and runs a function on success and on failure
	 * @param  {string} action - This is the action name for the function that is called in php. It should match the php function name
	 * @param  {object} data - This is the data that is parsed to the php. It will be initialzed within the $_POST array
	 * @param  {function} onSuccess - This is the function that is run when the data is returned successfully
	 * @param  {function} onFail - This is the function that is run when the data is returned with an error
	 * @param  {bool} global_bool - This bool allows or removes the global bool. 
	 * @return {void} - This function does not return anything
	 * @memberof main
	 */
	function call_ajax(action,data,onSuccess,onFail,global_bool = true){
		$.ajax({
			url: ajaxurl + "?action="+action,
			type:"POST",
			data:data,
			global:global_bool,
			success:onSuccess,
			error:onFail,
		});
	}

	$('.menu-icon').click(function(event) {
		event.preventDefault();
		$(this).toggleClass('open');
		$('nav.mobile').slideToggle();
	});


	
});

jQuery(window).on('load', function($) {

});

