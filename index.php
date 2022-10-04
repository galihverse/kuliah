<?php
// server.php untuk koneksi ke server database
include_once 'server.php';

// SQL Query untuk mengambil data dati table "mahasiswa'
$getDataQuery = "SELECT * FROM mahasiswa ORDER BY id DESC";
// Fungsi untuk mengambil data dari server
$hasil = mysqli_query($conn, $getDataQuery);
?>
<!-- INI HALAMAN FRONTEND -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="navbar bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Daftar Mahasiswa</a>
        </div>
    </div>
    <div class="container">
        <table class="table table-dark table-striped" style="margin-top:30px">
            <thead>
                <tr>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Nomor HP</th>
                    <th>Domisili</th>
                </tr>
            </thead>
            <tbody>
                <?php
// Menampilkan data  hasil dari sebelumnya dalam bentuk array, kemudian di render menggunakan html table
while ($mhs = mysqli_fetch_array($hasil)) {
    echo "<tr>";
    echo "<td>" . $mhs['npm'] . "</td>";
    echo "<td>" . $mhs['nama'] . "</td>";
    echo "<td>" . $mhs['gender'] . "</td>";
    echo "<td>" . $mhs['nomor'] . "</td>";
    echo "<td>" . $mhs['domisili'] . "</td>";
    echo "</tr>";
}
;
?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>