<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

include 'koneksi.php';
$sql = "INSERT INTO tbirgi (nama, email, pesan) values
       ('$nama', '$email', '$pesan')";
$query = mysqli_query ($koneksi, $sql);
if ($query){
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Disimpan');
        window.location='lihat_buku.php';
    </script>
    <?php
}
?>