<?php
$_servername="localhost";
$username="root";
$password="";
$database_name=13326;
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $Userid=$_POST['user_id'];
    $password=$_POST['pass'];
    $conformpass=$_POST['conform pass'];
    $sql_query="INSERT INTO Login(userid,password,conform password)
    VALUES(' $Userid',' $password','$conformpass')";
    if(mysql_query($conn,$sql_query))
    {
        echo"New login inseted successfully !";
    }
    else
    {
        echo"Error:".$sql."".mysqli_error($conn);
    }
    mysqli_close($conn);
    


}