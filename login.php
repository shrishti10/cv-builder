<html>
<head>
	<title>
		CV GENERATOR
	</title>
	<body style="font-family: Times New Roman, Times, serif;font-style: italic;font-size: 30px;">
<form action="" method="POST">
		<fieldset>
				<legend>
					LOGIN IN
				</legend>
<center>
FIRST NAME:<input type="text" name="fname" id="fname" autofocus placeholder="ENTER YOUR FIRST NAME" >
				<br>
EMAIL:<input type="text" name="email" id="email"  placeholder="ENTER YOUR EMAIL" >
				<br>
PASSWORD:<input type="password" name="pass" id="pass">
				<br>
<input type="submit" value="CLICK TO GENERATE YOUR CV" name="submit"  style="color:red;font-size:150%;">
</center>
</fieldset>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
if(empty($fname))
		{
		echo"<br>enter valid name";
		}
	elseif(empty($email))
		{
		echo"<br>enter valid email address";
		}
	elseif(empty($pass))
		{
		echo"<br>enter valid password";
		}
	else{
$co=mysqli_connect('localhost','root','Sahil@1','deepak');
$result=mysqli_query($co,"SELECT * FROM `login` WHERE `fname`='$fname' && `email`='$email' && `pass`='$pass' Limit 1");
$count=mysqli_num_rows($result);
if($count==1)
{
	header("location: cv.php");
	
}
else
{
	echo "please fill proper details";
	
}
}
}
?>