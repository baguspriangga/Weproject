
	<table>
		<tr>
			<td>No</td>
			<td>Nama Kategori</td>
		</tr>
		<?php $no = 1;  ?>
		<?php foreach ($get_kategori as $key){ ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $key['kategori']; ?></td>
				<td><a href="<?php echo site_url('kategori/update_kategori/'.$key['id_kategori']); ?>">Edit</a></td>
			</tr>
		<?php } ?>
	</table>
