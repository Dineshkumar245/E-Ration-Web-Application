<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
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
<?php include("include/billink.php"); ?>

<div id="tempatemo_content_wrapper">

    <div id="templatemo_content">
      <div id="content_panel">
        <p align="center">&nbsp;</p>
      
       
	   
	   <form action="" method="post">
	
	<br />
		<br />
	<div align="center">   
	 Enter Customer Ration Number<input type="text" name="rno" />
		
		
			
   Select Month
     <select name="month">
	  
	  <option value="jan">January</option>
	   <option value="feb">Feburary</option>
	    <option value="march">March</option>
		 <option value="april">April</option>
		  <option value="may">May</option>
		   <option value="june">June</option>
		    <option value="july">July</option>
			 <option value="agust">Agust</option>
			  <option value="sept">Sept</option>
			   <option value="oct">October</option>
			    <option value="nov">November</option>
				 <option value="dese">December</option>
     </select> 
	 
	 
	 
	 <br />
		<br />
		 <input type="submit" name="btn" value="Search" />

			
			
			
			
			
			
			
			</div>
		</form>

<table width="98%" align="center">

<tr>
		<td colspan="7" align="center"><strong>Customer Details</strong></td>
  </tr>

	<tr>
		<td colspan="7">&nbsp;</td>
  </tr>
	
		    <tr>
          <td width="1%">&nbsp;</td>
            <td width="7%"><div align="center" class="style6"><strong>Ration Card No</strong> </div></td>
		    <td width="10%"><div align="center" class="style6"><strong>Product Name</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>Qunatity</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>Price</strong> </div></td>
		    <td width="11%"><div align="center" class="style6"><strong>Amount</strong> </div></td>
			<td width="11%"><div align="center" class="style6"><strong>Month</strong> </div></td>
			 </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($conn,"select * from buy where rno='$rno' && month='$month'");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		?>

        <tr>
		 <td width="1%">&nbsp;</td>
		  <td><div align="center"><?php echo $row['rno'];?></div></td>
		   <td><div align="center"><?php echo $row['name'];?></div></td>
		     <td><div align="center"><?php echo $row['qty'];?></div></td>
			   <td><div align="center"><?php echo $row['price'];?></div></td>
			    <td><div align="center"><?php echo $row['amnt'];?></div></td>
			     <td><div align="center"><?php echo $row['month'];?></div></td>
			 		 
        </tr>
		
		
		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td>&nbsp;</td>
			 			
		</tr>
		
        <?php
		$i++;
		}
		?>
				<tr>

		<td colspan="10" align="center">&nbsp;</td>
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