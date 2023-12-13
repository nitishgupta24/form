<?php include("connection.php");?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGISTRATION FORM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
		<div class="title">
			Registration Form
		</div>
		<div class="form">
			<div class="input-field"> 
				<label>First Name :</label>
				<input type="text" class="input" name="fname" required>
			</div>
			<div class="input-field">
				<label>Last Name :</label>
				<input type="text" class="input" name="lname" required>
			</div>
			<div class="input-field">
				<label>Password :</label>
				<input type="password" class="input" name="password" required>
			</div>
			<div class="input-field">
				<label>Confirm Password :</label>
				<input type="password" class="input" name="conpassword" required>
			</div>
			<div class="input-field">
				<label>Gender :</label>
				<div class="custom-select">
				<select name="gender" required>
					<option value="">Select</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
				</select>
			   </div>
			</div>
			<div class="input-field">
				<label>E-mail Address:</label>
				<input type="text" class="input" name="email" required>
			</div>
			<div class="input-field">
				<label>Phone Number :</label>
				<input type="text" class="input" name="phone" required>
			</div>
			<div class="input-field">
				<label>Address :</label>
				<textarea class="textarea" name="address required"></textarea>
			</div>
			<div class="input-field">
				<label class="check">
					<input type="checkbox" required>
					<span class="checkmark"></span>
				</label>
				<p>Agree to Terms and Condition</p>
			</div>
			<div class="input-field">
				<input type="submit" value="Register" class="btn" name="submt" >
			</div>
		</div>
		</form>
	</div>
</body>

</html>

<?php
    if($_POST['submt'])
    {
    	$fn    = $_POST['fname'];
    	$ln    = $_POST['lname'];
    	$pwd   = $_POST['password'];
    	$cpwd  = $_POST['conpassword'];
    	$gendr = $_POST['gender'];
    	$email = $_POST['email'];
    	$phone = $_POST['phone'];
    	$addrs = $_POST['address'];

    	$query = "INSERT INTO FORM VALUES('$fn','$ln','$pwd','$cpwd','$gendr','$email','$phone','$addrs')";
    	$data = mysqli_query($conn,$query);

    	if ($data)
        {
        	echo "Data Inserted into Database";

    	}
    	else
    	{
    		echo "Failed";
    	}
    }
      


?>