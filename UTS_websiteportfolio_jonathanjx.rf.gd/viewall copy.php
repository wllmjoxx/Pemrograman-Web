<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<?php include_once "menu.php"; ?>
<div class="gotoindex">
  <button type="button" class="btn btn-danger">
      <a href="index.php" style="color: lavender;">Go to index</a>
    </div>

<div class="container">
  <h2>Biodata Mahasiswa</h2>
  <div class="row mb-2">
  <div class="col-sm-12">    
    <span class="m-1">
        <a href="tambah.php" class="btn btn-info">Tambah Data</a>
    </span>
  </div> 
</div>          
  <table id="example" class="table table-striped">
    <thead>
      <tr>
        <th>NIM</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Gambar</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <h1><?php echo "Daftar"?></h1>
<?php
$strSQL = "SELECT * FROM mahasiswa"; //atau bisa juga SELECT nim, namadepan, namabelakang, email FROM mahasiswa
$execStrSQL = mysqli_query($conn,$strSQL);


if (mysqli_num_rows($execStrSQL) > 0) :
  while ($row = mysqli_fetch_assoc($execStrSQL)) :
?>

      <tr>
        <td><a href="view.php?nim=<?php echo $row["nim"] ?>"><?php echo $row["nim"] ?></a></td>
        <td><?= $row["namadepan"] ?></td>
        <td><?php echo $row["namabelakang"] ?></td>
        <td><img src="img/<?php echo $row["image"]?>" width="200px"></td>
        <td><?= $row["email"] ?></td>
        <td>
          <button type="button" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-danger">Hapus</button>
      </button>
        </td>
      </tr>
<?php
endwhile;
endif;
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
  </script>
</body>
</html>
