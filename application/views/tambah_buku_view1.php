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
		<h1 class="text-center">tambah data buku</h1>

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
			
		</div>
		<!-- jQuery -->
		
		<!-- Bootstrap JavaScript -->
		
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>