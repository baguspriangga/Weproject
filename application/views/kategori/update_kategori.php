<?php echo validation_errors(); ?>
<?php echo form_open('kategori/update_kategori/'.$update_kategori['id_kategori']); ?>
	
	<label for="kategori">Kategori</label>
	<input type="text" name="kategori" value='<?php echo $update_kategori['kategori']; ?>'><br><br>

	<input type="submit" name="submit" value="Simpan">
<?php echo form_close(); ?>