<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();





if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"select * from customer where rno='$rno' && name='$name'");
$num=mysqli_num_rows($qry);
if($num==1)
{


$qry1=mysqli_query($conn,"select * from customer where rno='$rno' && name='$name' ");
$row=mysqli_fetch_assoc($qry1);
$_SESSION['rno']=$row['ratnum'];

?>
<script>alert('welcome to User home page');
</script>
<?php

header("location:userhome.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";

}
}
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-RationShop</title>
<meta name="keywords" content="free templates, Business Website, Free CSS Template, CSS, HTML" />
<meta name="description" content="Business Template is a free css template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<style type="text/css">
<!--
.style8 {
	color: #000066;
	font-weight: bold;
	font-size: 16px;
}
.style17 {
	font-size: 24px;
	color: #CCCCCC;
}
.style21 {color: #FFFFFF;
	font-weight: bold;
	font-size: 24px;
}
.style23 {color: #CC0033; font-size: 14px; font-weight: bold; }
.style24 {color: #FF0000; font-weight: bold; font-size: 14px; }
-->
</style>
<script>
function chg()
{
window.location.href = 'http://www.google.com';
}
</script>
</head>
<body>
<div id="templatemo_header_wrapper">
<div class="style1" id="templatemo_header">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p class="style2 style17"><span class="style21">E-Ration Web Application
</span></p>
    <p class="style2 style17">&nbsp;</p>
    <p class="style5">&nbsp;</p>
  </div>
</div> 
<?php include("include/userlogin.php"); ?>

<div id="tempatemo_content_wrapper">

    <div id="templatemo_content">
      <div id="content_panel">
        <p align="center">&nbsp;</p>
      
      
	  
	  
	  
	  <form id="form1" name="form1" method="post" action="">
	   <table width="45%" border="0" align="center">
         <tr>
           <td colspan="2" rowspan="1"><div align="center" class="style1"><strong><font size="+1">Customer Login</font> </div></td>
		 </tr>
			<tr>
		<td width="50%">&nbsp;</td>
		    <td width="50%">&nbsp;</td>
	  		</tr>
         <tr>
           <td height="53"align="center"><span class="style2"><strong>Ration Card Number </strong></span></td>
           <td><label>
             <input name="rno" type="text" id="rno" />
           </label></td>
         </tr>
         <tr>
           <td height="58" align="center"><span class="style2"><strong>Card Holder Name</strong></span></td>
           <td><label>
             <input name="name" type="password" id="name" />
           </label></td>
         </tr>
         <tr>
           <td height="53">&nbsp;</td>
           <td rowspan="2"><label>
             <input name="btn" type="submit" id="btn" value="Login" />
             <input type="reset" name="Submit2" value="Cancel" />
           </label></td>
         </tr>
		 
		 
		 
  </table>
</form>



	   
	   
 
  <div class="cleaner">
  <p>&nbsp;</p>
</div>
            
      </div> <!-- end of content panel -->
        
        <div class="cleaner"></div>
  </div> <!-- end of content -->
    
</div> <!-- end of content wrapper -->

<div id="templatemo_footer_wrapper">

	<div id="templatemo_footer">
	  <div class="section_w920">
        Copyrights And Reserved @ E-Ration Web Application
</div>
        <div class="cleaner"></div>
  </div> 
</div> 
</body>
</html>