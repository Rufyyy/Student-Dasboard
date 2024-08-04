<?php require_once('db-connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduling</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script>
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
  .menu__link:hover, .menu__link:focus {
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
    justify-content: center; /* Horizontally center the content */
    align-items: flex-end; /* Vertically align content to the bottom */
  }
  table {
    width: 35%;
    height: 35%;
  }
  
  
  table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
		
		
		li a{
		text-decoration:none;
		color:white;
		font-size:16px;
		}
		li {
        list-style: none; /* Remove bullet from all ul elements */
    }
    .nav.navbar-nav.navbar-right li {
    display: inline-block; /* or inline */
    margin-right: 10px; /* Adjust the margin as needed */
}
.nav.navbar-nav.navbar-right li:last-child {
    margin-right: 0; /* Remove margin from the last item */
}
</style>
</head>

  

<body class="bg-light">


<div class="navbar navbar-inverse navbar-fixed-top " id="menu" style="background-color:#438CE0">
        <div class="container">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><div style="display:flex;">
                <img src="Image/logo.png" style="width:50px;height:50px;border-radius:50%;left:-200px;padding:3px;"> <h2  style="color:#FFFFFF;left:-140px;"> Stella Maris </h2>  
				</div>
            </div>
                <ul class="nav navbar-nav navbar-right">
                <li ><a href="studhome.php">HOME</a></li>
                 <li><a href="home.html">FEATURES</a></li>
					       <li ><a href="index.php">LOGOUT</a></li>    
					   
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
            <li class="menu__title">Dashboard</li>
            <li class="menu__item">
                <a class="menu__link" href="#">student Dashboard</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="#">Performance</a>
            </li>           
            <li class="menu__title">class room</li>
            <li class="menu__item">
                <a class="menu__link" href="viewt.php">time table</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="#">room number</a>
            </li>
             <!--<li class="menu__divider"></li> --->
            <li class="menu__title">departments</li>
            <li class="menu__item">
                <a class="menu__link is-active" href="#">events</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="save_schedule.php">Schedule</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="#">facultes</a>
            </li>
            <!--<li class="menu__divider"></li> -->
            <li class="menu__title">subject</li>
            <li class="menu__item">
                <a class="menu__link" href="#">syllabus</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="#">practice</a>
            </li>
           <!--- <li class="menu__divider"></li> --->
            <li class="menu__title">Account</li>
            <li class="menu__item">
                <a class="menu__link" href="#">Account Details</a>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="#">Account Settings</a>
            </li>
        </ul>
    </nav>
   <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
           
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Title</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Description</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">End</dt>
                            <dd id="end" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                      
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->

<?php 
$schedules = $conn->query("SELECT * FROM `schedule_list`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($conn)) $conn->close();
?>
</body>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="./js/script.js"></script>

</html>