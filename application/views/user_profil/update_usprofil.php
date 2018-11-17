<?php echo validation_errors(); ?>
<?php echo form_open('user_profil/update_user_profil/'.$update_user_profil['id_profil']); ?>

	<div class="col-md">
          <!-- Widget: user widget style 1 -->
	  	<div class="box box-widget widget-user-2">
	    <!-- Add the bg color to the header using any of the bg-* classes -->
		    <div class="box-footer no-padding">
				<div class="box-body">
					<strong><i class="fa fa-book margin-r-5"></i> Nama Vendor</strong>

					<input class="form-control input-l" type="text" placeholder="Nama Vendor" name="nama" value='<?php echo $update_user_profil['nama']; ?>'>

					<hr>

					<strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

					<input class="form-control input-l" type="text" placeholder="Alamat" name="alamat" value='<?php echo $update_user_profil['alamat']; ?>'>

					<hr>

					<strong><i class="fa fa-file-text-o margin-r-5"></i> Deskripsi</strong>

					<input class="form-control input-l" type="text" placeholder="Deskripsi" name="des" value="<?php echo $update_user_profil['des']; ?>">
				</div>
		    </div>
		 </div>
	  <!-- /.widget-user -->
	</div>
	<table>
		<tr>
			<td>
				<button type="submit" name="submit" value="simpan" class="btn btn-block btn-primary">Update</button>
			</td>
		</tr>
	</table>

<?php echo form_close(); ?>