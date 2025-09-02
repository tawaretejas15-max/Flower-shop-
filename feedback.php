<?php
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['email_id'];
$d=$_POST['phn_no'];
$e=$_POST['feedback'];

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

$sql="insert into feedback values('$a','$b','$c',$d,'$e')";
if(mysqli_query($con,$sql))
{
    header("location:thanks.html");
}
else{
    echo "Not inserted";
}
mysqli_close($con);
?>