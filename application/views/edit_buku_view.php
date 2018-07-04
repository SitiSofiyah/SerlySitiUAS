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
		<h1 class="text-center">Hello World</h1>

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