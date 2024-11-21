<?php
include "koneksi.php";
if(isset($_GET['id'])){
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM barang WHERE id = $id");
while ($data = mysqli_fetch_array($result)) {
    $nama = $data['nama'];
    $harga = $data['harga'];
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/assets/js/bootstrap.js"></script>
    <title>Edit Barang</title>
</head>
<body style="padding: 16px;">
<center>
    <h3>Edit</h3>
    <form action="update.php" method="post">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $harga; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"></td>
                <td><input type="submit" name="update" value="Edit" class="btn btn-success btn-lg"></td>
            </tr>
        </table>
    </form>
</center>
<?php 
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $result = mysqli_query($koneksi, "UPDATE barang SET nama='$nama', harga='$harga' WHERE id='$id'");
    header("location:index.php");
}
?>
