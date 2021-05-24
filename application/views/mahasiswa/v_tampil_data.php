<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style1.css")?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Biodata Mahasiswa</title>
  </head>
  <body>
    <h1 class=text-center>Biodata Mahasiswa</h1>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <div class="filter"></div>
    
    <table style="margin-top:50px;">
    <?php
        if(!$this->session->flashdata('Info') == ''){
            echo $this->session->flashdata('Info');

        }
        ?>
 
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">NIM </th>
      <th scope="col">Major</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Age</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>


  <tbody>
    <?php 
      $no=1;
      foreach ($biodata as $row) :?>
      <tr>
      <td scope="row"><?= $no++; ?></td>
      <td><?= $row->Name ?></td>
      <td><?= $row->NIM ?></td>
      <td><?= $row->Major ?></td>
      <td><?= $row->Birth ?></td>
      <td><?= $row->Gender ?></td>
      <td><?= $row->Age ?></td>
      <td><?= $row->Address ?></td> 
      <td><a href="<?php echo base_url('Biodata/edit/'.$row->id_mahasiswa.'')?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
      <a href="<?php echo base_url('Biodata/hapus/'.$row->id_mahasiswa.'')?>" class="hapus" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td> 


    </tr>
    <?php endforeach ?>
  </tbody>
</table>


  </body>
</html>
