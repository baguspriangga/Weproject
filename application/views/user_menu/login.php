<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- favicon -->
  <link rel="icon" type="image/png" href="img/weddinghits-title.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/menu_user/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/menu_user/css/asfah_login.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/menu_user/css/asfah_style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/menu_user/font-awesome/css/all.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/menu_user/font-awesome/css/solid.css">

  <title>WEDDINGHITS</title>
</head>
<body>

  <div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
      <div class="modal-content">
        
        <div class="col-12 user-img">
          <i class="fas fa-user-circle fa-8x rounded-circle"></i>
        </div>

        <form class="col-12" action="<?php echo site_url('login/auth');?>" method="post">
          <div class="form-group row text-left">
            <?php echo $this->session->flashdata('msg');?>
            <label for="" class="col-sm-2 col-form-label"><i class="fas fa-user"></i></label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="" placeholder="Masukan E-mail" name="email" required autofocus>
            </div>
          </div>
           <div class="form-group row text-left">
            <label for="" class="col-sm-2 col-form-label"><i class="fas fa-lock"></i></label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="" placeholder="Masukan Password" name="password" required>
            </div>
          </div>
          <div class="col-12 forgot mb-3">
            <a href="">Lupa Password ?</a>
          </div>
          <button class="btn btn-xl mb-5" type="submit"><i class="fas fa-sign-in-alt"></i> Login</button>
        </form>

        <div class="col-12 forgot mb-3">
          <a class="text-pink" href="daftar.html">Mendaftar Sebagai Vendor ?</a>
        </div>
        <div class="col-12 forgot mb-3">
          <a class="text-pink" href="index.html">Kembali ke Beranda</a>
        </div>

        

      </div> <!-- end modal -->
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?php echo base_url();?>assets/menu_user/js/jquery-3.3.1.slim.min.js"></script>
  <script src="<?php echo base_url();?>assets/menu_user/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/menu_user/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/menu_user/js/asfah_script.js"></script>
  <script src="<?php echo base_url();?>assets/menu_user/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/menu_user/js/jquery.easing.1.3.js"></script>

</body>
</html>