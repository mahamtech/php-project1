<?php
include 'emp_dbconnect.php';
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
<button><a href="emp_details_index.html">ADD EMPLOYEE</a></button>
<table cellsapcing="20">   
    <thead>
<tr>
    <th>Emp_id</th>
    <th>Emp_name</th>
    <th>Emp_dob</th>
    <th>Emp_email</th>
    <th>Emp_phone_no</th>
    <th>Operation</th>
</tr>
</thead> 
<tbody>
<?php
$query="select * from jcbl.emp_details";
$result=mysqli_query($dbconnect,$query);
if($result){
      while($row=mysqli_fetch_array($result)){
    $emp_id = $row['emp_id'];
    $emp_name=$row['emp_name'];
    $emp_dob=$row['emp_dob'];
    $emp_email=$row['emp_email'];
    $emp_phone_no=$row['emp_phone_no'];

    echo '<tr>
    <td>'.$emp_id.'<td>
    <td>'.$emp_name.'<td>
    <td>'.$emp_dob.'<td>
    <td>'.$emp_email.'<td>
    <td>'.$emp_phone_no.'<td>
    <td>
    <button><a href ="emp_update.php?updateid='.$emp_id.'">UPDATE</a></button>
    <button><a href="emp_delete_confirm.php?deleteid='.$emp_id.'">Delete</a></button>

    </td>
    </tr>';
}
}
?>

</body>
</html>