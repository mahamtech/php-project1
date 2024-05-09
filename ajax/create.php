<?php
include "dbconnect.php";
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
<form  id="frm"  enctype="multipart/form-data">
<table cellspacing="20">
<th colspan="2"><center>NEW EMPLOYEE DETAILS</center></th>    
<tr>
<th>EMP_Name</th>
<td><input type="text"  id="name"name="name"/></td>    
</tr>
<tr>
<th>Gender</th>
<td>
<input type="radio" name="gender" id="m" value="M"> Male
<input type="radio" name="gender" id="f" value="F"> Female
</td>
</tr>
<tr>
<th>College</th>
<td><input type="text" id="college" name="college"/></td>
</tr>
<tr>
<th>EMAIL</th>
<td><input type="email"  id="email" name="email"/></td>
</tr>
<tr>
<th>Mobile</th>
<td><input type="number"  id="mob" name="mob"/></td>
</tr>
<tr>
    <th>Password</th>
    <td><input type="password"  id="password" name="password" autocomplete="current-password"/></td>
    </tr>
<tr>
<td><input type="submit"  id="btn" name="submit" value="create"/></td>    
</tr>

</table>
</form>
<div id="display">
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"
			  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
			  crossorigin="anonymous"></script>
              <script>
$(document).ready(function() {
  $('#display').load('display.php');

  $('#frm').submit(function(event) {
    event.preventDefault(); // Prevent the form from submitting via the browser
    var formData = $(this).serialize(); // Serialize the form data
    $.ajax({
      url: 'http://localhost/crud/ajax/insert.php',
      type: 'POST',
      data: formData,
      success: function(data) {
  if (data.trim() == "success") {
    alert('Data inserted successfully');
    $("#frm")[0].reset();
  } else {
    alert('Error: ' + data);
  }
}


     
    });
  });
});


</script>
</body>
</html>
