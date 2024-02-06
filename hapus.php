<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql = "DELETE FROM bt_tamu where nama='$id'";
$query = mysqli_query($koneksi, $sql);

if ($query){
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Dihapus');
        window.location='lihat_buku.php';
        </script>
        <?php
}
?>             