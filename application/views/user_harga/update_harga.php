<?php echo validation_errors(); ?>
<?php echo form_open('user_harga/update_user_harga/'.$update_user_harga['id_harga']); ?>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
           
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea name="harga" id="editor1" rows="10" cols="80">
                     <?php echo $update_user_harga['harga']; ?>
                </textarea>
                <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace( 'editor1' );
                </script>
              </form>
                    <br>
                    <table>
                      <tr>
                        <td> <button type="submit" name="submit" value="simpan" class="btn btn-block btn-primary">Update</button></td>
                      </tr>
                    </table>
                   
            </div>
          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
<?php echo form_close(); ?>

