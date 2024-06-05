<?php
include("koneksi.php");
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    if (isset($_POST['npm']) || isset($_POST['nama'])  || isset($_POST['jurusan']) || isset($_POST['jenis_kelamin']) || isset($_POST['hobby'])) {
        $npm = $_POST['npm'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $jk = $_POST['jk'];
        $hobbies = array();
        $hobby = $_POST['hobby'];
        if (isset($_POST['hobby'])) {
            foreach ($hobby as $h) {
                $hobbies[] = $h;
            }
            $hobbies_string = implode(',', $hobbies);
        } else {
            $hobbies_string = "";
        }
        $query = "UPDATE tbl_mahasiswa SET `npm` = '$npm', `nama` = '$nama', `jurusan` = '$jurusan', `jenis_kelamin` = '$jk', `hobby` = '$hobbies_string' WHERE `id` = '$id'";
        mysqli_query($conn, $query);

        if (mysqli_affected_rows($conn) > 0) {
            echo "
                        <script>
                            alert('Data Mahasiswa berhasil diubah...');
                            document.location.href = 'view.php'
                        </script>
                    ";
        } else {
            echo "
                    <script>
                        alert('Data Mahasiswa gagal diubah...');
                        document.location.href = 'view.php'
                    </script>
                ";
        }
    }
}
