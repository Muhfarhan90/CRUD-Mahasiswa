<?php
include("koneksi.php");

if (isset($_POST["submit"])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $jk = $_POST['jenis_kelamin'];
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
    $query = "INSERT INTO tbl_mahasiswa (npm, nama, jurusan, jenis_kelamin, hobby) VALUES ('$npm', '$nama', '$jurusan', '$jk', '$hobbies_string')";
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "
                <script>
                    alert('Data Mahasiswa berhasil ditambahkan...');
                    document.location.href = 'view.php'
                </script>
            ";
    } else {
        echo "
            <script>
                alert('Data Mahasiswa gagal ditambahkan...');
                document.location.href = 'view.php'
            </script>
        ";
    }
}
