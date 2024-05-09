<?php


include "dbconnect.php";

$name=$_POST['name'];
$gender=$_POST['gender'];
$college=$_POST['college'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$password=$_POST['password'];
echo "name :".$name."<br />";
echo "gender:".$gender."<br />";
echo "college :".$college."<br />";
echo "email :".$email."<br />";
echo "mob :".$mob."<br />";
echo "password :".$password."<br />";
$query="insert into user(name,gender,college,email,mob,password) values('{$name}','{$gender}','{$college}','{$email}','{$mob}','{$password}')";
$result=mysqli_query($dbconnect,$query);
if($result){
    header('location:display.php');
        echo "successfully details inserted"."<br />";
}


else{
    echo "there is no records"."<br />";
}
?>
