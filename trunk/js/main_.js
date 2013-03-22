
function showtintuc()
{
	document.getElementById('content_nav_tintuc').style.display='block';
	document.getElementById('content_nav_truyenthong').style.display='none';
}

function showtruyenthong()
{
	document.getElementById('content_nav_tintuc').style.display='none';
	document.getElementById('content_nav_truyenthong').style.display='block';
}

$(document).ready(function(){

	$('img.img_pro1').click(function(){
		var source = $('img.img_pro1').attr("src");
		//alert (source);
		$('img.img_pro').attr("src", source);
	});
	$('img.img_pro2').click(function(){
		var source = $('img.img_pro2').attr("src");
		//alert (source);
		$('img.img_pro').attr("src", source);
	});	
	$('img.img_pro3').click(function(){
		var source = $('img.img_pro3').attr("src");
		//alert (source);
		$('img.img_pro').attr("src", source);
	});	
	$('img.img_pro4').click(function(){
		var source = $('img.img_pro4').attr("src");
		//alert (source);
		$('img.img_pro').attr("src", source);
	});	


});