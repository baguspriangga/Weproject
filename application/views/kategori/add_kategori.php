<?php echo validation_errors(); ?>
<?php echo form_open('kategori/add_kategori'); ?>
	
	<label for="kategori">Kategori</label>
	<input type="text" name="kategori"><br><br>

	<input type="submit" name="submit" value="Simpan">
<?php echo form_close(); ?>