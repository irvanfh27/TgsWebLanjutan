<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css">
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>
    <script type="text/javascript">
$(document).ready( function () {
    $('#example').DataTable();
} );
</script>
</head>

<body>
<div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">WEB02</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Review PHP <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PHP5 OOP <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Login</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
    <body>
<?php 
require_once 'class_mahasiswa.php';

    $mhs1 = new Mahasiswa ("02011", "Faiz Fikri");
    $mhs1->prodi = "TI";
    $mhs1->thn_angkatan=2012;
    $mhs1->ipk=3.8;

    $mhs2 = new Mahasiswa ("02012", "Alissa Khairunnisa");
    $mhs2->prodi = "TI";
    $mhs2->thn_angkatan=2012;
    $mhs2->ipk=3.9;

    $mhs3 = new Mahasiswa ( "01011", "Rosalie Naurah");
    $mhs3->prodi = "SI";
    $mhs3->thn_angkatan=2010;
    $mhs3->ipk=3.46;

    $mhs4 = new Mahasiswa ("01012", "Defgi Muhammad");
    $mhs4->prodi = "SI";
    $mhs4->thn_angkatan=2010;
    $mhs4->ipk=3.2;
  

$arr_mahasiswa = [$mhs1,$mhs2,$mhs3,$mhs4];

 ?>
<table width ="50%" border="1" id="example" class="display">
    <thead>
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama Lengkap</th>
        <th>Prodi</th>
        <th>Tahun Angkatan</th>
        <th>IPK</th>
        <th>Predikat</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $counter = 1;
    foreach ($arr_mahasiswa as $mhs){
        echo '<tr><td>'.$counter.'</td>'.
        '<td>'.$mhs->nim.'</td>'.
        '<td>'.$mhs->nama.'</td>'.
        '<td>'.$mhs->prodi.'</td>'.
        '<td>'.$mhs->thn_angkatan.'</td>'.
        '<td>'.$mhs->ipk.'</td>'.
        '<td>'.$mhs->predikat_ipk().'</td>'.
        '<td><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="padding-right:15%; color:blue;"></span><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="color:blue;"></span></td>';
        $counter++;
    }
    ?>
    
        </tbody>
    </table>
    <hr>
    <div>
      <p><b>Pemrograman Web Lanjutan</b><br>Irvan Fathul Huda<br>STT NF - 2017</p>
    </div>
</div>
</body>

</script>
</html>
