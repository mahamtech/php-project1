<?php
include "emp_dbconnect.php";

if(isset($_POST['submit']))
{
    $emp_id=$_POST['emp_id'];
    $emp_name=$_POST['emp_name'];
    $emp_dob=$_POST['emp_dob'];
    $emp_email=$_POST['emp_email'];
    $emp_phone_no=$_POST['emp_phone_no'];

    $query="update emp_details 
              set emp_id=$emp_id, emp_name='$emp_name', emp_dob='$emp_dob',
              emp_email='$emp_email', emp_phone_no='$emp_phone_no' 
            where emp_id=$emp_id";
    $result=mysqli_query($dbconnect,$query);
    if($result){
        header('location:emp_display.php');
        //echo "updated successfully";
    }else{
        //echo "error";
        die("unable to update");
    }

}

if(isset($_GET['updateid']))
{
    $emp_id=$_GET['updateid'];
    $sql="select * from emp_details where emp_id=$emp_id";
    $result=mysqli_query($dbconnect,$sql);
    $row=mysqli_fetch_assoc($result);
    $emp_name=$row['emp_name'];
    $emp_dob=$row['emp_dob'];
    $emp_email=$row['emp_email'];
    $emp_phone_no=$row['emp_phone_no'];
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
<td>EMP_ID</td>
<td><?php echo $emp_id;?></td>    
</tr>
<tr>
<td >NAME</td>
<td><input type="text" name="emp_name" value=<?php echo $emp_name;?> /></td>
</tr>
<tr>
<td>DOB</td>
<td><input type="date" name="emp_dob" value=<?php echo $emp_dob;?> /></td>
</tr>
<tr>
<td>EMAIL</td>
<td><input type="email" name="emp_email" value=<?php echo $emp_email;?> /></td>
</tr>
<tr>
<td>PHONE_NO</td>
<td><input type="number" name="emp_phone_no" value=<?php echo $emp_phone_no;?> /></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="UPDATE"/>
<button><a href="emp_display.php">CANCEL</a></button></td>    
</tr>
</table>
</form>
</body>
</html>
