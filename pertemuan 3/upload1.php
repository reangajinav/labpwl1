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
		//ambil data file
		$namaFile = $_FILES['berkas']['name'];
		$namaSementara = $_FILES['berkas']['tmp_name'];

		//tentukan lokasi file akan dipindahkan
		$dirUpload="uploads/";

		//pindahkan file
		$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

		if($terupload){
			echo "upload berhasil!!<br/>";
			echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
		} else {
			echo "Upload Gagal";
		}
		}
?>