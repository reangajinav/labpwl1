<form action="testform.php" method="POST" enctype="multipart/form-data">
<?php

	if(isset($_POST['next'])){

	echo "<form method = 'POST'>";
	echo "<fieldset>";
	echo "<legend>Ticket Online</legend>";
	for($counter = 0; $counter < $_POST['jumlah']; $counter++)
	{
		echo "Nama Penumpang		:<input type = 'text' name = 'username[]'/><br/>";
	}
	echo "<input type = 'submit' value = 'submit' action='testform.php'/>";
	echo "<input type = 'reset' value='Reset' name ='reset'/>";
	echo "</fieldset>";
	echo "</form>";
	}

?>
</form>