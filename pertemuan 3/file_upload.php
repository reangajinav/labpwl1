<form action="#" method="POST" enctype="multipart/form-data">
	<h2>Form Upload</h2>
	Pilih File : <input type="file" name="berkas" value=""><br><br>
	<input type="submit" value="Submit" name="submit">
	<input type="reset" value="Reset" name="reset">
</form>

<?php
	if(isset($_POST['submit'])){
		echo "<pre>";
		print_r($_FILES);
		echo "</pre>";
		}
?>