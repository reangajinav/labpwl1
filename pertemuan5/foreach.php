<?php

	$kendaraan=[["mobil"=>["merk"=>"toyota","type"=>"vios"]],"sepeda","truk",["motor"=>["honda","yamah","suzuki"]]];
	$pendapatan=[50000,60000,70000];
	$sum=array_sum($pendapatan);
	echo $sum;

		echo "<table>";
		  echo "<tr>";
		  echo "<th>key</th>";
		  echo "<th>value</th>";
		  echo "</tr>";
	foreach ($kendaraan[0]["mobil"] as $key => $value) {
		
		echo "<tr>";
		echo "<td>".$key."</td>";
		echo "<td>".$value."</td>";
		echo "</tr>";
		
	}
		echo "</table>";
		echo "<pre>";
		print_r($kendaraan);
		echo "</pre>";

?>