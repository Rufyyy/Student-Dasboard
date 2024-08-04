

<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$name=$_SESSION['name'];
	$class=$_SESSION['class'];
	$dept=$_SESSION['dept'];

	
	$dt=mysqli_query($con,"select * from fregister where name='$name'");
		$dt1 = mysqli_fetch_array($dt); 
	
if (isset($_POST['update_timetable'])) {
    // Update timetable data in the database
    $class = mysqli_real_escape_string($con, $_POST['class']);
    $dept = mysqli_real_escape_string($con, $_POST['dept']);
    
    // Loop through each hour and update its value
    for ($i = 1; $i <= 6; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            $hour = chr(96 + $i) . $j; // Generating hour label (a1, a2, ..., f5)
            $value = mysqli_real_escape_string($con, $_POST[$hour]);
            $update_query = "UPDATE schedule SET $hour='$value' WHERE class='$class' AND dept='$dept'";
            mysqli_query($con, $update_query);
        }
    }
    
    echo "<script>alert('Timetable updated successfully')</script>";
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
		   
		   <?php
	$qry = mysqli_query($con, "SELECT * FROM schedule WHERE class='$class' AND dept='$dept'");
$row = mysqli_fetch_array($qry);

if (mysqli_num_rows($qry) > 0) {
    ?>
    <center><h3><i><b>TIME TABLE</b></i></h3></center>
    <br></br>
    <center>
        <form method="POST" action="">
            <table border='2'>
                <tr>
                    <th><i>Day Order/Hour</i></th>
                    <th><i>1st hour</i></th>
                    <th><i>2nd hour</i></th>
                    <th><i>3rd hour</i></th>
                    <th><i>4th hour</i></th>
                    <th><i>5th hour</i></th>
                </tr>
                <?php
                // Loop through each day order
                for ($i = 1; $i <= 6; $i++) {
                    ?>
                    <tr>
                        <th><i><?php echo chr(64 + $i); ?></i></th>
                        <?php
                        // Loop through each hour
                        for ($j = 1; $j <= 5; $j++) {
                            $hour = chr(96 + $i) . $j; // Generating hour label (a1, a2, ..., f5)
                            ?>
                            <td><input type="text" name="<?php echo $hour; ?>" value="<?php echo $row[$hour]; ?>"></td>
                            <?php
                        }
                        ?>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <br>
            <input type="hidden" name="class" value="<?php echo $class; ?>">
            <input type="hidden" name="dept" value="<?php echo $dept; ?>">
            <input type="submit" name="update_timetable" value="Update Timetable">
        </form>
    </center>
    <?php
}
?>
		   
		   
		   
		   
		   
		   
		   
		       
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
