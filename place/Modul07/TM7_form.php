<!DOCTYPE html>
<html>
<head>
    <title>Form Informatika</title>
</head>
<body>
    <h2>DATA MAHASISWA / MAHASISWI ITERA</h2>
        <form action="TM_7Hasil.php" method="POST" target="_blank">
            <label>Nama :</label>
            <input type="textfield" name="nama" autofocus required><br><br>
            <label>Alamat : </label>
            <input type="textfield" name="alamat"><br><br>
            <label>Jenis Kelamin : </label><br>
            <input type="radio" name="jk" value="Laki-Laki" > Laki-Laki<br>
            <input type="radio" name="jk" value="Perempuan"> Perempuan<br><br>
            <label>Golongan Darah : </label>
            <select name="goldar">
                <option value="A" >A</option>
		        <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
	        </select><br><br>
            <label>Hobby : </label><br>
            <input type="checkbox" name="hobby" value="Gaming">Gaming<br>
            <input type="checkbox" name="hobby" value="Coding">Coding<br>
            <input type="checkbox" name="hobby" value="Sports">Sports<br>
            <input type="checkbox" name="hobby" value="Reading">Reading<br>
            <input type="checkbox" name="hobby" value="Dancing">Dancing<br><br>
            <label>Keterangan : </label><br>
            <textarea name="Keterangan" rows="5” cols="5"></textarea><br>
            <input type="submit" value="Kirim" name="submit">
        </form>
</body>
</html>