$(document).ready(function(){
	$('ul#team-thumbs li').click(function(){
		var profile = $(this).find('img').prop('alt');
		
		$('ul#team-thumbs').fadeOut(600, function(){
			$('div#team-box').html('<img src="images/team.jpg" alt="summat">');
		});
	});

});