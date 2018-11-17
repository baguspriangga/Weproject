
<?php echo validation_errors(); ?>
<?php echo form_open('user_kontak/update_user_kontak/'.$update_user_kontak['id_kontak']); ?>
		

<div class="col-md">
          <!-- Widget: user widget style 1 -->
  <div class="box box-widget widget-user-2">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="box-footer no-padding">
			<div class="box-body">
				<strong><i class="fa fa-phone-square margin-r-5"></i> No Telepon</strong>

				<input class="form-control input-l" type="text" placeholder="Nama Vendor" name="no_tlp" value='<?php echo $update_user_kontak['no_tlp']; ?>'>

				<hr>

				<strong><i class="fa fa-mobile margin-r-5"></i> No Handphone</strong>

				<input class="form-control input-l" type="text" placeholder="Nama Vendor" name="no_hp" value='<?php echo $update_user_kontak['no_hp']; ?>'>

				<hr>

				<strong><i class="fa fa-envelope margin-r-5"></i>Email</strong>

				<input class="form-control input-l" type="text" placeholder="Nama Vendor" name="email" value='<?php echo $update_user_kontak['email']; ?>'>

				<hr>

				<strong><i class="fa fa-facebook margin-r-5"></i> Facebook</strong>

				<input class="form-control input-l" type="text" placeholder="Nama Vendor" name="facebook" value='<?php echo $update_user_kontak['facebook']; ?>'>

				<hr>

				<strong><i class="fa fa-instagram margin-r-5"></i>Instagram</strong>

				<input class="form-control input-l" type="text" placeholder="Nama Vendor" name="instagram" value='<?php echo $update_user_kontak['instagram']; ?>'>

				<hr>

				<strong><i class="fa fa-youtube margin-r-5"></i>Youtube</strong>

				<input class="form-control input-l" type="text" placeholder="Nama Vendor" name="youtube" value='<?php echo $update_user_kontak['youtube']; ?>'>

				<hr>

				<strong><i class="fa fa-internet-explorer margin-r-5"></i> Website</strong>

				<input class="form-control input-l" type="text" placeholder="Nama Vendor" name="blog" value='<?php echo $update_user_kontak['blog']; ?>'>

				<hr>

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
