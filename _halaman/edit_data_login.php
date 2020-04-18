<?php
  $title="Edit Data "; 
  $url='edit_data';
      
    
if(isset($_POST['simpan'])){

  include 'koneksi.php';
  $id_desa=  $_POST['id_desa'];
  $nama_desa = $_POST['nama_desa'];
  $lahan_sawah = $_POST['lahan_sawah'];
  $lahan_nonsawah = $_POST['lahan_nonsawah'];
  $bangunan = $_POST['bangunan'];
  $kebun=$_POST['kebun'];
  $hutan_negara=$_POST['hutan_negara'];
  $tambak=$_POST['tambak'];
  $mdpl=$_POST['mdpl'];
  $luas= $_POST['luas'];

  mysqli_query($connection,"UPDATE desa set nama_desa='$nama_desa', lahan_sawah='$lahan_sawah', lahan_nonsawah='$lahan_nonsawah', luas='$luas', bangunan='$bangunan', kebun='$kebun', hutan_negara='$hutan_negara', tambak='$tambak', mdpl='$mdpl' where id_desa='$id_desa'");
  ?>
  <script type="text/javascript">
    window.alert("Sukses Diubah");
    window.location.href(<?url('edit_data')?>);
  </script>

  <?php

}

if(isset($_GET['hapus'])){
      include 'koneksi.php';
      $id_desa = $_GET['id'];
      mysqli_query($connection,"DELETE from desa where id_desa='$id_desa'");
}

if(isset($_POST['login'])){
   $user=  $_POST['user'];
   $password = $_POST['password'];
    if ($user='admin') {
      # code...
   
   ?>
  <?=content_open('Edit Data Desa ')?><!-- Judul Konten -->
          <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                       <?php
                        include "koneksi.php";
                        $query = mysqli_query($connection,"SELECT * FROM desa ORDER BY id_desa ");
                        ?>
                    <thead>
                    <tr>
                      <th>Nama Desa</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php if(mysqli_num_rows($query)>0){ ?>
                                <?php
                                   
                                    while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    
                                    <td><?php echo $data["nama_desa"];?></td>
                                  
                                    <td>
                                       
                                      <a href="<?=url($url.'&ubah&id='.$data['id_desa'])?>" class="btn btn-info"><i class="fa fa-edit"></i> Ubah</a>

                                      <a href="<?=url($url.'&hapus&id='.$data['id_desa'])?>" class="btn btn-danger" onclick="return confirm('Hapus data?')"><i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>
                                <?php  } ?>
                                <?php } ?>
                              </tbody>
                            </table>
                          </div>
 <?=content_close() ?>

<?php } 

 }


else if(isset($_GET['ubah']) AND isset($_GET['id'])) {
  $id=$_GET['id'];
  include "koneksi.php";
  $data = mysqli_query($connection,"SELECT * from desa where id_desa='$id'");
  while($d = mysqli_fetch_array($data)){
  $id_desa=  $d['id_desa'];
  $nama_desa= $d['nama_desa'];
  $lahan_sawah= $d['lahan_sawah'];
  $lahan_nonsawah=$d['lahan_nonsawah'];
  $bangunan=$d['bangunan'];
  $kebun=$d['kebun'];
  $hutan_negara=$d['hutan_negara'];
  $tambak=$d['tambak'];
  $mdpl=$d['mdpl'];
  $luas=$d['luas'];
  }
?> 


<?=content_open('Form Edit Desa')?>
    <form method="post" enctype="multipart/form-data">
      <?=input_hidden('id_desa',$id_desa)?>
    
      <div class="form-group">
        <label>Nama Desa</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_text('nama_desa', $nama_desa)?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Luas Wilayah</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_number('luas', $luas)?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Lahan Sawah</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_number('lahan_sawah',  $lahan_sawah)?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Lahan Bukan Sawah</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_number('lahan_nonsawah', $lahan_nonsawah)?>
          </div>
        </div>
      </div>

        <div class="form-group">
        <label>Luas Bangunan/Pekarangan</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_number('bangunan',  $bangunan)?>
          </div>
        </div>
      </div>

        <div class="form-group">
        <label>Luas Kebun</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_number('kebun',  $kebun)?>
          </div>
        </div>
      </div>

        <div class="form-group">
        <label>Luas Hutan Negara</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_number('hutan_negara', $hutan_negara)?>
          </div>
        </div>
      </div>

       <div class="form-group">
        <label>Luas Tambak</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_number('tambak',  $tambak)?>
          </div>
        </div>
      </div>

       <div class="form-group">
        <label>Ketinggian Dari Permukaan Laut</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_number('mdpl',$mdpl)?>
          </div>
        </div>
      </div>
      
      <div class="form-group">
        <button type="submit" name="simpan" id= 1 class="btn btn-info" href="<?=url($url)?>"><i class="fa fa-save"></i> Simpan</button>
      <a href="<?=url($url)?>" class="btn btn-danger" ><i class="fa fa-reply"></i> Kembali</a>
      </div>

    </form>
<?=content_close()?>

 <?php } else {?>
 <?=content_open('Anda Harus Login Dulu..!')?>
    <form method="post" enctype="multipart/form-data">    
      <div class="form-group">
        <label>Username</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_text('user', '')?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Password</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_password('password', '')?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <button type="submit" name="login" class="btn btn-info" href="<?=url($url)?>"><i class="fa fa-save"></i> Login</button>
      <a href="<?=url('beranda')?>" class="btn btn-danger" ><i class="fa fa-reply"></i> Kembali</a>
      </div>

    </form>
<?=content_close()?>

 <?php } ?>