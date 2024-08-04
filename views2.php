<?php
include("dbconnect.php");
session_start();

// Function to sanitize input
function sanitize($input) {
    return htmlspecialchars(trim($input));
}

// Delete student if delete button is clicked
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_query = mysqli_query($con, "DELETE FROM sregister WHERE id='$id'");
    if ($delete_query) {
        echo "<script>alert('student deleted successfully.');</script>";
    } else {
        echo "<script>alert('Error deleting student: " . mysqli_error($con) . "');</script>";
    }
}

// Update students information if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $id = sanitize($_POST['id']);
    $name = sanitize($_POST['name']);
    $gender = sanitize($_POST['gender']);
    $dob = sanitize($_POST['dob']);
    $email = sanitize($_POST['email']);
    $phone = sanitize($_POST['phone']);
    $dept = sanitize($_POST['dept']);
    $year = sanitize($_POST['year']);

    $update_query = "UPDATE sregister SET name='$name', gender='$gender', dob='$dob', email='$email', phone='$phone', dept='$dept', year='$year' WHERE id='$id'";
    $result = mysqli_query($con, $update_query);

    if ($result) {
        echo "<script>alert('Student information updated successfully.');</script>";
    } else {
        echo "<script>alert('Error updating student information: " . mysqli_error($con) . "');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Details</title>
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
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            width: 50%;
            height: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="email"] {
            width: 80%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">
        <!-- Navbar content -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div style="display:flex;">
                <img src="Image/logo.png" style="width:90px;height:70px;border-radius:50%;left:-200px;padding:3px;">
                <h2 style="color:#FFFFFF;left:-140px;"> Stella Maris </h2>
            </div>
        </div>
        <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="fhome.php">HOME</a></li>
                <li><a href="addinfo.php">ADD INFO</a></li> 
          <li><a href="addt.php">TIME TABLE</a></li>
          <li><a href="notes_uplaoding/upload_form.php">UPLOAD NOTES</a></li>
          <li><a href="views2.php">WEEKLY QUIZZES</a></li>
                <!--<li><a href="views2.php">VIEW STUDENT</a></li>-->
                <!---<li><a href="viewf2.php">VIEW TEACHERS</a></li>-->
                <li><a href="index.php">LOGOUT</a></li>
            </ul>
        </div>
    </div>
</div>

<br><br><br><br>

<h2 align="center">Student Details</h2>

<table width="90%" align="center" border="1">
    <tr>
        <th></th>
        <th></th>
        <th>Id</th>
        <th>Student Name</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Department</th>
        <th>Year</th>
    </tr>

    <?php
    $qry = mysqli_query($con, "SELECT * FROM sregister");
    while($row = mysqli_fetch_array($qry)) {
        echo "<tr>";
        echo "<td><a href='?edit=" . $row['id'] . "'>Edit</a></td>";
        echo "<td><a href='?delete=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this student?\")'>Delete</a></td>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['dob'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['dept'] . "</td>";
        echo "<td>" . $row['year'] . "</td>";
        echo "</tr>";
    }
    ?>

</table>

<?php
// Edit student form
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit_query = mysqli_query($con, "SELECT * FROM sregister WHERE id='$id'");
    $row = mysqli_fetch_array($edit_query);
?>

    <h2>Edit Student Information</h2>

    <form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Student Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
        <label>Gender:</label>
        <input type="text" name="gender" value="<?php echo $row['gender']; ?>"><br>
        <label>DOB:</label>
        <input type="text" name="dob" value="<?php echo $row['dob']; ?>"><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        <label>Phone:</label>
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>
        <label>Department:</label>
        <input type="text" name="dept" value="<?php echo $row['dept']; ?>"><br>
        <label>Year:</label>
        <input type="text" name="year" value="<?php echo $row['year']; ?>"><br>
        <input type="submit" name="submit" value="Update">
    </form>

<?php } ?>

</body>
</html>
