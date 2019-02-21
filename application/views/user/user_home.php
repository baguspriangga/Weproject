

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>

      <small>Pencarian Data Kependudukan</small>
    </h1>
  </section>

<!-- Main content -->
  <section class="content">

    <div class="row">
        <!-- left column -->
      <div class="col-md-4">
        <!-- general form elements -->
        <div class="box box-success">
          
          <!-- form start -->
          <form role="form"  name="form_cari" action="<?php echo base_url(); ?>user" method="get">
            <div class="box-body">
            	<div class="form-group">
                <label for="exampleInputEmail1">Data NIK</label>
                <input type="text" class="form-control" placeholder="Input Data NIK" name="text_cari" value="<?php if(!empty($text_cari)) { echo $text_cari; } ?>">
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary" name="cari" value="cari">Cari Data</button>
            </div>
          </form>
        </div>
        <!-- /.box -->
        </div>
        <!--/.col (left) -->

        <!-- right column -->
        <div class="col-md-8">
          <!-- Horizontal Form -->
          <div class="box box-success">
                <!-- form start -->
            <form class="form-horizontal" name="form1" action="<?php echo base_url(); ?>user/cetak" method="post"  target="_blak" id="myForm" >
            	<div class="box-header">
            	
              </div>

              <div class="box-body">
                <div class="row">
                  <div class="col-sm-7">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">NIK</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  placeholder="Nomor Induk Kependudukan" name="nik" > 
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nama</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control"  placeholder="Nama" name="nama">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Tempat Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  placeholder="Tempat lahir" name="tempat_lahir">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Tanggal Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  placeholder="Tanggal lahir" name="tanggal_lahir">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jenis Kelamin</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  placeholder="Jenis Kelamin" name="jk">
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-sm-4 control-label">Golongan Darah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  placeholder="Golongan Darah" name="goldar">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Alamat</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control"  placeholder="Alamat" name="alamat">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Agama</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control"  placeholder="Agama" name="agama" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Status Perkawinan</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control"  placeholder="Status Perkawinan" name="status" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Pekerjaan</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control"  placeholder="Pekerjaan" name="pekerjaan" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Kewarga negaraan</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control"  placeholder="Kewarganegaraan" name="kewarganegaraan" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Masa Berlaku</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control"  placeholder="Masa Berlaku" name="masa_berlaku" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nama Ibu Kandung</label>

                      <div class="col-sm-8">
                        <input type="text" class="form-control"  placeholder="Nama Ibu Kandung" name="nama_ibu">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5">

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Foto</label>

                      <div class="col-sm-8">

                        <div class="info-box">
                          <span class="info-box bg-white">
                            <i class="">
                               <img src="<?php echo base_url();?>assets/AdminLTE/dist/img/user2-160x160.jpg" class="" alt="User Image">
                            </i>
                          </span>
                        </div>
                        <input type="hidden" class="form-control"  placeholder="Foto" name="foto">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Tanda Tangan</label>
                      <div class="col-sm-8">
                        <div class="info-box">
                          <span class="info-box bg-white"><i class=""></i></span>
                        </div>
                        <input type="hidden" class="form-control"  placeholder="Tanda Tangan" name="ttd">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Sidik Jari</label>
                      <div class="col-sm-8">
                        <div class="info-box">
                          <span class="info-box bg-white"><i class=""></i></span>
                        </div>
                        <input type="hidden" class="form-control"  placeholder="Sidik Jari" name="sidik_jari">
                      </div>
                    </div>   
                  </div>
                </div>
              </div>


              <!-- /.box-body -->
              <div class="box-footer">
              	
                <button type="submit" class="btn btn-default pull-right" name="cetak">Cetak</button>
                <button type="reset" class="btn btn-warning">Clear</button>
              </div>
              <!-- /.box-footer -->
            </form>
            
          </div>
        </div>
        <!--/.col (right) -->
    </div>
  </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
function myFunction() {
  document.getElementById("myForm").reset();
}
</script>