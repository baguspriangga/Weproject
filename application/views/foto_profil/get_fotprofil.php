


<div class="col-md">
          <!-- Widget: user widget style 1 -->
  <div class="box box-widget widget-user-2">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-light-blue">
      <?php foreach ($get_gambar as $key){ ?>
        <div class="widget-user-image">
          <img class="img-circle" src="<?php echo base_url("images/".$key['nama_file']);?>" alt="User Avatar">
        </div>

      <!-- /.widget-user-image -->
      <h3 class="widget-user-username"> </h3>

      <h5 class="widget-user-desc">

        <div class="form-group">
          <label for="exampleInputFile">Ganti Foto Profi</label>
          <table>
            <tr>
              <td><a href="<?php echo site_url('foto_profil/do_upload_update/'.$key['id']); ?>" class="btn btn-default" role="button">Ganti</a></td>

            </tr>
          </table>
          
        </div>
      </h5>
      <?php } ?>
    </div>
    
  </div>

  <!-- /.widget-user -->
</div>
