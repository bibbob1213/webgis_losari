<?php
  $title="Login"; 
  $url='edit_data';
  ?>
  


<?=content_open('Anda Harus Login Dulu..!')?>
    <form method="post" action="<?=url('login_proses')?>" >    
      <div class="form-group">
        <label>Username</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_text('username', '')?>
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
        <button type="submit" name="submit" class="btn btn-info" ><i class="fa fa-save"></i> Login</button>
      <a href="<?=url('beranda')?>" class="btn btn-danger" ><i class="fa fa-reply"></i> Kembali</a>
      </div>

    </form>
<?=content_close()?>
