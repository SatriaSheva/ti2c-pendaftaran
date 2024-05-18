<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>
<link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
<body>
   <style>/* styles.css */
body {
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    padding: 0;
    background: #f0f0f0;
    color: #333;
}

header {
    background: #4c4c6d;
    color: #fff;
    padding: 20px 0;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    animation: slideDown 1s ease-out;
}

header h1 {
    margin: 0;
    font-size: 3em;
    letter-spacing: 2px;
    animation: fadeIn 2s ease-in-out;
}

header h3 {
    margin: 10px 0 0;
    font-weight: 300;
    animation: fadeIn 2s ease-in-out 0.5s;
    opacity: 0;
    animation-fill-mode: forwards;
}

nav {
    background: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    animation: fadeIn 1s ease-in-out;
}

nav ul li {
    margin: 0;
}

nav ul li a {
    display: block;
    color: #4c4c6d;
    text-align: center;
    padding: 15px 25px;
    text-decoration: none;
    transition: background-color 0.3s, color 0.3s;
    font-weight: bold;
    position: relative;
    overflow: hidden;
}

nav ul li a:hover {
    background-color: #4c4c6d;
    color: #fff;
}

nav ul li a::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background-color: #6c757d;
    transition: left 0.3s;
    z-index: -1;
}

nav ul li a:hover::before {
    left: 0;
}

h4 {
    text-align: center;
    margin-top: 30px;
    font-size: 2em;
    color: #4c4c6d;
    animation: fadeIn 2s ease-in-out;
}

p {
    text-align: center;
    font-size: 1.2em;
    background-color: #e8f4f8;
    color: #31708f;
    border: 1px solid #bce8f1;
    padding: 15px;
    margin: 20px auto;
    width: 50%;
    border-radius: 10px;
    animation: slideUp 1s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes slideDown {
    from { transform: translateY(-50px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

@keyframes slideUp {
    from { transform: translateY(20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}


</style>

     <h4>Menu</h4>
     <nav>
         <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
 <?php if(isset($_GET['status'])): ?>
    <p>
         <?php
            if($_GET['status'] == 'sukses'){
                 echo "Pendaftaran siswa baru berhasil!";
             } else {
                 echo "Pendaftaran gagal!";
            }
         ?>
     </p>
<?php endif; ?>
    </body>
</html>