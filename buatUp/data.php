<?php 
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .nav{
        border-radius: 10px;
        box-shadow: 5px 2px 10px rgba(4, 5, 0, 0.5);
        }
        
        .container{
            border-radius: 10px;
            box-shadow: 5px 2px 10px rgba(4, 5, 0, 0.5);
        }
    </style>
</head>
<body>

<!-- navbar start -->
<div class="nav m-4" style="background-color: #F8F8FF;">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="form.php">Home</a>
                    <a class="nav-link active" aria-current="page" href="data.php">Data Member</a>
                    <a class="nav-link active" aria-current="page" href="#">Detail</a>
                    <a class="nav-link active" aria-current="page" href="#">Disabled</a>
                </div>
            </div>
        </div>
    </nav>
    </div>
<!-- navbar end -->

<!-- table data start -->
 <div class="container mt-5 p-5">
<table class="table table-striped">
  <tr>
    <th class="text-center">No</th>
    <th class="text-center">Nama</th>
    <th class="text-center">Email</th>
    <th class="text-center">Alamat</th>
    <th class="text-center">Hobi</th>
    <th class="text-center">Action</th>
  </tr>

  <?php 
  $no = 1;
  $tampil = mysqli_query($con, "SELECT * FROM tb_crud");
  while($data = mysqli_fetch_array($tampil)):
  ?>

  <tr>
    <td class="text-center"><?=$no++ ?></td>
    <td class="text-center"><?=$data['Nama'] ?></td>
    <td class="text-center"><?=$data['Email'] ?></td>
    <td class="text-center"><?=$data['Alamat'] ?></td>
    <td class="text-center"><?=$data['Hobi'] ?></td>
    <td class="text-center">
    <a href="ubahdata.php?id=<?= $data['id']; ?>"><button class="btn btn-primary">Ubah</button></a>
    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?= $no ?>">Hapus
  </button>
    </a>
    </td>
  </tr>
  <?php endwhile ?>
</table>
</div>
<!-- table data end -->
</body>
</html>