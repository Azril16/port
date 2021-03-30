<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
h2 {
  color: green;
  font-size : 50px;
  
}
 
.login {
  padding: 1px;
  margin: auto;
  width: 17em;
}
 
label {
  font-size: 10pt;
  color: #555;
}
 
input[type="username"],
input[type="pass"],
textarea {
  padding: 8px;
  width: 95%;
  background: #efefef;
  border: 0;
  font-size: 10pt;
  margin: 6px 0px;
}
 
.tombol {
  background: #3498db;
  color: #fff;
  border: 0;
  padding: 5px 8px;
}
	</style>
</head>
<body>


	<center><h2>SIGN UP</h2></center>

	<div class="login">
		<form action="dashbord.php" method="GET">
			
			<div align="center">
				<label for="username"><b>User Name<br></b></label>
				<input type="text" name="username" id="username">
			</div> <br><br>

			<div align="center">
				<label for="pass"><b>Password<br></b></label>
				<input type="Password" name="pass" id="pass">
			</div> <br><br>

			<div>
				<center><input type="submit" value="Login"></center>
			</div>
		</form>
	</div>

</body>
</html>