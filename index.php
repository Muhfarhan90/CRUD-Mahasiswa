<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .kotak {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            flex-direction: column;
            text-align: center;
            border-radius: 20px;
            padding: 2rem;
            width: 500px;
            margin: 200px auto;
            background-color: greenyellow;
        }

        a {
            text-decoration: none;
            color: black;
            font-size: 1rem;
        }

        img {
            width: 200px;
        }
       #tambah{
            background-color: green;
            padding: 0.5rem 1rem;
            border-radius: 10px;
            color: white;
        } 
        a {
            color : white;
        }
        #lihat{
            background-color: yellowgreen;
            padding: 0.5rem 1rem;
            border-radius: 10px;
            color: white;
        }
        body {
            background-color: green;
        }
    </style>
</head>

<body>
    <div class="kotak">

        <h1>Selamat Datang Admin</h1>
        <img src="img/Logo Upn Jatim Baru.png" alt="">
        <button id="tambah"><a href="tambah.php">Tambah Data Mahasiswa</a>
        </button>
        <button id="lihat"> <a href="view.php">Lihat Mahasiswa</a>
        </button>
    </div>


</body>

</html>