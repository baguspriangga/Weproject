<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>

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
		<?php foreach ($get_gambar as $key){ ?>
			<tr>

				<td><?php echo $no++; ?></td>
				<td><?php echo "<img src='".base_url("images/".$key['nama_file'])."' width='100' height='100'>" ?></td>
				<td><?php echo $key['nama_file']; ?></td>
				<td><?php echo $key['ukuran_file']; ?></td>
				<td><?php echo $key['tipe_file']; ?></td>
				<td><a href="<?php echo site_url('upload/do_upload_update/'.$key['id']); ?>">Edit</a></td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>