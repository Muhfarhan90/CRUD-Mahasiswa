<?php
include("koneksi.php");

if (isset($_GET['search'])) {
    if (isset($_GET['katakunci'])) {
        $katakunci = $_GET['katakunci'];
        $query = "SELECT * FROM tbl_mahasiswa WHERE npm = '$katakunci'";
        $result = mysqli_query($conn, $query);
        $i = 1;
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>List Mahasiswa</title>
            <link rel="stylesheet" href="style.css?v=<?= time(); ?>">
        </head>

        <body>
            <div class="view">
                <h1>List Mahasiswa</h1>
                <div class="aksi">
                    <button class="btn-tambah"><a href="tambah.php">Tambah Data</a></button>
                    <form action="search.php" method="GET">
                        <input type="number" name="katakunci" placeholder="search..." required  >
                        <button type="submit" name="search" class="btn-edit">Cari</button>
                    </form>
                </div>

                <br>
                <br>
                <table border="2" cellpadding="10" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Jenis Kelamin</th>
                        <th>Hobby</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) { ?>

                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row['npm'] ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['jurusan'] ?></td>
                            <td><?= $row['jenis_kelamin'] ?></td>
                            <td><?= $row['hobby'] ?></td>
                            <td><button class="btn-edit"><a href="edit.php?id=<?= $row['id'] ?>">Edit</a></button> | <button class="btn-hapus"><a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Apakah anda yakin menghapus data?')">Hapus</a></button></td>

                        </tr>
                    <?php
                        $i++;
                    }
                    ?>
                </table>
                <br>
                <br>
                <button class="btn-tambah">
                    <a href="index.php">Kembali Ke Beranda</a>

                </button>
            </div>

        </body>

        </html>



<?php

    }
}

?>