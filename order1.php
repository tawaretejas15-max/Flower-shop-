
<?php
$hn="localhost:3307";
$nm="root";
$pass="";
$db="proj_ty";

$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['cn'];
$d=$_POST['hnm'];
$x=$_POST['cty'];
$e=$_POST['dt'];
$f=$_POST['email'];
$g=$_POST['ctry'];
$h=$_POST['pcode'];
$i=$_POST['select'];
$j=$_POST['time'];

$con=mysqli_connect($hn,$nm,$pass,$db);
if(!$con)
{
    die("not connected");
}


$sql="insert into order1 values('$a','$b','$c',$d,'$x','$e','$f','$g',$h,$i,'$j')";
if(mysqli_query($con,$sql))
{
    header("location:index1.php");
}
else{
    echo "Not inserted";
}
mysqli_close($con);
?>
