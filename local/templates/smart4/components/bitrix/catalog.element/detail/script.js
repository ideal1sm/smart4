$(function(){
	$('.add2cart').submit(function(){
		var data = $(this).serialize();
		console.log(data)
		$.ajax({
			url: '/catalog/' + path,
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