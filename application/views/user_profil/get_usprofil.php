
<?php 	foreach ($get_user_profil as $key) {?>
		

<div class="col-md">
          <!-- Widget: user widget style 1 -->
  <div class="box box-widget widget-user-2">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="box-footer no-padding">
			<div class="box-body">
				<strong><i class="fa fa-book margin-r-5"></i> Nama Vendor</strong>

				<p class="text-muted">
					<?php echo $key['nama']; ?>
				</p>

				<hr>

				<strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

				<p class="text-muted"><?php echo $key['alamat']; ?></p>

				<hr>

				<strong><i class="fa fa-file-text-o margin-r-5"></i> Deskripsi</strong>

				<p><?php echo $key['des']; ?></p>
			</div>
    </div>
  </div>
  <!-- /.widget-user -->
</div>
<table>
	<tr>
		<td>
			<a class="btn btn-block btn-primary" href="<?php echo site_url('user_profil/update_user_profil/'.$key['id_profil']); ?>">Edit</a>
		</td>
	</tr>
</table>


<?php } ?>
