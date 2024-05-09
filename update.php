<?php
include "dbconnect.php";

if(isset($_POST['submit']))
{
    $emp_name=$_POST['emp_name'];
    $gender=$_POST['gender'];
    $emp_college=$_POST['emp_college'];
    $emp_email=$_POST['emp_email'];
    $emp_mob=$_POST['emp_mob'];
    $password=$_POST['password'];

    $query="update user 
              set emp_name='$emp_name', gender='$gender', emp_college='$emp_college',
              emp_email='$emp_email', emp_mob='$emp_mob' ,
              password='$password'
            where emp_name=$emp_name";
    $result=mysqli_query($dbconnect,$query);
    if($result){
        header('location:display.php');
        echo "updated successfully";
    }else{
        //echo "error";
        die("unable to update");
    }

}

if(isset($_GET['updatename']))
{
    $emp_id=$_GET['updatename'];
    $sql="select * from user where emp_name=$emp_name";
    $result=mysqli_query($dbconnect,$sql);
    $row=mysqli_fetch_assoc($result);
   
    $gender=$row['gender'];
    $emp_college=$row['emp_college'];
    $emp_email=$row['emp_email'];
    $emp_mob=$row['emp_mob'];
    $password=$row['password'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="post" enctype="multipart/form-data">
<input type="hidden" name="emp_id" value=<?php echo $emp_id;?> />
<table cellspacing="20">
<th colspan="2"><center>NEW EMPLOYEE DETAILS</center></th>    
<tr>
<td>EMP_Name</td>
<td><?php echo $emp_name;?></td>    
</tr>
<tr>
<td >gender</td>
<td><input type="radio" name="gender" value=<?php echo $gender;?> /></td>
</tr>
<tr>
<td>college</td>
<td><input type="text" name="emp_college" value=<?php echo $emp_college;?> /></td>
</tr>
<tr>
<td>EMAIL</td>
<td><input type="email" name="emp_email" value=<?php echo $emp_email;?> /></td>
</tr>
<tr>
<td>mob</td>
<td><input type="number" name="emp_phone_no" value=<?php echo $emp_mob;?> /></td>
</tr>
<tr>
<td>password</td>
<td><input type="password" name="password" value=<?php echo $password;?> /></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="UPDATE"/>
<button><a href="display.php">CANCEL</a></button></td>    
</tr>
</table>
</form>
</body>
</html>
