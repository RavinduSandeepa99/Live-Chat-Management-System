<?php 
  session_start();

  if (!isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 10px;
    margin-top: 10px;
}

#message p {
    padding: 3px 35px;
    font-size: 15px;
}


.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;

}

.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;

}

.option{
            outline: none;
            border: none;
            border-bottom: 1px solid #cecece;
}

        #text0{
    display: block;
    color: #000;
    font-weight: 500px;
    font-style: italic
}


</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LiveChat - Instructor Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" 
	      href="css/Instructor_style.css">
	<link rel="icon" href="img/icon.png">
</head>
<body class="d-flex
             justify-content-center
             align-items-center
             vh-100">
	 <div class="w-400 p-5 shadow rounded">
	 	<form method="post" 
	 	      action="app/http/Instructor_signup.php"
	 	      enctype="multipart/form-data">
	 		<div class="d-flex
	 		            justify-content-center
	 		            align-items-center
	 		            flex-column">

	 		<img src="img/logo.png" 
	 		     class="w-75">
	 		<h3 class="display-4 fs-1 
	 		           text-center">
	 			       Instructor Sign Up</h3>   
	 		</div>

	 		<?php if (isset($_GET['error'])) { ?>
	 		<div class="alert alert-warning" role="alert">
			  <?php echo htmlspecialchars($_GET['error']);?>
			</div>
			<?php } 
              
              if (isset($_GET['name'])) {
              	$name = $_GET['name'];
              }else $name = '';

              if (isset($_GET['username'])) {
              	$username = $_GET['username'];
              }else $username = '';
			?>

	 	  <div class="mb-3">
		    <label class="form-label">
		           Subject Name</label>
		    <input type="text"
		           name="name"
		           value="<?=$name?>" 
		           class="form-control">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">
		           Instructor ID</label>
		    <input type="text" 
		           class="form-control"
		           value="<?=$username?>" 
		           name="username">
		  </div>


		  <div class="mb-3">
		    <label class="form-label">
		           Password</label>
		    <input type="password" 
		           class="form-control"
		           name="password"
		           id="psw"
		           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
		           title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
		            <div id="message">
                              <h5>Password must contain the following:</h5>
                                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                <p id="number" class="invalid">A <b>number</b></p>
                                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                           </div>
		  </div>

		  <div class="mb-3">
		    <label class="form-label">
		           Profile Picture</label>
		    <input type="file" 
		           class="form-control"
		           name="pp">
		  </div>
		  
		  <button type="submit" 
		          class="btn btn-info">
		          Sign Up</button>
		  <a href="Instructor_index.php">Instructor_Login</a>
		</form>
				<br>
<div class="btn-group" role="group" aria-label="Basic mixed styles example">
	  <a href="../index.php"><button type="button" class="btn btn-warning m-1">Home Page</button></a>
</div>
	 </div>
</body>
<script src="js/main.js"></script>
</html>
<?php
  }else{
  	header("Location: Instructor_home.php");
   	exit;
  }
 ?>