<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="style.css?v=<?= time()?>">
</head>

<body>
    <div class="form-tambah">
        <h1>Tambah Data Mahasiswa</h1>
        <form action="proses-tambah.php" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="npm">NPM</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="number" name="npm" id="npm" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nama">Nama</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jurusan">Jurusan</label>
                    </td>
                    <td>:</td>
                    <td>
                        <select name="jurusan" id="jurusan" required>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Sains Data">Sains Data</option>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Jenis Kelamin</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki" required>Laki-laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Hobby</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="hobby[]" value="Main Game">Main Game
                        <input type="checkbox" name="hobby[]" value="Menggambar">Menggambar
                        <input type="checkbox" name="hobby[]" value="Olahraga">Olahraga
                        <input type="checkbox" name="hobby[]" value="Coding">Coding
                    </td>
                </tr>
                <tr>
                    <td colspan="3"> <button class="btn-tambah" type="submit" name="submit">Daftar</button>
                    </td>
                </tr>
            </table>

        </form>
    </div>

</body>

</html>