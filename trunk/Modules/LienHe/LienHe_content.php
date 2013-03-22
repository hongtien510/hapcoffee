
<!-- form gửi mail liên hẹ -->

<script language="javascript">
function verifyForm()
	{
		if(document.mainform.name.value == "")
		{
				alert('Vui lòng nhập họ tên của bạn');
				document.mainform.name.focus()
				document.mainform.name.style.backgroundColor="#772B1A";
				return false
				
		}
		if(document.mainform.email.value == "")
		{
				alert('Vui lòng nhập địa chỉ Email')
				document.mainform.email.focus()
				document.mainform.email.style.backgroundColor="#772B1A";
				return false
		}
		else
		{
			if(document.mainform.email.value.indexOf('@') < 0 ||                                                                				email.value.indexOf('@') < 0)
			{
					alert('Email không đúng, vui lòng nhập lại. Vi du: tenban@hoanganhphatcoffee.com');
					document.mainform.email.focus();
					document.mainform.email.style.backgroundColor="#772B1A";
					return false;
			}
		}
	
		if(document.mainform.tieude.value == "")
		{
				alert('Bạn hãy nhập tiêu đề')
				document.mainform.tieude.focus()
				document.mainform.name.style.backgroundColor="#772B1A";
				return false
		}

			
}
</script>
<form method="post" enctype="multipart/form-data" name="mainform">
<table width="90%" cellspacing="1" border="0">
		<tbody><tr>
			<td width="20%" align="right" valign="middle">Tên :</td>
		  <td width="80%" valign="middle"><input type="text" size="60" value="" name="name" maxlength="90" class="input300"></td>
		</tr>
		<tr>
			<td align="right" valign="middle">Email :</td>
		  <td valign="middle"><input type="text" value="" size="60" maxlength="90" name="email" class="input300"></td>
		</tr>
		<tr>
			<td align="right" valign="middle">Địa chỉ :</td>
		  <td valign="middle"><input type="text" size="60" maxlength="300" name="diachi" class="input300"></td>
		</tr>
		<tr>
			<td align="right" valign="middle">Số điện thoại :</td>
		  <td valign="middle"><input type="text" value="" size="60" maxlength="80" name="sodienthoai" class="input300"></td>
		</tr>
		<tr>
			<td align="right" valign="middle">Tiêu đề :</td>
		  <td valign="middle"><input type="text" value="" size="60" maxlength="80" name="tieude" class="input300"></td>
		</tr>
		<tr valign="top">
			<td align="right" valign="top">Nội dung :</td>
		  <td valign="middle"><textarea cols="60" name="message" rows="10" class="textarea400"></textarea></td>
		</tr>


		<tr><td height="10" colspan="2"></td></tr>
		<tr valign="top">
			<td>&nbsp;</td>
			<td align="left">
            
            <input type="submit" value="Gửi liên hệ" id="submit" name="submit"  onclick="return verifyForm();">
            
            <input type="reset" name="Reset" value="Reset" >

		</td>
		</tr>
		
		<tr><td height="15" colspan="2"></td></tr>
		</tbody></table>
		
</form>


<?php

	$sql="select tenemail from maillienhe where maemail=1";
	$rs=mysql_query($sql);
	$r=mysql_fetch_assoc($rs);


//gui mail khi click vao button send mail
if(isset($_POST['submit']))
{
$ten = $_POST['name'];
$email = $_POST['email'];
$diachi = $_POST['diachi'];
$sodienthoai = $_POST['sodienthoai'];
if(isset($_POST['tieude']) && trim($_POST['tieude']) != "")
{
$tieude = $_POST['tieude'];
}
else
{
$tieude ="Bạn có Email";
}


$message = $_POST['message'];

  $to = $r['tenemail'];

// subject
$subject = $tieude;

// message
$message = "
<html>
<head>
  <title>$tieude</title>
</head>
<body>
  <p>Bạn có mail từ: $email với thông tin sau:</p>
  <table>
    <tr>
      <th>Tên: </th>
	  <td>$ten</td>	 
    </tr>  

	 <tr>
      <th>Email: </th>
	  <td>$email</td>	 
    </tr>  

	<tr>
      <th>Số điện thoại: </th>
	  <td>$sodienthoai</td>	 
    </tr>  	
	
	<tr>
      <th>Địa chỉ: </th>
	  <td>$diachi</td>	 
    </tr>  
	
	<tr>
      <td colspan=2>$message</td>	  
    </tr> 
	
  </table>
</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Additional headers
$headers .= 'To: ' .$to. "\r\n";
$headers .= 'From: ' .$email ."\r\n";
// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

    $mailok = mail($to,$subject,$message,$headers);
	if($mailok)
	{
		echo "Email đã được gửi đi thành công.";
	}
	
}
?>