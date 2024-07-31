<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"select * from rshop where rno='$uname' && psw='$password'");
$num=mysqli_num_rows($qry);
if($num>0)
{

  $_SESSION['ratnum']=$uname;

?>
<script>alert('welcome to admin home page');
</script>
<?php

header("location:adminhome.php");
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
.style3 {font-size: 16px}
.style7 {
	color: #FF0000;
	font-weight: bold;
	font-size: 12px;
}
.style9 {
	color: #FFFFFF;
	font-size: 24px;
}
.style18 {	color: #CCCCCC;
	font-size: 14px;
}
.style19 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 24px;
}
-->
</style>
</head>
<body>
<div id="templatemo_header_wrapper">
<div class="style1" id="templatemo_header">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <span class="style2 style17"><span class="style19">E-Ration Web Application
</span></span>
    <p class="style5">&nbsp;</p>
    <p class="style6 style18">&nbsp;</p>
    <p class="style2 style17 style9">&nbsp;</p>
    <p class="style5">&nbsp;</p>
  </div>
</div> 
<div id="templatemo_menu_wrapper">   
    
    <div id="templatemo_menu">
        <ul>
            <li class="active"><a href="index.php">Admin</a></li>
			  <li><a href="ration.php">Ration Login</a></li>	
            <li><a href="user.php">User Login</a></li>	
	   

        </ul>    	
    </div> <!-- end of menu -->
</div>


<div id="tempatemo_content_wrapper">

    <div id="templatemo_content">
    
    	<div class="recent_projects">
        
        	<div class="project_slideshow">
            

            <div id="one" class="contentslider">
                <div class="cs_wrapper">
                    <div class="cs_slider">
                    
                        <div class="cs_article">
                            
                            <img src="images/rationshop.jpg" alt="Screenshot 1" />
                            
                        </div><!-- End cs_article -->
                        
                        <div class="cs_article">
                            <img src="images/home-images-01.jpg" alt="Screenshot 2" />
                        </div><!-- End cs_article -->
                        
                        <div class="cs_article"> 
                            <img src="images/home-images-01.jpg" alt="Screenshot 3" /> 
                        </div><!-- End cs_article -->
                        
                    
                    </div><!-- End cs_slider -->
                </div><!-- End cs_wrapper -->
            </div><!-- End contentslider -->
             <!-- Site JavaScript -->
        <script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
        <script type="text/javascript">
        $(function() {
        $('#one').ContentSlider({
        width : '530px',
        height : '200px',
        speed : 800,
		/* easing : 'easeInOutExpo' */
		/* easing : 'easeOutQuad'  */
         easing : 'easeInOutBack' 
        });
        });
        </script>
        <script src="js/jquery.chili-2.2.js" type="text/javascript"></script>
        <script src="js/chili/recipes.js" type="text/javascript"></script>
        
        
          </div>
            
            <div class="project_content">
            
            	<div class="header_03">Our Projects</div>
                <marquee direction="up">
                <p align="justify">Project titled �E-Ration Web Application
� is to digitalize the process followed in the ration shop.</p>
				<p align="justify">The ledger records are converted to digital records. Upon consumer�s purchase a bill will be generated which holds the complete data of the purchase made. </p>
                </marquee>
            </div>
            
        </div>
        
        <div id="content_panel">
        	
            <div id="column_w610">
            
            	<div class="header_01">Welcome to our WEBSITE!</div>
                <p>Project titled �E-Ration Web Application
� is to digitalize the process followed in the ration shop. The ledger records are converted to digital records</a>.</p>
                
          <div class="section_01">
                	<div class="top"></div>
                    <p>Upon consumer�s purchase a bill will be generated which holds the complete data of the purchase made. This saves the manual time spent for this complete process of searching the consumer details in the ledger and making an entry to it </p>    
                    
                    <div class="bottom"></div>                
              </div>
                
                <p>. This ensures security. The other benefits of this application are easy data analysis, finding the most demanded product for every specific area, identifying the frequently sold products.</p>
                
                <ul class="list_with_icon">
                	<li>This reduces the work effort of the employee who stays in the ration shop and makes the buying process easy for the consumer. There is a separate pass code provided for every consumer upon registration </li>
                    <liOnly after keying in the correct pass code at the time of purchase, the purchase will be complete</a>.</li>
              </ul>
            
            </div> <!-- end of column w610 -->
            
            <div id="column_w290">
            
            	<div class="header_02">Ration Login</div>
                	<form method="post" action="">
                	<table width="284" height="153" border="0">
                      
                      <tr>
                        <td width="85" height="49"><span class="style3">Ration Shop Number</span></td>
                        <td width="182"><input name="uname" type="text" class="txtbox" /></td>
                      </tr>
                      <tr>
                        <td height="48"><span class="style3">Password</span></td>
                        <td><input name="password" type="password" class="txtbox" /></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center"><input name="btn" type="submit" class="btn" value="Login" /></td>
                      </tr>
                    </table>
					   	  </div>
            <table width="290" height="178" border="0">
              <tr>
                <td align="center"><img src="images/2.webp" width="207" height="163" align="middle" /></td>
              </tr>
            </table>
            <!-- end of column 290 -->
            
            <div class="cleaner"></div>
            
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
  </div> <!-- end of footer -->
</div> <!-- end of footer -->
</body>
</html>