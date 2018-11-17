<?php 	foreach ($get_user_kontak as $key) {?>
		

<div class="col-md">
          <!-- Widget: user widget style 1 -->
  <div class="box box-widget widget-user-2">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="box-footer no-padding">
			<div class="box-body">
				<strong><i class="fa fa-phone-square margin-r-5"></i> No Telepon</strong>

				<p class="text-muted"><?php echo $key['no_tlp']; ?></p>

				<hr>

				<strong><i class="fa fa-mobile margin-r-5"></i> No Handphone</strong>

				<p class="text-muted"><?php echo $key['no_hp']; ?></p>

				<hr>

				<strong><i class="fa fa-envelope margin-r-5"></i>Email</strong>

				<p class="text-muted"><?php echo $key['email']; ?></p>

				<hr>

				<strong><i class="fa fa-facebook margin-r-5"></i> Facebook</strong>

				<p class="text-muted"><?php echo $key['facebook']; ?></p>

				<hr>

				<strong><i class="fa fa-instagram margin-r-5"></i>Instagram</strong>

				<p class="text-muted"><?php echo $key['instagram']; ?></p>

				<hr>

				<strong><i class="fa fa-youtube margin-r-5"></i>Youtube</strong>

				<p class="text-muted"><?php echo $key['youtube']; ?></p>

				<hr>

				<strong><i class="fa fa-internet-explorer margin-r-5"></i> Website</strong>

				<p class="text-muted"><?php echo $key['blog']; ?></p>

				<hr>

			</div>
    </div>
  </div>
  <!-- /.widget-user -->
</div>
<table>
	<tr>
		<td>
			<a class="btn btn-block btn-primary" href="<?php echo site_url('user_kontak/update_user_kontak/'.$key['id_kontak']); ?>">Edit</a>
		</td>
	</tr>
</table>


<?php } ?>
