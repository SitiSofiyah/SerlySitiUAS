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
            <a href="<?php echo base_url('index.php/user')?>">Dashboard</a>
          </li>
          <li class='launcher'>
            <i class='icon-file-text-alt'></i>
            <a href="<?php echo base_url('index.php/user/datatable')?>">Buku</a>
          </li>
          <li class='launcher'>
            <i class='icon-file-text-alt'></i>
            <a href="<?php echo base_url('index.php/user/pembelian')?>">Pembelian</a>
          </li>
          <li class='launcher'>
            <i class='icon-table'></i>
            <a href="<?php echo base_url('index.php/user/profil')?>">Profil</a>
          </li>
          <li class='launcher dropdown hover'>
            <i class='icon-flag'></i>
            <a href='<?php echo base_url('index.php/login/logout')?>'>Logout</a>
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
         
        </ul>
       
         
          </section>
      <!-- Content -->
      <div id='content'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-beer icon-large'></i>
           Form Pembelian Buku
            
          </div>
          <div class='panel-body'>
          
            <div class="col-xs-12 col col-sm-12 col-md-12 col-lg-12">
      <?php echo form_open('pembelian/prosesbeli/'.$this->uri->segment(3)); ?>
      <?php echo validation_errors(); ?>
      <div class="form-group">
        <label for="">Judul Buku</label>
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Input field" value="<?php echo $buku->judul ?>" disabled>
         <input type="hidden" class="form-control" id="hrg" name="hrg" placeholder="Input field" value="<?php echo $buku->harga ?>" disabled>
          <input type="hidden" class="form-control" id="stk" name="stk" placeholder="Input field" value="<?php echo $buku->stok ?>" disabled>
          <input type="hidden" class="form-control" id="stok" name="stok" placeholder="Input field">
       
        <label for="">Jumlah beli</label><br>
        <select name="jml" class="form-control" id="jml" onchange="changeValue(this.value)">
          <option>pilih jumlah</option>
          <?php for($a=1;$a<=$buku->stok;$a++) { ?>
          <option value="<?php echo $a ?>"><?php echo $a ?></option>
          <?php } ?>
        </select><br>
        <label for="">Total Harga</label>  
        <input type="text" class="form-control" id="harga" name="harga" placeholder="Input field" >
     
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    <script type="text/javascript">   
    function changeValue(jml){ 
    document.getElementById('harga').value = document.getElementById('jml').value*document.getElementById('hrg').value;
    document.getElementById('stok').value = document.getElementById('stk').value-document.getElementById('jml').value;
    
    }; 
    </script> 
      <?php echo form_close(); ?>
      
      
    </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <!-- Javascripts -->
   
  </body>
</html>
