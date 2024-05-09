<?php
include 'dbconnect.php';
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
<button><a href="create.php">ADD EMPLOYEE</a></button>
<table cellsapcing="20">   
    <thead>
<tr>
    <th>S.No</th>
    <th>name</th>
    <th>gender</th>
    <th>college</th>
    <th>email</th>
    <th>mob</th>
    <th>password</th>
    <th>Operation</th>
</tr>
</thead> 
<tbody>
<?php
$query="select * from user";
$result=mysqli_query($dbconnect,$query);
if($result->num_rows>0){
$i=0;
while($row=$result->fetch_assoc()){
  $i++;
  echo"<tr>";
  echo"<td>{$i}</td>";
  echo"<td>{$row['name']}</td>";
  echo"<td>{$row['gender']}</td>";
  echo"<td>{$row['college']}</td>";
  echo"<td>{$row['email']}</td>";
  echo"<td>{$row['mob']}</td>";
  echo"<td>{$row['password']}</td>";
  echo"<td> <button>UPDATE</button></td>";
  echo"<td> <button>DELETE</button></td>";
}


    
}
?>

</body>
</html>