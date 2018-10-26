<form action="" method="POST">
	<h2>Form Resgister</h2>
	Masukan Username : <input type="text" name="username" value=""><br><br>
	Masukan email : <input type="email" name="email" value=""><br><br>
	Masukan Password : <input type="Password" name="Password" value=""><br><br>
	<input type="submit" value="Submit" >
</form>

<?php
	var_dump($_POST);
	if($_POST){
		echo "<br>";
		echo "username : ".$_POST['username']."<br>";
		echo "Email : ".$_POST['email']."<br>";
		echo "Password : ".$_POST['Password']."<br>";
	}
?>
