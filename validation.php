<?php
session_start();

$con = mysqli_connect('localhost','root','','studentspace');
mysqli_select_db($con,'studentspace');
$name= $_POST['Username'];
$pass=$_POST['Password'];
$s="SELECT * FROM registration where Username='$name' && Password='$pass'";
$result=mysqli_query($con,$s);
$num= mysqli_num_rows($result);
if($num==1)
{
    $_SESSION['Username']=$name;
    
    header('location:courses.php');
}
else
{
    
   header('location:login.php');
}