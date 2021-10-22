<?php
include "koneksi.php";
include "fungsi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>

<?php include_once "menu.php"; ?>

<div class="container">
  <h2>Detail Biodata Mahasiswa</h2>
  <div class="row mb-2">
    <div class="col-sm-12">    
        <span class="m-1">
          <a href="viewall copy.php" class="btn btn-info" role="button">Kembali</a>
        </span>
    </div> 
    </div>          
  <table class="table table-striped">
    <?php 

    if (isset($_GET['nim'])){
      $nim = bersihkan_input($_GET['nim']);
    }
    $review = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nim = '$nim'");
    if (mysqli_num_rows($review) > 0):
      while ($rows = mysqli_fetch_assoc($review)):
    
    ?>
      <tr>
        <th><?php echo "NIM"?></th>  
        <th><?php echo "Nama"?></th>
        <th><?php echo "Email"?></th>     
        <th><?php echo "Gambar"?></th>  
      </tr>
      <tr>
        <td><?= $rows["nim"]?></td> 
        <td><?= $rows["namadepan"]." ".$rows["namabelakang"]?></td>        
        <td><?= $rows["email"]?></td> 
        <td><img src="img/<?= $rows["image"]?>" width="200px"></td>  
      </tr>
  </table>
    </div>
<?php
endwhile;
endif;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>
</html>
