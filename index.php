<?php 
 include '_loader.php'; 
 if(isset($_GET['halaman'])){
    $halaman=$_GET['halaman'];
  }
  else{
    $halaman='beranda';
  }
  ob_start();
  $file='_halaman/'.$halaman.'.php';
  if(!file_exists($file)){
    include '_halaman/error.php';
  }
  else{
    include $file;
  }
  $content = ob_get_contents();
  ob_end_clean();
  
?>

<!DOCTYPE html>
<html lang="en">
<?php include '_layouts/head.php'?>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
<?php
  include '_layouts/header.php';
  include '_layouts/sidebar.php';
  ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$title ?></h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <?php
  echo $content;
  ?>
   <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include '_layouts/footer.php';
  include '_layouts/js.php';

   if(isset($filejs)){
    include '_halaman/js/'.$filejs.'.php'; 
  }
?> 

</div>
</body>
</html>
 