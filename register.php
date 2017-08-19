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
	 echo "<pre>
    Profile picture :<img src='upload/$img_name' height='100px' width='100px'>
	Name: $name;
	Email: $email;
	Address: $address;
	Mobile: $mobile;
	Gender: $gender;
	Hobbies :$hobbies;
	Date of birth: $dob;
    
	</pre>";
	
	
	 
	
	
}
?>