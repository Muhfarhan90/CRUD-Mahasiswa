<?php
    include("koneksi.php");
    $id = $_GET['id'];

    $query = "DELETE FROM tbl_mahasiswa WHERE id = '$id'";
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "
                <script>
                    alert('Data Mahasiswa berhasil dihapus...');
                    document.location.href = 'view.php'
                </script>
            ";
    } else {
        echo "
            <script>
                alert('Data Mahasiswa gagal dihapus...');
                document.location.href = 'view.php'
            </script>
        ";
    }
?>