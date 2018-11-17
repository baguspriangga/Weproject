<?php foreach ($get_user_harga as $key): ?>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
           
            <!-- /.box-header -->
            <div class="box-body pad">
              <div class="timeline-body">    
                  
                  <?php echo $key['harga']; ?>
                
              </div>
            </div>
          </div>
          <table>
              <tr>
                <td>
                  <a class="btn btn-block btn-primary" href="<?php echo site_url('user_harga/update_user_harga/'.$key['id_harga']); ?>">Edit</a>
                </td>
              </tr>
            </table>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
<?php endforeach ?>