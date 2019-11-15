<?php
function nama($karakter, $color='red'){
	$panjangnama = strlen($karakter);
	$harga = 0;
	if($panjangnama>0 && $panjangnama<=10){
		$harga = 300 * $panjangnama;
	}elseif ($panjangnama>10 && $panjangnama<=20) {
		$harga = 500 * $panjangnama;
	}else{
		$harga = 700 * $panjangnama;
	}
	echo '<font color="'.$color.'">'.$karakter.'</font><br>';
	echo '<font color="'.$color.'">'.$harga.'</font><br><br>';
}
$nama = $_GET['Nama'];
$warna = $_GET['warna'];    
if($_GET['warna'] == ""){
	nama($nama);
}else{
	nama($nama, $warna);
}
?>	