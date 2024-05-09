<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="emp_create.php" method="post" enctype="multipart/form-data">
<table cellspacing="20">
<th colspan="2"><center>NEW EMPLOYEE DETAILS</center></th>    
<tr>
<th>EMP_Name</th>
<td><input type="text" name="emp_name"/></td>    
</tr>
<tr>
<th>Gender</th>
<td><input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
</td></tr>
<tr>
<th>College</th>
<td><input type="text" name="emp_college"/></td>
</tr>
<tr>
<th>EMAIL</th>
<td><input type="email" name="emp_email"/></td>
</tr>
<tr>
<th>Mobile</th>
<td><input type="number" name="emp_mob"/></td>
</tr>
<tr>
    <th>Password</th>
    <td><input type="password" name="password"/></td>
    </tr>
<tr>
<td><input type="submit" name="submit" value="create"/></td>    
</tr>





</table>
</form>

</body>
</html>