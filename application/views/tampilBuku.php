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
     <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
  </head>
  <body class='main page'>
    <!-- Navbar -->
    
      
    
      <!-- Sidebar -->
      <section id='sidebar'>
        <i class='icon-align-justify icon-large' id='toggle'></i>
        <ul id='dock'>
          <li class='active launcher'>
            <i class='icon-dashboard'></i>
            <a href="dashboard.html">Dashboard</a>
          </li>
          <li class='launcher'>
            <i class='icon-file-text-alt'></i>
            <a href="<?php echo base_url('index.php/Buku')?>">Buku</a>
          </li>
          <li class='launcher'>
            <i class='icon-file-text-alt'></i>
            <a href="<?php echo base_url('index.php/Kategori/create')?>">Kategori</a>
          </li>
          <li class='launcher'>
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
          </li>
        </ul>
        <div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
      </section>
      <!-- Tools -->
      <section id='tools'>
        <ul class='breadcrumb' id='breadcrumb'>
          <li class='title'>Dashboard</li>
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
            Katalog!
            <div class='panel-tools'>
              <div class='btn-group'>
                <a class='btn' href='#'>
                  <i class='icon-refresh'></i>
                  Refresh statics
                </a>
                <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Toggle'>
                  <i class='icon-chevron-down'></i>
                </a>
              </div>
            </div>
          </div>
          <div class='panel-body'>
            <div class='page-header'>
              <div class="table-striped">
           <a class="btn btn-primary" href="<?php echo base_url('index.php/buku/create').$this->uri->segment('3')?>" >Tambah</a><br></div>

      <table class="table table-striped">
    <thead>
      <tr>
      <th class= "text-center">no</th>
      <th class= "text-center">judul</th>
      <th class= "text-center">pengarang</th>
      <th class= "text-center">penerbit</th>
      <th class= "text-center">tahun terbit</th>
      <th class= "text-center">id_kategori</th>
      <th class= "text-center">jumlah_halaman</th>
      <th class= "text-center">gambar</th>
      <th class= "text-center">sinopsis</th>
      <th class= "text-center">stok</th>
      <th class= "text-center">harga</th>
      <th class= "text-center">aksi</th>
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

  
        <td><a class="btn btn-success" a href="<?php echo base_url('index.php/buku/update/'.$key['id_buku']) ?>"> edit</a></td>
        <td><a class="btn btn-success" a href="<?php echo base_url('index.php/buku/delete/'.$key['id_buku']) ?>"> hapus</a></td>
      
    </tr>
      <?php $no++; endforeach?>
    </tbody>
  </table>
  
    </div>
             <!--  <h4>System usage</h4>
            </div>
            <div class='progress'>
              <div class='progress-bar progress-bar-success' style='width: 35%'></div>
              <div class='progress-bar progress-bar-warning' style='width: 20%'></div>
              <div class='progress-bar progress-bar-danger' style='width: 10%'></div>
            </div>
            <div class='page-header'>
              <h4>User statics</h4>
            </div>
            <div class='row text-center'>
              <div class='col-md-3'>
                <input class='knob second' data-bgcolor='#d4ecfd' data-fgcolor='#30a1ec' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='50'>
              </div>
              <div class='col-md-3'>
                <input class='knob second' data-bgcolor='#c4e9aa' data-fgcolor='#8ac368' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='75'>
              </div>
              <div class='col-md-3'>
                <input class='knob second' data-bgcolor='#cef3f5' data-fgcolor='#5ba0a3' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='35'>
              </div>
              <div class='col-md-3'>
                <input class='knob second' data-bgcolor='#f8d2e0' data-fgcolor='#b85e80' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='85'>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <!-- Javascripts -->
   
  </body>
</html>
