<!DOCTYPE html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Online BookStore</title>
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
             <a href="<?php echo base_url('index.php/user')?>">Dashboard</a>
          </li>
          <li class='active launcher'>
            <i class='icon-file-text-alt'></i>
           <a href="<?php echo base_url('index.php/user/datatable')?>">Buku</a>
          </li>
          <li class='launcher'>
            <i class='icon-table'></i>
            <a href="tables.html">Kategori</a>
          </li>
          <li class='launcher dropdown hover'>
             <a href='<?php echo base_url('index.php/login/logout')?>'><i class='icon-flag'></i>
           Logout</a>
            <!-- <ul class='dropdown-menu'>
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
          </li>
        </ul> -->
        <div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
      </section>
      <!-- Tools -->
      <section id='tools'>
        <ul class='breadcrumb' id='breadcrumb'>
          <li class='title'>Tables</li>
          <li><a href="#">Lorem</a></li>
          <li class='active'><a href="#">ipsum</a></li>
        </ul>
        
      </section>
      <!-- Content -->
      <div id='content'>
        <div class='panel panel-default grid'>
          <div class='panel-heading'>
            <i class='icon-table icon-large'></i>
            Data Buku
           
               
          </div>
          
          <table class='table'>
           <tbody>
           
             
                <?php
          foreach ($buku_list as $row) {
            echo " <tr><td width='120'>";
            echo "<img src='".base_url('assets/uploads/').$row['gambar']."'width='200px;'>";
            echo '</td><td>';
            echo "<font face='calibri' size='3'>Judul : ".$row['judul']."<br>";
            echo "Pengarang : ".$row['pengarang']."<br>";
            echo "Sinopsis : ".$row['sinopsis']."<br>";
            echo "Penerbit : ".$row['penerbit']."<br>";
            echo "Tahun terbit : ".$row['tahun_terbit']."<br>";
            echo "Jumlah Halaman : ".$row['jumlah_halaman']."<br>";
            echo "Stok : ".$row['stok']."<br>";
            echo "Harga : ".$row['harga']."<br>";
             echo "<a href='".base_url('index.php/Buku/'.$row['id_buku'])."' class='btn btn-success'>Beli</a>";
            echo '</font></td><td></tr>';

           
          }



          ?>
              
              
          
          </div>
        </div>
       
  </body>
</html>
