<?php
if(isset($_POST['register'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$gender=$_POST['optradio'];
	$hobbies=implode('|',$_POST['hobby']);
	
	 $tmp_name=$_FILES['image']['tmp_name'];
     $img_name= $_FILES['image']['name'];

     //Upload file to the specific folder
     move_uploaded_file($tmp_name,'upload/'.$img_name);
	 
	 $dob=$_POST['day']."-".$_POST['month']."-".$_POST['year'];
//	 echo "<pre>
//    Profile picture :<img src='upload/$img_name' height='150px' width='150px'>
//	Name: $name;
//	Email: $email;
//	Address: $address;
//	Mobile: $mobile;
//	Gender: $gender;
//	Hobbies :$hobbies;
//	Date of birth: $dob;
//
//	</pre>";
	
	
	 
	
	
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .width{
            width: 80%;
        }
    </style>
</head>
<body>
<div class="container width">
<table class="table table-bordered">
    <h3>User data</h3>
    <thead>
    <tr class="success">
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Gender</th>
        <th>Hobbies</th>
        <th>Date of Birth</th>
    </tr>
    </thead>
    <tbody>
    <tr class="info">
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    </tbody>
</table>
</div>
</body>
</html>
