<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{
$qry=mysqli_query($con,"select * from fregister where name='$uname' && psw='$password'");
$num=mysqli_num_rows($qry);
if($num==1)
{
$qry1=mysqli_query($con,"select * from fregister where name='$uname' && psw='$password'");
$row=mysqli_fetch_assoc($qry1);
$_SESSION['name']=$row['name'];
$_SESSION['class']=$row['class'];
$_SESSION['dept']=$row['dept'];

echo "<script>alert('welcome To admin Page')</script>";
header("location:fhome.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";

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
	body{
	background-image:url("Image/college1.jpg");background-repeat:no-repeat;
	/*height:600px;
	width:1500px;
	background-position:left;*/
  background-repeat:no-repeat;
  background-size:cover;
	}
  .container1{
    position: relative; /* Ensure relative positioning for the container */
    width: 100%; /* Set the width of the container */
}

.background-image {
    width: 100%; /* Ensure the background image fills the container */
    height: 90px; /* Auto height to maintain aspect ratio */
    position: absolute; /* Position the background image absolutely */
    top: 0; /* Position the image at the top of the container */
    left: 0; /* Position the image at the left of the container */
    z-index: -1; /* Ensure the background image stays behind other content */
}

.login-form {
    position: absolute; /* Position the form absolutely */
    top: 550%; /* Position the form at 50% from the top of the container */
    left: 50%; /* Position the form at 50% from the left of the container */
    transform: translate(-50%, -50%); /* Center the form horizontally and vertically */
    /*background-color: rgba(255, 255, 255, 0.8); Add a semi-transparent white background to the form */
    background-color: rgba(255, 255, 255, 0.5);
    padding: 10px; /* Add padding to the form */
    border-radius: 10px; /* Add border radius for a rounded appearance */
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    width: 300px;
}
	
	
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
                  <li ><a href="index.php">HOME</a></li>
					<li><a href="admin.php">ADMIN LOGIN</a></li>
                     <li><a href="staff.php">STAFF LOGIN</a></li>
                    <li><a href="stud.php">STUDENT LOGIN</a></li>  
                </ul>
            </div>
           
        </div>
    </div>
	</div>
	 <br><br><br><br><br><br>
   <br>
   <br>
   <br>
   <br>        
           <div class="container1">       
<form id="form1" name="form1" method="post" action="" class="login-form">
	   <table width="46%" border="0" align="center">
         <tr>
           <td colspan="2" rowspan="1"><div align="center" class="style1"><strong><font size="+1">Faculty Login</font> </div></td>
		 </tr>
			<tr>
		<td width="39%">&nbsp;</td>
		    <td width="37%">&nbsp;</td>
	  		</tr>
         <td height="10"></tr>
         <tr>
           <td height="31"align="center"><span class="style2"><strong>Faculty Name </strong></span></td>
           <td><label>
             <input name="uname" type="text" id="uname" />
           </label></td>
         </tr>
         <tr>
           <td height="44" align="center"><span class="style2"><strong>Password</strong></span></td>
           <td><label>
             <input name="password" type="password" id="password" />
           </label></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td rowspan="2"><label>
             <input name="btn" type="submit" id="btn" value="Login" />
             <input type="reset" name="Submit2" value="Cancel" />
           </label></td>
         </tr>
		 
		
		 
  </table>
</form>
</div>

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
