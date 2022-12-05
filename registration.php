<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root','','studentspace');
mysqli_select_db($con,'studentspace');
$name= $_POST['Username'];
$pass=$_POST['Password'];
$PhoneNumber=$_POST['PhoneNumber'];
$Email=$_POST['Email'];
$s="SELECT * FROM registration where Username='$name'";
$result=mysqli_query($con,$s);
$num= mysqli_num_rows($result);
if($num==1)
{
    echo "Username Already Taken";
}
else
{
    $reg="insert into registration values('$name','$pass','$PhoneNumber','$Email')";
    $var=$name;
    mysqli_query($con,$reg);
    echo "Registration Succesfull";
}