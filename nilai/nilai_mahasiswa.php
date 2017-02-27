<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
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

    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset>

<!-- Form Name -->
<legend>Form Nilai Ujian</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nim">NIM</label>
  <div class="col-md-4">
  <input id="nim" name="nim" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="matakuliah">Pilih MK</label>
  <div class="col-md-4">
    <select id="matakuliah" name="matakuliah" class="form-control">
      <option value="Data Warehouse">Data Warehouse</option>
      <option value="Pemrograman Web Lanjut">Pemrograman Web Lanjut</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai">Nilai</label>
  <div class="col-md-4">
  <input id="nilai" name="nilai" type="text" placeholder="" class="form-control input-md">

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="simpan"></label>
  <div class="col-md-4">
    <button id="simpan" name="simpan" class="btn btn-success">Simpan</button>
  </div>
</div>

</fieldset>
</form>

<?php
require_once 'class_nilaimahasiswa.php'; 
error_reporting(E_ALL & ~E_NOTICE);

$mahasiswa = new NilaiMahasiswa($_POST['nim'], $_POST['matakuliah'], $_POST['nilai']);
if(isset($_POST["simpan"])){
  echo "<hr>";
  echo "NIM :" .$nim = $_POST['nim'];
  echo "<br/>Mata Kuliah :" .$matakuliah = $_POST['matakuliah'];
  echo "<br/>Nilai :" .$nilai = $_POST['nilai'];
  echo "<br/>Hasil Ujian :" .$mahasiswa->grade();
  echo "<br/>Grade :" .$mahasiswa->hasil();
}
 ?>

    <hr>
    <div class="">
      <p><b>Lab Pemrograman Web Lanjutan</b><br>Irvan Fathul Huda<br>STT NF - 2017</p>
    </div>
</div>
</body>

</html>
