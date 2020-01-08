<html>
<head>
	<title>Koneksi Database</title>
</head>
<body>
<h1>Demo database</h1>
<?
$conn=mysql_connect("localhost","root","");
if($conn){
	echo "ok";
} else {
	echo "error";
}
?>
</body>
</html>