$(function(){
	$('.add2cart').submit(function(){
		var data = $(this).serialize();
		$.ajax({
			// url: '',
			type: 'POST',
			data: data,
			success: function(res) {
				console.log(res);
			},
			error: function(){
				alert('Error');
			}
		});
		return false;
	});
});