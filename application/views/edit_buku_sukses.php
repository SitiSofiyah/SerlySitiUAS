<!DOCTYPE html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Data Buku</title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link href="<?php echo base_url()?>assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
  </head>
  <body class='main page'>
    <!-- Navbar -->
    
      
    
      <!-- Sidebar -->
      <section id='sidebar'>
        <i class='icon-align-justify icon-large' id='toggle'></i>
        <ul id='dock'>
          <li class='launcher'>
            <i class='icon-dashboard'></i>
            <a href="<?php echo base_url('index.php/buku')?>">Dashboard</a>
          </li>
          <li class='active launcher'>
            <i class='icon-file-text-alt'></i>
            <a href="<?php echo base_url('index.php/buku/bukuView')?>">Buku</a>
          </li>
          <li class='launcher'>
            <i class='icon-file-text-alt'></i>
            <a href="<?php echo base_url('index.php/kategori/tampilKategori')?>">Kategori</a>
          </li>
          <!-- <li class='launcher'>
            <i class='icon-table'></i>
            <a href="tables.html">Tables</a>
          </li>
          <li class='launcher dropdown hover'>
            <i class='icon-flag'></i>
            <a href='#'>Reports</a>
            <ul class='dropdown-menu'>
              <li class='dropdown-header'>Launcher description</li>
              <li>
                <a href='#'>Action</a>
              </li>
              <li>
                <a href='#'>Another action</a>
              </li>
              <li>
                <a href='#'>Something else here</a>
              </li>
            </ul>
          </li>
          <li class='launcher'>
            <i class='icon-bookmark'></i>
            <a href='#'>Bookmarks</a>
          </li>
          <li class='launcher'>
            <i class='icon-cloud'></i>
            <a href='#'>Backup</a>
          </li>
          <li class='launcher'>
            <i class='icon-bug'></i>
            <a href='#'>Feedback</a>
          </li> -->
        </ul>
        <div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
      </section>
      <!-- Tools -->
      <section id='tools'>
        <ul class='breadcrumb' id='breadcrumb'>
          <li class='title'>Pengelolaan Data Buku</li>
          <!-- <li><a href="#">Lorem</a></li>
          <li class='active'><a href="#">ipsum</a></li> -->
        </ul>
       
          <div class='label label-danger'>
            Danger
          </div>
          <div class='label label-info'>
            Info
          </div>
        </div>
      </section>
      <!-- Content -->
      <div id='content'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-beer icon-large'></i>
          DashBoard
          </div>
          <div class='panel-body'>
            <div class='page-header'>
              <div class='panel-heading'>
            <i class='icon-table icon-large'></i>
            Dashboard Admin
          </div>
          <div class='panel-body'>
            <table class="table table-striped">

              <div class="container">
      <div class="panel-heading">
        <div class="table-striped">
           <a class="btn btn-primary" href="<?php echo 'http://localhost:81/SerlySitiUAS/index.php/buku/create/'.$this->uri->segment('3')?>" >Tambah</a><br></div>

           <?php
			echo "Sukses Simpan Data";
			echo anchor ('buku/', 'Masukkan Data Lagi');
			?>
   <!--  <thead>
      <tr>
      <th class= "text-center">no</th>
      <th class= "text-center">judul Buku</th>
      <th class= "text-center">Pengarang</th>
      <th class= "text-center">Penerbit</th>
      <th class= "text-center">tahun terbit</th>
      <th class= "text-center">id_kategori</th>
      <th class= "text-center">jumlah Halaman</th>
      <th class= "text-center">gambar</th>
      <th class= "text-center">sinopsis</th>
      <th class= "text-center">stok</th>
      <th class= "text-center">harga</th>
      <th class= "text-center">aksi</th>
    </thead> -->

    <!-- <body> -->
    <!-- <h1 class="text-center">tambah data buku</h1>

    <div class="col-xs-12 col col-sm-12 col-md-12 col-lg-12">
      <?php echo form_open_multipart('buku/create/'.$this->uri->segment(3)); ?>
      <?php echo validation_errors(); ?>
      <div class="form-group">
        <label for="">Judul Buku</label>
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Input field">
        <label for="">Pengarang</label>
        <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Input field">
        <label for="">Penerbit</label>
        <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Input field">
        <label for="">kategori</label><br>
        <select name="kategori" class="form-control">
          <option selected="selected">---</option>
          <?php  foreach ($kategori as $key) : ?>
          <option value="<?php echo $key['id_kategori'] ?>"><?php echo $key['kategori'] ?></option>
           <?php  endforeach ?>
        </select><br>
        <label for="">tahun terbit</label>  
        <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Input field">
        <label for="">Jumlah Halaman</label>
        <input type="text" class="form-control" id="jumlah_halaman" name="jumlah_halaman" placeholder="Input field">
        <label for="">Sinopsis</label>
        <input type="text" class="form-control" id="sinopsis" name="sinopsis" placeholder="Input field">
        <label for="">Stok</label>
        <input type="text" class="form-control" id="stok" name="stok" placeholder="Input field">
        <label for="">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga" placeholder="Input field">
        <label for="">Gambar</label>
        <input type="file" id="userfile" name="userfile" placeholder="Input field">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>

      <?php echo form_close(); ?>
      
    </div> -->
    <!-- jQuery -->
    
    <!-- Bootstrap JavaScript -->
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Hello World"></script>
  </body>
  </html>
