<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/assets/js/bootstrap.js"></script>
    <title>Home</title>
</head>
<body>
    <center><h1>Data Penjualan</h1></center> 
    <center>
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Edit/Delete</th>
            </tr>
            <?php
            include 'koneksi.php';
            $result = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id DESC");
            while ($data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $data['id'] . "</td>";
                echo "<td>" . $data['nama'] . "</td>";
                echo "<td>" . $data['harga'] . "</td>";
                echo "<td><a href='update.php?id=" . $data['id'] . "'>Edit</a> | <a href='delete.php?id=" . $data['id'] . "'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </center> 
    <center><a href="add.php">Tambah</a></center> 
</body>
</html>