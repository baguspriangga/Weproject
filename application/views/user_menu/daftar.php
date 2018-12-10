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

  <div class="modal-dialog-2 text-center">
    <div class="col-sm-8 col-lg-5 main-section-2">
      <div class="modal-content-2">
        
        <div class="col-12 user-judul pt-4">
          <h5>--- Mendaftar Sebagai Vendor ---</h5>
        </div>

<?php echo validation_errors(); ?>
<?php echo form_open('user_menu/daftar'); ?>


        <form action="" class="col-12 mt-5">
          <div class="form-group row text-left">
            <label for="" class="col-sm-3 col-form-label"><b>Nama Vendor</b></label>
            <div class="col-sm-9">
              <input type="" class="form-control" id="" placeholder="Masukan Nama Vendor" name="nama">
            </div>
          </div>
          <div class="form-group row text-left">
            <label for="" class="col-sm-3 col-form-label"><b>Kategori</b></label>
            <div class="col-sm-9">
              <select class="form-control" type="text" name="id_kategori">
                <option class="disable">--- Pilih Kategori Vendor ---</option>
                <?php foreach ($get_kategori as $key): ?>
                  <option value="<?php echo $key->id_kategori; ?>"><?php echo $key->kategori; ?></option>
                <?php endforeach ?>

              </select>
            </div>
          </div>
          <div class="form-group row text-left">
            <label for="" class="col-sm-3 col-form-label"><b>Username</b></label>
            <div class="col-sm-9">
              <input type="" class="form-control" id="" placeholder="Masukan Username" name="user_name">
            </div>
          </div>
          <div class="form-group row text-left">
            <label for="" class="col-sm-3 col-form-label"><b>No Telepon</b></label>
            <div class="col-sm-9">
              <input type="" class="form-control" id="" placeholder="Masukan No Telepon" name="no_tlp">
            </div>
          </div>
          <div class="form-group row text-left">
            <label for="" class="col-sm-3 col-form-label"><b>E-mail</b></label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="" placeholder="Masukan E-mail" name="user_email">
            </div>
          </div>
          <div class="form-group row text-left">
            <label for="" class="col-sm-3 col-form-label"><b>Password</b></label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="" placeholder="Masukan Password" name="user_password">
            </div>
          </div>
          <button class="btn mt-1 mb-2" type="submit" name="submit"><i class="fas fa-sign-in-alt"></i> Daftar</button>
        </form>
<?php echo form_close(); ?>

        <div class="col-12 forgot mt-3 pb-3">
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