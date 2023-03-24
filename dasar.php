<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP Dasar</title>
    <style>
        label {
            display : block;
        }
        body{
            background: #84D2C5;
        }

        .kotak-login{
            width: 350px;
            border-top-right-radius: 30px;
            border-bottom-left-radius: 30px;
            background: white;
            /*meletakkan form ke tengah*/
            margin: 80px auto;
            padding: 30px 20px;
            
        }
        .kartu {
        width: 500px;
        margin: 0 auto;
        margin-top: 70px;
        box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,.03);
        transition: all .3s;
        background-color: #8DCBE6;
        border: solid 8px #ECECEC;
        border-top-right-radius: 80px;
        border-bottom-left-radius: 80px;
        } 
        .kartu:hover {
            background-color: #DDDDDD;
            border: solid 8px #EEEEEE;
            border-top-left-radius: 80px;
            border-bottom-right-radius: 80px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
        }

        h2{
            text-align: center;
            margin-top: 30px;
            font-weight:bold;
        }
        </style>
</head>
<body>
    <div class="container">
    <div class="card kartu">
    <h2>Input Data</h2>
    <form action="" method="post">
    <div class="kotak-login">
		<label for="nama">Nama:</label>
        <input class="form-control" type="text" name="nama" id="nama">
		<label for="tgl_lahir">Tanggal Lahir:</label>
        <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir">
		<label for="pekerjaan">Pekerjaan:</label>
		<select id="pekerjaan" name="pekerjaan">
			<option value="karyawan">Karyawan</option>
			<option value="dosen">Dosen</option>
            <option value="programmer">Programmer</option>
		</select><br><br>        
        <button class="btn btn-warning" type="submit" value="Submit" name="submit">Submit</button>
            
    <?php
    $nama = $_POST["nama"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $pekerjaan = $_POST["pekerjaan"];

    $tanggal_lahir = new DateTime($tgl_lahir);
    $sekarang = new DateTime();
    $umur = $sekarang->diff($tanggal_lahir)->y;

    if ($pekerjaan == "karyawan") {
        $gaji = 5000000;
    } else if ($pekerjaan == "dosen") {
        $gaji = 7000000;
    } else if ($pekerjaan == "programmer") {
        $gaji = 8000000;
    }

    echo "<h2>Hasil Input Data</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Tanggal Lahir: " . $tgl_lahir . "<br>";
    echo "Umur: " . $umur . " Tahun<br>";
    echo "Pekerjaan: " . $pekerjaan . "<br>";
    echo "Gaji: Rp " . $gaji . "<br>";
    ?>

    </div> 
	</form>
    </div>
    </div>
</body>
</html>
