<form action="?action=edit" method="POST">
	<h2>Form Resgister</h2>
	Masukan Username : <input type="text" name="username" value=""><br><br>
	Masukan email : <input type="email" name="email" value=""><br><br>
	Masukan Password : <input type="Password" name="Password" value=""><br><br>
	<input type="hidden" name="action" value="insert">
	<input type="submit" value="Submit" name="submit">
</form>

<?php
	if($_POST){
	print_r($_GET);
	echo "<br>"; echo "<br>";
	print_r($_POST);
	echo "<br>"; echo "<br>";
	print_r($_REQUEST);
	}
?>