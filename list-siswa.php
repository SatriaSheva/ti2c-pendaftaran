<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <style>
        /* CSS Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
            animation: fadeIn 1s;
        }
        header {
    background: linear-gradient(to right, #4b7bec, #a5b1c2);
    color: #fff;
    padding: 20px 0;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    position: sticky;
    top: 0;
    animation: slideDown 1s ease-out;
}

nav {
    background: linear-gradient(to right, #6a89cc, #82ccdd);
    padding: 10px 0;
    text-align: center;
    animation: slideDown 1s ease-out;
}



        h3 {
            margin: 0;
            font-size: 28px;
        }

       

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border: 2px solid transparent;
            transition: all 0.3s ease;
            border-radius: 20px;
        }

        nav a:hover {
            background-color: #fff;
            color: #4b7bec;
            border-color: #4b7bec;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4b7bec;
            color: white;
        }

        tbody tr:hover {
            background-color: #d1d8e0;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideDown {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>
    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("config.php");
                $sql = "SELECT * FROM daftar";
                $query = mysqli_query($db, $sql);
                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$siswa['id']."</td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['asal sekolah']."</td>";
                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>
