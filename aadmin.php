	<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{
$qry1=mysqli_query($conn,"select * from rshop where rno='$rno'");
$count=mysqli_num_rows($qry1);
if($count>0){                                                                                           
echo "<script>alert('Ration number already taken')</script>";
}else{
$qry=mysqli_query($conn,"insert into rshop values('','$rno','$address','$psw')");
	if($qry)
	{
	
	
	echo "<script>alert('Registered sucessfully')</script>";
	
	}
	
	
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
<div id="templatemo_menu_wrapper">   
    
    <div id="templatemo_menu">
        <ul>
            <li class="active"><a href="aadmin.php">Home</a></li>
			
            <li><a href="index.php">Logout</a></li>	
	   

        </ul>    	
    </div> <!-- end of menu -->
</div>

<div id="tempatemo_content_wrapper">

    <div id="templatemo_content">
      <div id="content_panel">
        <p align="center">&nbsp;</p>
      
       
	    <form id="f1" name="f1" method="post" action="#">
  <table width="38%" height="393" border="0" align="center">
	
    <tr>
          <td colspan="2"  align="center" ><div class="style5"><h3>Add Ration Shop</h3></div></td>
    
    </tr>
	
    <tr>
   <td width="39%" height="41">Ration Number</td>
      <td width="61%"><input name="rno" type="text" required/>
      </td>
      
    </tr>
	
	<tr>
    
      <td height="34">Address</td>
      <td><textarea  name="address"  required></textarea></td>
     
    </tr>
	
	
	 <tr>
     
      <td width="39%" height="41">Password</td>
      <td width="61%"><input name="psw" type="password" required/>
      </td>
      
    </tr>
	
	
	

	<tr>
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
</table>
	   
	   
	   
 
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