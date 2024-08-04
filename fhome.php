<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$name=$_SESSION['name'];
	$class=$_SESSION['class'];
	
	$dt=mysqli_query($con,"select * from fregister where name='$name'");
		$dt1 = mysqli_fetch_array($dt); 
	
	
	
if(isset($_POST['btn']))
{

	$max_qry = mysqli_query($con,"select max(id) from sregister");
	$max_row = mysqli_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
	$qry=mysqli_query($con,"insert into sregister values('$id','$sname','$gender','$dob','$email','$phone','$dept','$year','$reg')");
	if($qry)
	{
	
	echo "<script>alert('Insert sucessfully')</script>";
	
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
background-image:url("Image/college1.jpg");background-repeat:no-repeat;
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
                <img src="Image/logo.png" style="width:90px;height:70px;border-radius:50%;left:-200px;padding:3px;"> <h2  style="color:#FFFFFF;left:-140px;"> Stella Maris  </h2>
				</div>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                   <li ><a href="fhome.php">HOME</a></li>
					<li><a href="addinfo.php">ADD INFO</a></li> 
          <li><a href="addt.php">TIME TABLE</a></li>
          <li><a href="notes_uplaoding/upload_form.php">UPLOAD NOTES</a></li>
          <li><a href="quiz/index.html">WEEKLY QUIZZES</a></li>
          <li><a href="views2.php">VIEW STUDENT</a></li>
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
	         <form id="f1" name="f1" method="post" action="#">
  <table width="36%" border="0" align="center">	
	  <tr>
    
     <td colspan="2"  align="center" ><div class="style5"><h3>New Student Registration</h3></div></td>
      
    </tr>
	
    <tr>
    
      <td width="44%" height="50"><span class="style6">Student Name</span></td>
      <td width="56%"><label>
        <input name="sname" type="text" id="sname" 	required/>
      </label></td>
     
    </tr>
	
    <tr>
     
      <td height="46"><span class="style6">Gender</span></td>
      <td><input name="gender" type="radio" value="male" required/>
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
      
    </tr>
	
    <tr>
     
      <td height="41"><span class="style6">Date Of Birth</span></td>
      <td><label>
        <input name="dob" type="date" id="dob" required />
      </label></td>
     
    </tr>
	
	
    <tr>
      
      <td height="44">Email Id</td>
      <td><input name="email" type="text" id="email" required/></td>
     
    </tr>
	
	
	  <tr>
      
      <td height="35">Phone Number </td>
      <td><input name="phone" type="text" id="phone" required/></td>
     
    </tr>
	
    <tr>
     <td height="54">Department</td>
      <td><input type="text" name="dept" id="dept" value="<?php echo $dt1['dept']; ?>" required readOnly> </td>
  
    </tr>
		  
	
	 <tr>
     
      <td height="38">Class</td>
      <td><input type="text" name="year" id="year" value="<?php echo $dt1['class']; ?>" required readOnly> </td>
      </tr>
	
    <tr>
    
      <td height="45">Register Number</td>
      <td><input name="reg" type="text" id="reg" required></td>
     
    </tr>
	
	<tr>
     
      <td height="51">&nbsp;</td>
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
