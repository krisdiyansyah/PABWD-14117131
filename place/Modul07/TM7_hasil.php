<?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        echo "Nama = $nama";
        echo "<br>";
        if(isset($_POST['alamat'])){
            $alamat= $_POST['alamat'];
            if($alamat!=""){
                echo "Alamat = $alamat";
            }
        }
        echo "<br>";
        if(isset($_POST['jk'])){
            $gender= $_POST['jk'];
            echo "Jenis Kelamin = $gender";
        }
        echo "<br>";
        if(isset($_POST['goldar'])){
            $goldar= $_POST['goldar'];
            echo "Golongan Darah = $goldar";
        }
        echo "<br>";
        if(isset($_POST['hobby'])){
            $hobby= $_POST['hobby'];
            echo "Hobby = $hobby";
        }
        echo "<br>";
        if(isset($_POST['Keterangan'])){
            $Keterangan= $_POST['Keterangan'];
            if($alamat!=""){
                echo "Keterangan = $Keterangan";
            }
        }
    }
?>