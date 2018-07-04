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
           <!-- <a class="btn btn-primary" href="<?php echo 'http://localhost:81/SerlySitiUAS/index.php/buku/create/'.$this->uri->segment('3')?>" >Tambah</a><br></div> -->
	<body>
		<h1 class="text-center">Update Data Buku</h1>

		<div class="col-xs-12 col col-sm-12 col-md-12 col-lg-12">
			<?php echo form_open('buku/update/'.$this->uri->segment(3)); ?>
			<?php echo validation_errors(); ?>
				<label for="">Judul Buku</label>
				<input type="text" class="form-control" id="judul" name="judul" placeholder="Input field" value="<?php echo $buku[0]->judul ?>">
				<label for="">Pengarang</label>
				<input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Input field" value="<?php echo $buku[0]->pengarang ?>">
				<label for="">Penerbit</label>
				<input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Input field" value="<?php echo $buku[0]->penerbit ?>">
				<label for="">tahun terbit</label>
				<input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Input field" value="<?php echo $buku[0]->tahun_terbit ?>">
				<label for="">Jumlah Halaman</label>
				<input type="text" class="form-control" id="jumlah_halaman" name="jumlah_halaman" placeholder="Input field" value="<?php echo $buku[0]->jumlah_halaman ?>">
				<label for="">Sinopsis</label>
				<input type="text" class="form-control" id="sinopsis" name="sinopsis" placeholder="Input field" value="<?php echo $buku[0]->sinopsis ?>">
				<label for="">Stok</label>
				<input type="text" class="form-control" id="stok" name="stok" placeholder="Input field" value="<?php echo $buku[0]->stok ?>">
				<label for="">Harga</label>
				<input type="text" class="form-control" id="harga" name="harga" placeholder="Input field" value="<?php echo $buku[0]->harga ?>">
		
			<button type="submit" class="btn btn-primary">Submit</button>
			<?php echo form_close(); ?>
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>