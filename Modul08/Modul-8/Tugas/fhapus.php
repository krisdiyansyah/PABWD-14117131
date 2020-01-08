<?php 
$cari=$_POST['dnama'];
$conn=mysqli_connect("localhost","root","");
mysqli_selectdb($conn,"itera");
$hasil=mysqli_query($conn,"delete from mahasiswa where nama like '%$cari%'");
if ($hasil) {
	echo "DATA MAHASISWA BERHASIL DIHAPUS";
}
 ?>