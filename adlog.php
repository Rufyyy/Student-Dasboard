<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	if(isset($_POST['btn']))
{
$qry=mysqli_query($con,"select * from admin where name='$uname' && psw='$password'");
$num=mysqli_num_rows($qry);
if($num==1)
{
?>
<script>alert('welcome to admin home page');
</script>
<?php