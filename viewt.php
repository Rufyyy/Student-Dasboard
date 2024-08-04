<?php
include("dbconnect.php");
session_start();
extract($_POST);
$name=$_SESSION['name'];
$reg=$_SESSION['reg'];
echo $class=$_SESSION['class'];
echo $dept=$_SESSION['dept'];

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Student dashboard</title>
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
    background-repeat:no-repeat;
	height:600px;
	width:1500px;
	background-position:left;
	}/* This ensures the background image covers the entire container */

    <style>
    :root {
    --bg-color: #e5e5e5;
    --bcn-orange: #eaef4d;
    --bcn-orange-light: #f9f656;
    --bcn-orange-dark: #d9d629;
    --black: #333;
    --white: #f5f5f5;
    --text-color: #555;
    --border-color: rgb(238,238,238);
    --border-style: 1px solid var(--border-color);
  }
  
  *,
  *::before,
  *::after {
    box-sizing: border-box;
  }
  
  body {
    height: 100%;
    overflow-x: hidden;
  }
  
  .admin {
    --spacing: 1rem;
    display: flex;
    flex-wrap: wrap;
    display: grid;
    height: 100vh;
    grid-template-rows: 80px 1fr 40px;
    grid-template-columns: 300px 1fr;
    grid-template-areas: "header header" "nav    main" "footer footer";
  }
  .admin__header {
    display: flex;
    flex-basis: 100%;
    grid-area: header;
    height: 80px;
    background-color: #fff;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
    position: relative;
  }
  .admin__nav {
    flex: 0 0 300px;
    grid-area: nav;
    background-color: #313541;
  }
  .admin__main {
    flex: 1;
    grid-area: main;
    padding: var(--spacing);
    overflow-y: auto;
    overflow-x: hidden;
    -webkit-overflow-scrolling: touch;
    background-color: var(--bg-color);
  }
  .admin__footer {
    display: flex;
    grid-area: footer;
    flex-basis: 100%;
    justify-content: space-between;
    align-items: center;
    height: 40px;
    padding: 0 var(--spacing);
    color: #4e5561;
    background-color: #1d2127;
  }
  @media screen and (min-width: 48rem) {
    .admin {
      --spacing: 2rem;
    }
  }
  
  .dashboard {
    --column-count: 2;
    display: flex;
    flex-wrap: wrap;
    margin: 0 calc(var(--spacing) * -0.5);
    display: grid;
    grid-template-columns: repeat(var(--column-count), 1fr);
    grid-gap: var(--spacing);
  }
  .dashboard__item {
    flex: 1 1 50%;
    grid-column-end: span 2;
    padding: calc(var(--spacing) / 2);
  }
  .dashboard__item--full {
    flex-basis: 100%;
    grid-column: 1/-1;
  }
  .dashboard__item--col {
    flex-basis: calc(100% / var(--column-count));
    grid-column-end: span 1;
  }
  @media screen and (min-width: 48rem) {
    .dashboard {
      --column-count: 4;
    }
  }
  @supports (display: grid) {
    .dashboard {
      margin: 0;
    }
    .dashboard__item {
      padding: 0;
    }
  }
  
  a {
    color: #dc5a60;
    text-decoration: none;
  }
  
  img {
    max-width: 100%;
    height: auto;
  }
  
  .logo {
    display: flex;
    flex: 0 0 300px;
    height: 80px;
    justify-content: center;
    align-items: center;
    position: relative;
    margin: 0;
    color: #fff;
    background-color: var(--bcn-orange);
    font-size: 1rem;
  }
  .logo h1 {
    margin: 0;
  }
  

  .toolbar {
    display: flex;
    flex: 1;
    justify-content: space-between;
    align-items: center;
    padding: 0 var(--spacing);
  }
  
  .menu {
    list-style-type: none;
    padding: 0;
  }
  .menu__title {
    display: block;
    padding: 2rem 2rem 0.5rem;
    color: #76808f;
    font-weight: 700;
  }
  .menu__divider::before {
    content: "";
    display: block;
    width: calc(100% - 60px);
    height: 2px;
    margin: 30px 30px 40px;
    background-color: #76808f;
  }
  .menu__link {
    display: block;
    padding: 10px 30px;
    color: #76808f;
    text-decoration: none;
  }
  .menu__link.is-active {
    color: #fff;
    background-color: var(--bcn-orange-dark);
    border-left: 3px solid var(--bcn-orange);
  }
  .menu_link:hover, .menu_link:focus {
    color: currentcolor;
    background-color: var(--bcn-orange-light);
  }
  
  .card {
    height: 100%;
    font-weight: 300;
    background-color: #fff;
    border: 1px solid #e6eaee;
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  }
  .card__header {
    padding: 20px 30px;
    border-bottom: 1px solid #e6eaee;
    font-weight: 700;
  }
  .card__item {
    padding: 20px 30px;
  }
  
  .btn {
    display: inline-block;
    border-radius: 5em;
    border: 0;
    padding: 0.5rem 1rem;
    white-space: nowrap;
  }
  .btn--primary {
    color: #fff;
    background-color: #d7eb73;
  }
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:600);
  .text{
     background-color: #333;
        
   }
.item-1, 
.item-2, 
.item-3 {
	position: absolute;
  display: block;
	top: 2em;
  
  width: 60%;
  
  font-size: 2em;

	animation-duration: 0.5s;
	animation-timing-function: ease-in-out;
	animation-iteration-count: infinite;
}

.item-1{
	animation-name: anim-1;
}

.item-2{
	animation-name: anim-2;
}

.item-3{
	animation-name: anim-3;
}

@keyframes anim-1 {
    0%, 4% { left: -100%; opacity: 0; }
    4%, 12% { left: 25%; opacity: 1; }
    16%, 100% { left: 110%; opacity: 0; }
}

@keyframes anim-2 {
    0%, 16.66% { left: -100%; opacity: 0; }
    20%, 29% { left: 25%; opacity: 1; }
    33.33%, 100% { left: 110%; opacity: 0; }
}

@keyframes anim-3 {
    0%, 33.33% { left: -100%; opacity: 0; }
    37%, 45% { left: 25%; opacity: 1; }
    50%, 100% { left: 110%; opacity: 0; }
}

.container1 {
    height: 100vh; /* Make the container take up the full height of the viewport */
    display: flex; /* Use flexbox for easy alignment */
    justify-content: top; /* Horizontally center the content */
    align-items: flex-end; /* Vertically align content to the bottom */
  }
  table {
    width: 35%;
    height: 35%;
  }
  
  table,th,td{
  text-align:center;
  padding:10px;
  }
</style>
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
                   <li ><a href="studhome.php">HOME</a></li>
                   <li><a href="home.html">FEATURES</a></li>
					   <li><a href="index.php">LOGOUT</a></li>  
					   
                </ul>
            </div>
           
        </div>
    </div>
	</div>
	 </br> 

<div class="admin">
    <header class="admin__header">
        <a href="#" class="logo"></a>
    </header>
    <nav class="admin__nav">
        <ul class="menu">
            <li class="menu__title">DASHBOARD</li>
            <li class="menu__item">
                <a class="menu__link" href="index.html">To do</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="Reminder/reminder.html">Remainder</a>
            </li>
<!--             <li class="menu__divider"></li>             -->
            <li class="menu__title">CLASS ROOM</li>
            <li class="menu__item">
                <a class="menu__link" href="#">time table</a>
            </li>
<!--             <li class="menu__divider"></li> -->
            <li class="menu__title">DEPARTMENT</li>
            <li class="menu__item">
                <a class="menu__link" href="Schedule/index2.php">Schedule</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="https://stellamariscollege.edu.in/Facultydirectory">facultes</a>
            </li>
<!--             <li class="menu__divider"></li> -->
            <li class="menu__title">SUBJECT</li>
            <li class="menu__item">
                <a class="menu__link" href="syllabus.html">syllabus</a>
            </li>
<!--             <li class="menu__divider"></li> -->
        </ul>
    </nav>
   


<div class="container1" >



<?php 

$qry=mysqli_query($con,"select * from schedule where class='$class' && dept='$dept'");
$row=mysqli_fetch_array($qry);




if(mysqli_num_rows($qry)>0){
?>


<br></br>





<center><table  border='2'>
  <tr>
    <th><i>Day Order/Hour<i></th>
    <th><i>1st hour</i></th>
    <th><i>2nd hour</i></th>
    <th><i>3rd hour</i></th>
    <th><i>4th hour</i></th>
    <th><i>5th hour</i></th>

  </tr>
  <tr>
      <th><i>I</i></th>
    <td><?php  echo $row['a1']; ?> </td>
    <td> <?php  echo $row['a2']; ?></td>
    <td><?php  echo $row['a3']; ?> </td>
    <td><?php  echo $row['a4']; ?></td>
    <td><?php  echo $row['a5']; ?></td>

  </tr>
  <tr>
      <th><i>II</i></th>
    <td><?php  echo $row['b1']; ?> </td>
    <td> <?php  echo $row['b2']; ?></td>
    <td><?php  echo $row['b3']; ?> </td>
    <td><?php  echo $row['b4']; ?></td>
    <td><?php  echo $row['b5']; ?></td>

  </tr>
    <tr>
      <th><i>III</i></th>
    <td><?php  echo $row['c1']; ?> </td>
    <td> <?php  echo $row['c2']; ?></td>
    <td><?php  echo $row['c3']; ?> </td>
    <td><?php  echo $row['c4']; ?></td>
    <td><?php  echo $row['c5']; ?></td>

  </tr>
   <tr>
      <th><i>IV</i></th>
    <td><?php  echo $row['d1']; ?> </td>
    <td> <?php  echo $row['d2']; ?></td>
    <td><?php  echo $row['d3']; ?> </td>
    <td><?php  echo $row['d4']; ?></td>
    <td><?php  echo $row['d5']; ?></td>

  </tr>
    <tr>
      <th><i>V</i></th>
    <td><?php  echo $row['e1']; ?> </td>
    <td> <?php  echo $row['e2']; ?></td>
    <td><?php  echo $row['e3']; ?> </td>
    <td><?php  echo $row['e4']; ?></td>
    <td><?php  echo $row['e5']; ?></td>

  </tr>
   <tr>
      <th><i>VI</i></th>
    <td><?php  echo $row['f1']; ?> </td>
    <td> <?php  echo $row['f2']; ?></td>
    <td><?php  echo $row['f3']; ?> </td>
    <td><?php  echo $row['f4']; ?></td>
    <td><?php  echo $row['f5']; ?></td>

  </tr>
  
</table><br></br>
	
</form>



<?php }  ?>
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
