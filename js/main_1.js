
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

	$("#product1").mouseover(function(e) {
		$("#product1").animate({top:"-160px"});
	});
	$("#product1").mouseout(function() {
		$("#product1").animate({top:"-100px"});
	});
	
	$("#product2").mouseover(function(e) {
		$("#product2").animate({top:"-160px"});
	});
	$("#product2").mouseout(function() {
		$("#product2").animate({top:"-100px"});
	});
	
	$("#product3").mouseover(function(e) {
		$("#product3").animate({top:"-160px"});
	});
	$("#product3").mouseout(function() {
		$("#product3").animate({top:"-100px"});
	});
	
	$("#product4").mouseover(function(e) {
		$("#product4").animate({top:"-160px"});
	});
	$("#product4").mouseout(function() {
		$("#product4").animate({top:"-100px"});
	});
	
	$("#product5").mouseover(function(e) {
		$("#product5").animate({top:"-160px"});
	});
	$("#product5").mouseout(function() {
		$("#product5").animate({top:"-100px"});
	});





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