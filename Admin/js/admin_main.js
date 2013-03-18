var CHITIETDONHANG;
$(document).ready(function(){
	$('.admin_select_hsx').live('change',function(){
	// alert('asdasd');
	$.ajax({
	   url:'Admin/Ajax/Ajax_XuLyChung.php',
	   dataType:'html',
	   type:'post',
	   data:{id:$(this).val(),act:'select_idDT'},
	   success:function(data){
		//alert(data);
		  $('#admin_idDT').html(data);
		   }
	  });	
	});
	
	
	
	$('.themtinhnang').live('click',function(){
	//alert('asdasd');
		$.ajax({
				url:'Admin/Ajax/Ajax_XuLyChung.php',
				type:'post',
				dataType:'html',
				data:$('form').serialize()+"&idDT="+$('.admin_idDT').val()+"&act=themtinhnang",
				//id_marsv:$("input[name='id_marsv']").val()
				success:function(data){	
					alert(data);
					
				}
			});
return false;			
		
	});
	

$('.admin_idDT').live('change',function(){
		//alert('sdfdsf');
		$.ajax({
		url:'Admin/Ajax/ThemTinhNangDienThoai_Ajax.php',
		type:'post',
		dataType:'html',
		data:{idDT:$(this).val(), idHSX:$("select[name='idHSX']").val()},
		success:function(data){
			//alert('asda');
				$('.themchucnang').html(data);
			
			}
			   
		});
		return false;
	});
	
	////////////////////////////////////////////////////////////////////////////////////
	$('.hangsx').live('change',function(){
		//alert('asdasd');
		$.ajax({
			url:'Admin/Ajax/DienThoai_Ajax.php',
			type:'post',
			dataType:'html',
			data:{idHSX:$(this).val()},
			success:function(data){
				$('.dienthoai').html(data);
			}
		});
	});

	
	$('a').click(function(){
		if($(this).attr('href')=='#')
		return false;
	
	});
	$.fn.toggleCheck = function(id) {
        return this.each(function() {
            this.checked = !this.checked;
			if(this.checked)
			{$('#'+id+' td').css({'background-color':'#f5f5f5'});}
			else
			{$('#'+id+' td').css({'background-color':''});}
        });}
	$('.admin_idDT').live('change',function(){
		//alert('sdfdsf');
		$.ajax({
		url:'Admin/Ajax/ThemTinhNangDienThoai_Ajax.php',
		type:'post',
		dataType:'html',
		data:{idDT:$(this).val(), idHSX:$("select[name='idHSX']").val()},
		success:function(data){
			//alert('asda');
				$('.themchucnang').html(data);
			
			}
			   
		});
		return false;
	});
	checked=function(id){
		$('input#'+id).toggleCheck(id);
		
	//	($('#'+id+' td').css('background-color')=rgb(205, 220, 220)) ? $('#'+id+' td').css({'background-color':'#cddcdc'}) : )
	
	}
	$('.admin_idDT_ChucNang').live('change',function(){
		//alert('sdfdsf');
		$.ajax({
		url:'Admin/Ajax/ThemChucNangDienThoai_Ajax.php',
		type:'post',
		dataType:'html',
		data:{idDT:$(this).val(), idHSX:$("select[name='idHSX']").val()},
		success:function(data){
			//alert('asda');
				$('.chucnangdienthoai').html(data);
			}   
		});
		return false;
	});

	$('.dagiaohang').click(function(){
	
		//alert('bbbbbbbbbbbbbbbb');
		$.ajax({
			url:'Admin/Ajax/Ajax_XuLyChung.php',
			type:'post',
			dataType:'html',
			data:$('form').serialize() + "&act=dagiaohang",
			success:function(data){
				alert(data);
			}
		
		});
		return false;
	});
	
	$('.themchucnangdienthoai2222').live('click',function(){
		//alert('tttttttttttt');
		$.ajax({
			url:'Admin/Ajax/Ajax_XuLyChung.php',
			type:'post',
			dataType:'html',
			data:$('form').serialize() + "&act=themchucnangdienthoai",
			success:function(data){
				alert(data);
			}
		});
		return false;
	});

	
	
	
	
	
	
	
	
		
});


function ResetTinhNang()
{
	document.getElementById('chupanh')  

}

function CheckAll()
{
	//var cb=document.getElementById('del');//Chi truy xuat den 01 doi tuong dau tien co id la del
	//var cb=document.sanpham.del[];//Loi cu phap
	var cb =document.getElementsByName('del[]');//OK
	
	var cbAll=document.getElementById('CheckAll');
	//alert(cbAll.checked);
	
	for(i=0;i<cb.length;i++)
	cb[i].checked=true;
	
}
function UnCheckAll()
{
	//var cb=document.getElementById('del');//Chi truy xuat den 01 doi tuong dau tien co id la del
	//var cb=document.sanpham.del[];//Loi cu phap
	var cb =document.getElementsByName('del[]');//OK
	
	var cbAll=document.getElementById('UnCheckAll');
	//alert(cbAll.checked);
	
	for(i=0;i<cb.length;i++)
	cb[i].checked=false;
}
