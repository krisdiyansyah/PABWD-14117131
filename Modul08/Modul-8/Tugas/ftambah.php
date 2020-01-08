<!DOCTYPE html>
<html>
<head>
	<title>Simpan Mahasiswa</title>
</head>
<body>
<h1>Simpan Mahasiswa MySQL</h1>
<?php 
$nrp = $_POST["nrp"];
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$jurusan=$_POST["jurusan"];
$conn=mysqli_connect("localhost","root","") or die ("koneksi gagal");
mysqli_select_db($conn,"itera");
echo "NRP 			: $nrp <br>";
echo "NAMA		 	: $nama <br>";
echo "ALAMAT 		: $alamat <br>";
echo "JURUSAN		: $jurusan";
$sqlstr="insert into mahasiswa (nrp,nama,alamat,id_jurusan) values('$nrp','$nama','$alamat','$jurusan')";
$hasil=mysqli_query($conn,$sqlstr);
echo "<br>";
if ($hasil) {
	echo "Simpan data berhasil";
}
 ?>
</body>
</html>