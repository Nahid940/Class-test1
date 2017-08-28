<?php
//if(isset($_POST['register'])){
//	$name=$_POST['name'];
//	$email=$_POST['email'];
//	$address=$_POST['address'];
//	$mobile=$_POST['mobile'];
//	$gender=$_POST['optradio'];
//	$hobbies=implode('|',$_POST['hobby']);
//
//	 $tmp_name=$_FILES['image']['tmp_name'];
//     $img_name= $_FILES['image']['name'];
//
//     //Upload file to the specific folder
//     move_uploaded_file($tmp_name,'upload/'.$img_name);
//
//	 $dob=$_POST['day']."-".$_POST['month']."-".$_POST['year'];

//
//$img_name=$_POST['image']['name'];
//$_POST['pic']=$img_name;

	 //$db=new PDO('mysql:dbhost=localhost;dbname=php62',USERNAME: 'root',);
	 $db = new PDO('mysql:host=localhost;dbname=php62;charset=utf8mb4', username: 'root', passwd:'');
	 $query="INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `gender`, `hobbies`, `image`, `dob`, `created_at`, `modified_at`, `deleted_at`) VALUES
      (NULL, '".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['mobile']."', '".$_POST['gender']."', '".$_POST['hobbies']."', '".$_POST['$img_name']."', '".$_POST['$db']."', '', '', '');";

    $result = $db->exec($query);

    if($result==true){
echo "Done";
//    }

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
