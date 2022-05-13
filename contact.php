<?php

  
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && ($_POST['message'])){
	include 'dbh.php';
	
	function validate($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	  $name = validate($_POST['name']);
      $email = validate($_POST['email']);
      $subject = validate($_POST['subject']);
	  $message = validate($_POST['message']);
	  $msg = $_POST['mag'];
	
	if(empty($name) || empty($email) || empty($subject) || empty($message)){
		header("Location: contact.php?");
	}else{
		$sql = "INSERT INTO contact(name,email,subject,message) VALUES('$name','$email','$subject','$message')";
		$result = mysqli_query($conn,$sql);
		
		if ($result) {
			header('Location: contact_us.php?success');
		}else {
			header('Location: contact_us.php?error');
		}	
	}
}else{
		header("Location: contact.php");
	}

?>