<html>
<head>
	<title>
		CV GENERATOR
	</title>
	<body style="font-family: Times New Roman, Times, serif;font-style: italic;font-size: 30px;">
<form action="" method="POST">
		<fieldset>
				<legend>
					SIGN UP
				</legend>
<center>
FIRST NAME:<input type="text" name="fname" id="fname" autofocus placeholder="ENTER YOUR FIRST NAME" >
				<br>
LAST NAME:<input type="text" name="lname" id="lname"  placeholder="ENTER YOUR LAST NAME" >
				<br>
CONTACT:<input type="text" name="phone" id="phone"  placeholder="ENTER YOUR CONTACT NO." >
				<br>
EMAIL ID:<input type="text" name="email" id="email"  placeholder="ENTER YOUR EMAIL ID" >
				<br>
DATE OF BIRTH<input type="date" name="dob" id="dob">
				<br>
GENDER: MALE:<input type="radio" name="gender" value="male">FEMALE:<input type="radio" name="gender" value="female">
				<br>
PASSWORD:<input type="password" name="pass" id="pass">
				<br>
CITY<input type="text" name="city" id="city"  placeholder="ENTER YOUR CITY" >
				<br>
STATE<input type="text" name="state" id="state"  placeholder="ENTER YOUR STATE" >
				<br>
RELATIONSHIP STATUS: MARRIED:<input type="radio" name="status" value="m">SINGLE:<input type="radio" name="status" value="s">
				<br>
<input type="submit" value="CLICK TO CREATE YOUR ACCOUNT" name="submit"  style="color:red;font-size:150%;">
</center>
</fieldset>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$pass=$_POST['pass'];
$city=$_POST['city'];
$state=$_POST['state'];
$status=$_POST['status'];
if(empty($fname) ||empty($lname) || (!preg_match("/[a-zA-Z]{3,}/",$fname)) ||(!preg_match("/[a-zA-Z]{3,}/",$lname)) )
		{
		echo"<br>enter valid name in more than 3 character";
		}
	elseif(empty($email) or (!preg_match("/[a-zA-]{3,}[.]*[a-zA-Z0-9]*@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}/",$email)) )
		{
		echo"<br>enter valid email address";
		}
	elseif(empty($phone) or (!preg_match("/[0-9]{10}/",$phone)) )
		{
		echo"<br>enter valid contact details";
		}
	elseif(empty($gender))
	{
	echo"enter your gender";
	}
elseif(empty($city) or empty($state))
	{
	echo"enter your city and state";
	}
elseif(empty($status))
	{
	echo"enter your relationship status";
	}
else{
$co=mysqli_connect('localhost','root','Sahil@1','deepak');

mysqli_query($co,"INSERT INTO login (fname,lname,phone,email,pass,dob,city,state,status,gender) VALUES('$fname','$lname','$phone','$email','$pass','$dob','$city','$state','$status','$gender')");
		if(mysqli_affected_rows($co) > 0){
			header("location: login.php");
		} else {
		echo "not booked";
		echo mysqli_error ($co);
		}


}

}
?>