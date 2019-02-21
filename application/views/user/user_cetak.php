<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data</title>
<style>
table {
  font-family: arial, sans-serif;

  width: 100%;
}

td, th {

  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color:;
}
</style>
</head>
<body>
	<h2>DATA KTP</h2>
	<br>
	<table>
	  <tr>
	    <td style="width: 20%">NIK</td>
	    <td style="width: 1%">:</td>
	    <td style="width: 30%"><?php echo($nik); ?></td>
	    <td rowspan="4" style="width: 15%">Foto</td>
	    <td rowspan="4" style="width: 1%">:</td>
	    <td rowspan="4"><?php echo($foto); ?></td>
	  </tr>
	 <tr>
	    <td style="width: 20%">Nama</td>
	    <td style="width: 1%">:</td>
	    <td style="width: 30%"><?php echo($nama); ?></td>
	    
	    
	  </tr>
	  <tr>
	    <td style="width: 20%">Tempat Lahir</td>
	    <td style="width: 1%">:</td>
	    <td style="width: 30%"><?php echo($tempat_lahir); ?></td>
	    
	    
	  </tr>
	  <tr>
	    <td style="width: 20%">Tanggal Lahir</td>
	    <td style="width: 1%">:</td>
	    <td style="width: 30%"><?php echo($tanggal_lahir); ?></td>
	    
	   
	  </tr>
	  <tr>
	    <td style="width: 20%">Jenis Kelamin</td>
	    <td style="width: 1%">:</td>
	    <td style="width: 30%"><?php echo($jk); ?></td>
	    <td rowspan="4" style="width: 15%">Tanda Tangan</td>
	    <td rowspan="4" style="width: 1%">:</td>
	    <td rowspan="4"><?php echo($ttd); ?></td>
	  </tr>
	  <tr>
	    <td style="width: 20%">Golongan Darah</td>
	    <td style="width: 1%">:</td>
	    <td style="width: 30%"><?php echo($goldar); ?></td>
	    
	   
	  </tr>
	  <tr>
	    <td style="width: 20%">Alamat</td>
	    <td style="width: 1%">:</td>
	    <td style="width: 30%"><?php echo($alamat); ?></td>
	    
	   
	  </tr>
	  <tr>
	    <td style="width: 20%">Agama</td>
	    <td style="width: 1%">:</td>
	    <td style="width: 30%"><?php echo($agama); ?></td>
	    
	    
	  </tr>
	  <tr>
	    <td style="width: 20%">Status Perkawinan</td>
	    <td style="width: 1%">:</td>
	    <td style="width: 30%"><?php echo($status); ?></td>
	    <td rowspan="5" style="width: 15%">Sidik Jari</td>
	    <td rowspan="5" style="width: 1%">:</td>
	    <td rowspan="5"><?php echo($sidik_jari); ?></td>
	  </tr>
	  <tr>
	    <td style="width: 20%">Pekerjaan</td>
	    <td style="width: 1%">:</td>
	    <td style="width: 30%"><?php echo($pekerjaan); ?></td>
	    
	    
	  </tr>
	  <tr>
	    <td style="width: 20%">Kewarganegaraan</td>
	    <td style="width: 1%">:</td>
	    <td style="width: 30%"><?php echo($kewarganegaraan); ?></td>
	    
	    
	  </tr>
	  <tr>
	    <td style="width: 20%">Masa Berlaku</td>
	    <td style="width: 1%">:</td>
	    <td style="width: 30%"><?php echo($masa_berlaku); ?></td>
	    
	    
	  </tr>
	  <tr>
	    <td style="width: 20%">Nama Ibu Kandung</td>
	    <td style="width: 1%">:</td>
	    <td style="width: 30%"><?php echo($nama_ibu); ?></td>
	    
	    
	  </tr>
	</table>

</body>
</html>
		


	<script>
		window.onload=function(){
		window.print();
		}
	</script>


		
