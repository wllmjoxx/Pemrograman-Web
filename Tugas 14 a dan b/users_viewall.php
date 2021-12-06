<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
</head>
<body>

<?php include_once "menu.php"; ?>

<div class="container">
  <h2>List User</h2>
  <div class="row mb-2">
  <div class="col-sm-12">    
    <span class="m-1">
      <button type="button" class="btn btn-primary">
        Tambah Data
      </button>
    </span>
  </div> 
</div>          
  <table id="example" class="table table-striped">
    <thead>
      <tr>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a href="view.php">John</a></td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>
          <button type="button" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>
          <button type="button" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>
          <button type="button" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

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
