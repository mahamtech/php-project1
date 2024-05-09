<?php
include "emp_dbconnect.php";
if(isset($_POST['submit'])){
$emp_id=$_POST['emp_id'];
$emp_name=$_POST['emp_name'];
$emp_dob=$_POST['emp_dob'];
$emp_email=$_POST['emp_email'];
$emp_phone_no=$_POST['emp_phone_no'];
echo "emp_id :".$emp_id."<br />";
echo "emp_name :".$emp_name."<br />";
echo "emp_dob :".$emp_dob."<br />";
echo "emp_email :".$emp_email."<br />";
echo "emp_phone_no :".$emp_phone_no."<br />";
$query="insert into jcbl.emp_details(emp_id,emp_name,emp_dob,emp_email,emp_phone_no) values($emp_id,'$emp_name','$emp_dob','$emp_email',$emp_phone_no)";
$result=mysqli_query($dbconnect,$query);
if($result){
    header('location:emp_display.php');
    //echo "successfully emp_details inserted"."<br />";
}
else{
die(mysqli_error($dbconnect));
}
}
else{
    echo "there is no records"."<br />";
}
?>

