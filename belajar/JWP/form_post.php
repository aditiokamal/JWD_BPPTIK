<!-- penanganan form dengan method GET -->
<form method="POST" action="">
	<label>Masukkan Nama</label><br/>
	<input type="text" name="nama"><br/>
	<label>Masukkan Usia</label><br/>
	<input type="text" name="usia"><br/>	
	<input type="submit" value="oke">
</form>
<?php 

if(ISSET($_POST["nama"])){
	// menangkap data nama
	$nama = $_POST['nama'];
	// menangkap data usia 
	$usia = $_POST['usia'];
	 
	// menampilkan data nama
	echo "Nama anda adalah " . $nama;
	echo "<br/>";
	// menampilkan data usia
	echo "Usia anda adalah " . $usia;
}
?>