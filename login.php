<?php
$a=$_POST['username'];
$b=$_POST['password'];

$hn="localhost:3307";
$nm="root";
$pass="";
$db="proj_ty";

$con=mysqli_connect($hn,$nm,$pass,$db,3307);
if(!$con)
{
    die("not connected");
}
echo "done";

$sql="insert into login values('$a','$b')";
if(mysqli_query($con,$sql))
{
    header("location:index1.php");
}
else{
    echo "Not inserted";
}
mysqli_close($con);
?>