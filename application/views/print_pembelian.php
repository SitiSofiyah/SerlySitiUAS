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
      <th class= "text-center">detail</th>
      <th class= "text-center">judul buku</th>
      <th class= "text-center">nama user</th>
      <th class= "text-center">tanggal beli</th>
      <th class= "text-center">jumlah</th>
      <th class= "text-center">status</th>
       <th class= "text-center">aksi</th>
     <!--  <th class= "text-center">aksi</th> -->
    </thead>

    <tbody>
      <?php $no=1; foreach ($pembelian_list as $key) : ?>
        <tr>
       <td class= "text-center"><?php echo $key['judul'] ?></td>
        <td class= "text-center"><?php echo $key['judul'] ?></td>
        <td class= "text-center"><?php echo $key['username'] ?></td>
        <td class= "text-center"><?php echo $key['tgl_beli'] ?></td>
        <td class= "text-center"><?php echo $key['jumlah'] ?></td>
        <td class= "text-center"><?php echo $key['status'] ?></td>

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
