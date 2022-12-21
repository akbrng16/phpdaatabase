<?php
include 'koneksi.php';

//echo var_dump($_POST);
// kolom data di table

$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$foto = $_FILES['foto']['name'];

//echo "<h1>selamat $nama , alamat anda $alamat , berjenis kelamnin $jeniskelamin , dengan nohp $nohp </h1>";

//echo '<img src="assets/' . $foto . '"class="card-img-top" alt=".." > ';

$insert_data = "INSERT INTO `barulagi` (`No`, `nama`, `jenis`, `alamat`, `nohp`) VALUES (NULL, '$nama', '$jeniskelamin', '$alamat', '$nohp');";
$con->query($insert_data);
if ($insert_data) {
    echo "<p>data berhasil masuk<p>";
}else{
    echo "<P>data gagal masuk<P>";
}


echo "<br>";

echo var_dump($_FILES);
$nama = $_FILES["foto"]["name"];
move_uploaded_file($_FILES["foto"]["tmp_name"], 'assets/' . $nama);