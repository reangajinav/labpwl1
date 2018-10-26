<form action="test.php" method="POST" enctype="multipart/form-data">
<fieldset>
	<legend>Ticket Online</legend>
	<pre>
Tujuan            :<select name="tujuan"><option value="">Pilih Tujuan</option><option value="jakarta-Semarang">jakarta-Semarang</option><option value="Jogja-Semarang">Jogja-Semarang</option></select><br>
Jam Keberangkatan :<input type="radio" name="jam" value="8.00">8.00<input type="radio" name="jam" value="9.00">9.00<input type="radio" name="jam" value="10.00">10.00<br>
Jumlah Penumpang  :<input type="number" name="jumlah"><br>
<input type="submit" value="next" name="next"> <input type="reset" value="Reset" name="reset">

</pre>
</fieldset>
</form>
