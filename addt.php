<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$name=$_SESSION['name'];
	$class=$_SESSION['class'];
	$dept=$_SESSION['dept'];

	
	$dt=mysqli_query($con,"select * from fregister where name='$name'");
		$dt1 = mysqli_fetch_array($dt); 
	
	
	
if(isset($_POST['btn']))
{




$qry=mysqli_query($con,"insert into schedule values('','$dept','$class', '$a1','$a2','$a3','$a4','$a5','$b1','$b2','$b3','$b4','$b5','$c1','$c2','$c3','$c4','$c5','$d1','$d2','$d3','$d4','$d5','$e1','$e2','$e3','$e4','$e5','$f1','$f2','$f3','$f4','$f5')");
	if($qry){
	echo "<script>alert('inserted sucessfully')</script>";
	}

}


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>STUDENT DASHBOARD</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
  <!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
	<style>
	#back {
background-image:url("images/college1.jpeg");background-repeat:no-repeat;
	height:600px;
	width:1500px;
	background-position:left;
	}/* This ensures the background image covers the entire container */

	
	</style>
</head>
<body >
   
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><div style="display:flex;">
				<img src="Image/logo.png" style="width:90px;height:70px;border-radius:50%;left:-200px;padding:3px;"> <h2  style="color:#FFFFFF;left:-140px;"> Stella Maris </h2>
				</div>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                   <li ><a href="fhome.php">HOME</a></li>
					<li><a href="addinfo.php">ADD INFO</a></li>
					<li><a href="addt.php">ADD TIMETABLE</a></li>
					<li><a href="upt.php">UPDATE TIMETABLE</a></li>
					<li><a href="index.php">LOGOUT</a></li>
					
				
					
                </ul>
            </div>
           
        </div>
    </div>
	</div>
	 </br>        
           </br> 
           <br>
           <br> 
	        


<form method="post" action="" enctype="multipart/form-data">

 <table width="60%" border="0" align="center">
	
    <tr>
      <td height="40" colspan="2"  align="center" ><div class="style5"><h3>Add Schedule</h></div></td>
    </tr>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	 <tr>
      <td height="39">DAY1</td>
       <td><input name="a1" type="text"  /></td>  <td><input name="a2" type="text"  /></td>  <td><input name="a3" type="text"  /></td>  <td><input name="a4" type="text"  /></td>  <td><input name="a5" type="text"  /></td>
      
    </tr>
	
	
	 <tr>
      <td height="39">DAY2</td>
       <td><input name="b1" type="text"  /></td>  <td><input name="b2" type="text"  /></td>  <td><input name="b3" type="text"  /></td>  <td><input name="b4" type="text"  /></td>  <td><input name="b5" type="text"  /></td>
      
    </tr>
	
	<tr>
      <td height="39">DAY3</td>
       <td><input name="c1" type="text"  /></td>  <td><input name="c2" type="text"  /></td>  <td><input name="c3" type="text"  /></td>  <td><input name="c4" type="text"  /></td>  <td><input name="c5" type="text"  /></td>
      
    </tr>
	
	
	<tr>
      <td height="39">DAY4</td>
       <td><input name="d1" type="text"  /></td>  <td><input name="d2" type="text"  /></td>  <td><input name="d3" type="text"  /></td>  <td><input name="d4" type="text"  /></td>  <td><input name="d5" type="text"  /></td>
      
    </tr>
	
	
	
	<tr>
      <td height="39">DAY5</td>
       <td><input name="e1" type="text"  /></td>  <td><input name="e2" type="text"  /></td>  <td><input name="e3" type="text"  /></td>  <td><input name="e4" type="text"  /></td>  <td><input name="e5" type="text"  /></td>
      
    </tr>
	
	
	
	
	<tr>
      <td height="39">DAY6</td>
       <td><input name="f1" type="text"  /></td>  <td><input name="f2" type="text"  /></td>  <td><input name="f3" type="text"  /></td>  <td><input name="f4" type="text"  /></td>  <td><input name="f5" type="text"  /></td>
      
    </tr>
	
	
	
	
	
	
	
	
	<tr>
      <td height="53">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		       
           </br></br> </br>          
 
<br />
<br>
<br>
<br>
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
</body>
</html>
