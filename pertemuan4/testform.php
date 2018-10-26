<?php
	if(isset($_POST['submit'])){
	echo "<form method = 'POST'>";
	echo "<fieldset>";
	echo "<legend>Ticket Online</legend>";
	for ($i=0; $i <$_POST['jumlah'] ; $i++) {
		echo "Tujuan              : ".$_POST['tujuan']."<br>";
		echo "Jam Keberangkatan   : ".$_POST['jam']."<br>";
		echo "Nama Penumpang      : ".$_POST['username[$counter]']."<br>";
				
	}
	echo "</fieldset>";
	echo "</form>";
		
	}
?>