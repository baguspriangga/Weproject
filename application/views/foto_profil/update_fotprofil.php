
<div class="col-md">
          <!-- Widget: user widget style 1 -->
  <div class="box box-widget widget-user-2">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-light-blue">
        <div class="widget-user-image">
          <img class="img-circle" src="<?php echo base_url("images/".$update_gambar['nama_file']);?>" alt="User Avatar">
        </div>

      <!-- /.widget-user-image -->
      <h3 class="widget-user-username"> </h3>

      <h5 class="widget-user-desc">

        <div class="form-group">
          <label for="exampleInputFile">Ganti Foto Profi</label>
          <?php echo $error;?>

          <?php echo form_open_multipart('foto_profil/do_upload_update/'.$update_gambar['id']);?>

          <input type="file" name="userfile" size="20" />

          <br />
          <table>
            <tr>
              <td><button type="submit" value="upload" class="btn btn-block btn-default">Upload</button></td>
            </tr>
          </table>
          

          </form>
          
        </div>
      </h5>
    </div>
    
  </div>

  <!-- /.widget-user -->
</div>

		