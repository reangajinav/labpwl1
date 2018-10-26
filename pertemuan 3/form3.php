<form action="#" method="POST">
	<h2>Form Resgister</h2>
	Masukan Username : <input type="text" name="username" value=""><br><br>
	Masukan email : <input type="email" name="email" value=""><br><br>
	Masukan Password : <input type="Password" name="Password" value=""><br><br>
	masukan Program :
	<input type="radio" name="program" value="reguler">Reguler
	<input type="radio" name="program" value="premium">Premium<br><br>
	<input type="submit" value="Submit" name="submit" >
	<input type="submit" value="Click Me" name="clickme">
	<input type="reset" value="reset" name="reset">
</form>

<?php

	if(isset($_POST['submit'])){
	
		echo "username : ".$_POST['username']."<br>";
		echo "Email : ".$_POST['email']."<br>";
		echo "Password : ".$_POST['Password']."<br>";
		echo "program : ".$_POST['program']."<br>";
	}
?>