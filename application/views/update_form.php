<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload_update/'.$update_gambar['id']);?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

	<table>
		<tr>
			<td>No</td>
			<td>Gambar</td>
			<td>Nama File</td>
			<td>Ukuran File</td>
			<td>Tipe File</td>
		</tr>
		<?php $no = 1;  ?>
			<tr>

				<td><?php echo $no++; ?></td>
				<td><?php echo "<img src='".base_url("images/".$update_gambar['nama_file'])."' width='100' height='100'>" ?></td>
				<td><?php echo $update_gambar['nama_file']; ?></td>
				<td><?php echo $update_gambar['ukuran_file']; ?></td>
				<td><?php echo $update_gambar['tipe_file']; ?></td>
			</tr>
	</table>
	<br>


</body>
</html>