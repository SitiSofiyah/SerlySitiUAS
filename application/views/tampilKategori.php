<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Halaman Kategori</h1>

		<div class="container">
      <div class="panel-heading">
        <div class="table-striped">
           <a class="btn btn-primary" href="<?php echo 'http://localhost:81/SerlySitiUAS/index.php/kategori/create/'.$this->uri->segment('3')?>" >Tambah</a><br></div>

      <table class="table table-striped">
    <thead>
      <tr>
      <th class= "text-center">no</th>
      <th class= "text-center">Nama Kategori</th>
      <th class= "text-center">aksi</th>
    </thead>

    <tbody>
      <?php $no=1; foreach ($Kategori as $key) : ?>
        <tr>
        <td class= "text-center"><?php echo $no ?></td>
        <td class= "text-center"><?php echo $key['kategori'] ?></td>
  
        <td><a class="btn btn-success" a href="<?php echo base_url('index.php/kategori/update/'.$key['id_kategori']) ?>"> edit</a></td>
        <td><a class="btn btn-success" a href="<?php echo base_url('index.php/kategori/delete/'.$key['id_kategori']) ?>"> hapus</a></td>
      
    </tr>
      <?php $no++; endforeach?>
    </tbody>
  </table>
  
    </div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>