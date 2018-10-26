<?php
	$nilai=["PWL"=>["Toni"=>"80","Dewi"=>"90","Nina"=>"75","Reza"=>"60"]
	,"AI"=>["Toni"=>"60","Dewi"=>"70","Nina"=>"95","Reza"=>"50"]
	,"SBD"=>["Toni"=>"60","Dewi"=>"70","Nina"=>"95","Reza"=>"50"]];
	
	$PWL=["Toni"=>"80","Dewi"=>"90","Nina"=>"75","Reza"=>"60"];
	$AI=["Toni"=>"60","Dewi"=>"70","Nina"=>"95","Reza"=>"50"];
	$SBD=["Toni"=>"75","Dewi"=>"75","Nina"=>"80","Reza"=>"70"];


	$sumpwl=array_sum($nilai["PWL"])/count($nilai["PWL"]);
	$sumai=array_sum($nilai["AI"])/count($nilai["AI"]);
	$sumsbd=array_sum($nilai["SBD"])/count($nilai["SBD"]);
	echo "Rata rata nilai PWL : ".$sumpwl."<br>";
	echo "Rata rata nilai AI : ".$sumai."<br>";
	echo "Rata rata nilai SBD : ".$sumsbd."<br>";

	$toni=$nilai["PWL"]["Toni"]+$nilai["AI"]["Toni"]+$nilai["SBD"]["Toni"];
	$Dewi=$nilai["PWL"]["Dewi"]+$nilai["AI"]["Dewi"]+$nilai["SBD"]["Dewi"];
	$Nina=$nilai["PWL"]["Nina"]+$nilai["AI"]["Nina"]+$nilai["SBD"]["Nina"];
	$Reza=$nilai["PWL"]["Reza"]+$nilai["AI"]["Reza"]+$nilai["SBD"]["Reza"];

	echo "Rata rata nilai toni : ".$toni/count($nilai);
	echo "<br>";
	echo "Rata rata nilai dewi : ".$Dewi/count($nilai);
	echo "<br>";
	echo "Rata rata nilai Nina : ".$Nina/count($nilai);
	echo "<br>";
	echo "Rata rata nilai toni : ".$Reza/count($nilai);
?>

<form>
	Nama : <input type="text" name="nama" value=""><br><br>
	PWL : <input type="number" name="pwl" value=""><br><br>
	AI : <input type="number" name="ai" value=""><br><br>
	SBD : <input type="number" name="sbd">
	<input type="submit" value="Submit" name="submit">
</form>

