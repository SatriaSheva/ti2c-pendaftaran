<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru</title>
</head>
<link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
<body>    
 <style> * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            color: #333;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        header h3 {
            font-size: 24px;
            color: #2c3e50;
            animation: fadeInDown 1s ease-in-out;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        fieldset {
            border: none;
        }

        p {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #34495e;
            animation: fadeInUp 1s ease-in-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            margin-top: 5px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
            animation: fadeInUp 1s ease-in-out;
        }

        input[type="text"]:focus,
        textarea:focus,
        select:focus {
            border-color: #2980b9;
            box-shadow: 0 0 5px rgba(41, 128, 185, 0.5);
            outline: none;
            transform: scale(1.02);
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            width: 100%;
            background: linear-gradient(135deg, #6dd5ed, #2193b0);
            color: #fff;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            animation: fadeInUp 1s ease-in-out;
        }

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #2193b0, #6dd5ed);
        }

        input[type="submit"]:active {
            transform: scale(0.98);
        }

        select {
            appearance: none;
            background: url('data:image/svg+xml;charset=US-ASCII,%3Csvg xmlns%3D%22http://www.w3.org/2000/svg%22 viewBox%3D%220 0 4 5%22%3E%3Cpath fill%3D%22%23333%22 d%3D%22M2 0L0 2h4L2 0zM2 5L0 3h4L2 5z%22/%3E%3C/svg%3E') no-repeat right 10px center;
            background-size: 8px 10px;
        }

        select::-ms-expand {
            display: none;
        }

        /* Tambahkan sedikit margin untuk radio button */
        label[for="jenis_kelamin"] {
            margin-bottom: 10px;
        }

        label[for="jenis_kelamin"] input {
            margin-right: 5px;
        }
</style>
       <form action="proses-pendaftaran.php" method="POST">

           <fieldset>

         <p>
             <label for="nama">Nama: </label>
             <input type="text" name="nama" placeholder="nama lengkap" />
         </p>
         <p>
             <label for="alamat">Alamat: </label>
             <textarea name="alamat"></textarea>
         </p>
         <p>
             <label for="jenis_kelamin">Jenis Kelamin: </label>
             <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
             <label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
         </p>
         <p>
             <label for="agama">Agama: </label>
             <select name="agama">
                 <option>Islam</option>
                 <option>Kristen</option>
                 <option>Hindu</option>
                 <option>Budha</option>
                 <option>Atheis</option>
             </select>
         </p>
          <p>
             <label for="sekolah">Sekolah Asal: </label>
             <input type="text" name="sekolah" placeholder="sekolah asal" />
         </p>
         <p>
             <input type="submit" value="Daftar" name="daftar" />
         </p>
 
        </fieldset>
 
     </form>
     </body>
</html>
