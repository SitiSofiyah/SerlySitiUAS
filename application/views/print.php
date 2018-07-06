<!DOCTYPE html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Dashboard</title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link href="<?php echo base_url()?>assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" />    
  </head>
  <body class='main page'>
            <center><h2>Dashboard Admin</h2></center>
          </div>
          <div class='panel-body'>
            <table class="table table-striped">
    <thead>
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
     <!--  <th class= "text-center">aksi</th> -->
    </thead>

    <tbody>
      <?php $no=1; foreach ($buku_list as $key) : ?>
        <tr>
        <td class= "text-center"><?php echo $no ?></td>
        <td class= "text-center"><?php echo $key['judul'] ?></td>
        <td class= "text-center"><?php echo $key['pengarang'] ?></td>
        <td class= "text-center"><?php echo $key['penerbit'] ?></td>
        <td class= "text-center"><?php echo $key['tahun_terbit'] ?></td>
        <td class= "text-center"><?php echo $key['kategori'] ?></td>
        <td class= "text-center"><?php echo $key['jumlah_halaman'] ?></td>
        <td class= "text-center"><?php echo $key['gambar'] ?></td>
        <td class= "text-center"><?php echo $key['sinopsis'] ?></td>
        <td class= "text-center"><?php echo $key['stok'] ?></td>
        <td class= "text-center"><?php echo $key['harga'] ?></td>

  <!-- 
        <td><a class="btn btn-success" a href="<?php echo base_url('index.php/buku/update/'.$key['id_buku']) ?>"> edit</a></td>
        <td><a class="btn btn-success" a href="<?php echo base_url('index.php/buku/delete/'.$key['id_buku']) ?>"> hapus</a></td>
       -->
    </tr>
      <?php $no++; endforeach?>
    </tbody>
  </table>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </body>
</html>
