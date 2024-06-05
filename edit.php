<?php
include("koneksi.php");
$id = $_GET['id'];
$query = "SELECT * FROM tbl_mahasiswa WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="style.css?v=<?= time()?>">
</head>

<body>
    <div class="form-edit">
        <h1>Edit Data Mahasiswa</h1>
        <form action="proses-edit.php?id=<?= $row['id']?>" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="npm">NPM</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="number" name="npm" id="npm" value="<?= $row['npm'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nama">Nama</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama" value="<?= $row['nama'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jurusan">Jurusan</label>
                    </td>
                    <td>:</td>
                    <td>
                        <select name="jurusan" id="jurusan">
                            <option value="Sistem Informasi" <?= ($row['jurusan'] == "Sistem Informasi") ? "selected" : "" ?>>Sistem Informasi</option>
                            <option value="Informatika" <?= ($row['jurusan'] == "Informatika") ? "selected" : "" ?>>Informatika</option>
                            <option value="Sains Data" <?= ($row['jurusan'] == "Sains Data") ? "selected" : "" ?>>Sains Data</option>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Jenis Kelamin</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki" <?= ($row['jenis_kelamin'] == "Laki-laki") ? "checked" : "" ?> required>Laki-laki
                        <input type="radio" name="jk" value="Perempuan" <?= ($row['jenis_kelamin'] == "Perempuan") ? "checked" : "" ?> required>Perempuan
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Hobby</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="hobby[]" value="Main Game" <?= (in_array("Main Game", explode(",", $row['hobby']))) ? "checked" : "" ?>>Main Game
                        <input type="checkbox" name="hobby[]" value="Menggambar" <?= (in_array("Menggambar", explode(",", $row['hobby']))) ? "checked" : "" ?>>Menggambar
                        <input type="checkbox" name="hobby[]" value="Olahraga" <?= (in_array("Olahraga", explode(",", $row['hobby']))) ? "checked" : "" ?>>Olahraga
                        <input type="checkbox" name="hobby[]" value="Coding" <?= (in_array("Coding", explode(",", $row['hobby']))) ? "checked" : "" ?>>Coding
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><button class="btn-tambah" type="submit" name="submit" >Edit</button>
                    </td>
                </tr>
            </table>

        </form>
    </div>

</body>

</html>