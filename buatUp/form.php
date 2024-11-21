<?php
require 'koneksi.php';

    if(isset($_POST['btnsimpan'])){
        $simpan = mysqli_query($con, "INSERT INTO 
        tb_crud(Nama, Email, Alamat, Hobi) VALUES ('$_POST[Nama]','$_POST[Email]','$_POST[Alamat]','$_POST[Hobi]')");

        if($simpan){
            echo "<script> alert ('berhasil simpan') </script>";
            echo "<script> document.location.href='data.php' </script>";
        }
        else{
            echo "<script> alert ('gagal simpan') </script>";
            echo "<script> document.location.href='data.php' </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>belajar</title>

    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container{
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);
            margin-top: 10px;
            padding: 5px;
            border-radius: 10px;
        }

        span{
            color: #fff;
            background-color: #000080;
            border-radius: 50px;
            padding-inline: 10px;
            box-sizing: border-box;
        }

        .nav{
        border-radius: 10px;
        box-shadow: 5px 2px 10px rgba(4, 5, 0, 0.5);
        }
    </style>
</head>

<body>
    <!-- navbar strat -->
     <div class="nav m-4" style="background-color: #F8F8FF;">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    <a class="nav-link active" aria-current="page" href="data.php">Data Member</a>
                    <a class="nav-link active" aria-current="page" href="#">Detail</a>
                    <a class="nav-link active" aria-current="page" href="#">Disabled</a>
                </div>
            </div>
        </div>
    </nav>
    </div>
    <!-- navbar end -->

    <!-- form stat -->
     <div class="container mt-5 p-5">
        <h3 class="text-center mt-5">Input <span>Data</span></h3>
        <form method="POST">
    <label for="Nama" class="form-label">Nama</label>
    <input type="text" id="Nama" class="form-control" aria-describedby="passwordHelpBlock" name="Nama">
    <label for="Email" class="form-label">Email</label>
    <input type="email" id="Email" class="form-control" aria-describedby="passwordHelpBlock" name="Email">
    <label for="Alamat" class="form-label">Alamat</label>
    <input type="text" id="Alamat" class="form-control" aria-describedby="passwordHelpBlock" name="Alamat">
    <label for="Hobi" class="form-label">Hobi</label>
    <input type="text" id="Hobi" class="form-control" aria-describedby="passwordHelpBlock" name="Hobi">

    <div class="btn d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-primary" name="btnsimpan">Submit</button>
        <button type="reset" class="btn btn-outline-danger">Batal</button>
    </div>
    </form>
    </div>
    <!-- form end -->
</body>

</html>