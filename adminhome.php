<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{

$max_qry = mysqli_query($con,"select max(id) from fregister");
	$max_row = mysqli_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
$qry=mysqli_query($con,"insert into fregister values('$id','$name','$gender','$age','$email','$phone','$dept','$class','$desig','$psw')");
	if($qry)
	{
	
	echo "<script>alert('Entered sucessfully')</script>";
	
	}
	else
	{
	
	
		echo "failed";
	
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
    <title>Student Dashboard</title>
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
                <img src="Image/logo.png" style="width:90px;height:70px;border-radius:50%;left:-200px;padding:3px;"> <h2  style="color:#FFFFFF;left:-140px;"> Stella Maris</h2>
				</div>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                   <li ><a href="adminhome.php">HOME</a></li>
					<li><a href="views2.php">VIEW STUDENT</a></li>
					<li><a href="viewf2.php">VIEW STAFF</a></li>
          <li><a href="schedule/index.php">CALENDAR</a></li>
                    <li><a href="index.php">LOGOUT</a></li>  
					 </ul>
            </div>
           
        </div>
    </div>
	</div>
  <br>
  <br>
  <br>
 <form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="36%" border="0" align="center">	
		
    <tr>
     
      <td colspan="2"  align="center" ><div class="style5"><h3>Faculty Registration</h3></div></td>
      
    </tr>
	
    <tr>
      <td width="37%" height="57">Faculty Name</td>
      <td width="63%">
        <input name="name" type="text" id="name" required/>
     </td>
    </tr>
  <tr>
     
      <td height="46"><span class="style6">Gender</span></td>
      <td><input name="gender" type="radio" value="male" required/>
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
      
    </tr>
	
	
	 
    <tr>
      <td height="46">DOB</td>
      <td><input name="age" type="date" id="age" required/></td>
     
    </tr>
	
   
    <tr>
      <td height="46">Email Id</td>
      <td><input name="email" type="text" id="email" required/></td>
     
    </tr>

    <tr>
     
      <td height="60">Phone Number</td>
      <td><input name="phone" type="text" id="phone" required></td>
</tr>
		
	<tr>
     <td height="54">Department</td>
      <td><select name="dept"  >

 <option value="BSC CS">BCA</option>
  <option value="BSC MATHS">BSC MATHS</option>
  <option value="BSC CHEMISTRY">BSW</option>
    <option value="BSC PHYSICS">BSC PHYSICS</option>
	 <option value="BA TAMIL">BCOM</option>
	  <option value="BA ENGLISH">BA ENGLISH</option>
  
  
  </select ></td>
    </tr>
		  
	
	 <tr>
     
      <td height="50">Class</td>
      <td> <select name="class" >

  <option value="I YEAR A">I YEAR A</option>
  <option value="I YEAR B">I YEAR B</option>
  <option value="II YEAR A">II YEAR A</option>
  <option value="II YEAR B">II YEAR B</option>
  <option value="III YEAR A">III YEAR A</option>
  <option value="III YEAR B">III YEAR B</option>

  
  
  </select ></td>
      </tr>
	
      <tr>
     <td height="50">Designation</td>
     <td><input type="text" name="desig" id="desig" required></td>
</tr>

	
		   <tr>
      <td height="46">Password</td>
      <td><input type="password" name="psw" id="psw" required></td>
     
    </tr>

	<tr>
      <td height="45">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		       
           </br></br> </br>          
 
<br />
         
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
