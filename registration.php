<?php
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['email_id'];
$d=$_POST['phn_no'];
$e=$_POST['addr'];
$f=$_POST['city'];
$g=$_POST['state'];
$h=$_POST['gender'];
$i=$_POST['username'];
$j=$_POST['password'];

$hn="localhost:3306";
$nm="root";
$pass="";
$db="proj_ty";

$con=mysqli_connect($hn,$nm,$pass,$db);
if(!$con)
{
    die("not connected");
}
echo "done";

$sql="insert into regis values('$a','$b','$c',$d,'$e','$f','$g','$h','$i','$j')";
if(mysqli_query($con,$sql))
{
    header("location:index1.php");
}
else{
    echo "Not inserted";
}
mysqli_close($con);
?>