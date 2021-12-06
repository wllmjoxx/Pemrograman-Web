<?php

use App\Controllers\Admin\Users;
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

<div class="container">
 
    <h2>Input Data User</h2>
    <div class="row mb-2">
        <div class="col-sm-12">    
            <span class="m-1">                
            <a href="viewall.php" class="btn btn-info" role="button">Kembali</a>
            </span>
        </div> 
    </div>  
    <form action="<?= base_url('admin/Users/simpan') ?>" method="post">        
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nama Depan</th>
            <th><input type="text" class="form-control" name="namadepan"></th>       
        </tr>
        </thead>
        <thead>
        <tr>
            <th>Nama Belakang</th>
            <th><input type="text" class="form-control" name="namabelakang"></th>       
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Email</td>        
            <td><input type="text" class="form-control" name="email"></td>       
        </tr>
        </tbody>
        <tbody>
        <tr>
            <td>Password</td>        
            <td><input type="password" class="form-control" name="password"></td>       
        </tr>
        </tbody>
        <tbody>
        <tr>
            <td>Konfirmasi Password</td>        
            <td><input type="password" class="form-control" name="konfirmasipassword"></td>       
        </tr>
        </tbody>
    </table>
    <div class="row mb-2">
        <div class="col-sm-12">    
            <span class="m-1">                
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
            </span>
        </div> 
    </div>
  </form>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>
</html>
