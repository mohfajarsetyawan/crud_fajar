 <?php 
	 	require 'koneksi.php';

	 	$ID_KONSUMEN = $_GET['ID_KONSUMEN'];
	 	$a = KONSUMEN("SELECT * FROM KONSUMEN WHERE ID_KONSUMEN = $ID_KONSUMEN")[0];

		 	if(isset($_POST['ubah'])) {
		 		if(edit($_POST) >0) {
		 			echo "<script>
							alert('Data berhasil diubah');
							document.location.href='index.php';
						  </script>";
		 		} else {
		 			echo "<script>
							alert('Data gagal diubah');
						  </script>";
		 		}
		 	}
  ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>UBAH DATA</title>
 </head>
 <body>

 	<h1><u>Isi Form dibawah</u></h1>

 	<form action="" method="post">
 			<ul>
 				<li>
 					<input type="number" name="ID_KONSUMEN" id="ID_KONSUMEN" value="<?= $a['ID_KONSUMEN']; ?>">
 				</li>
 					<br>
 				<li>
 					<input type="number" name="KODE_KONSUMEN" id="KODE_KONSUMEN" value="<?= $a['KODE_KONSUMEN']; ?>">
 				</li>
 					<br>
 				<li>
 					<input type="text" name="NAMA_KONSUMEN" id="NAMA_KONSUMEN" value="<?= $a['NAMA_KONSUMEN']; ?>">
 				</li>
 					<br>
 				<li>
 					<input type="number" name="NOMER_TELFON" id="NOMER_TELFON" value="<?= $a['NOMER_TELFON']; ?>">
 				</li>
 					<br>
 				<li>
 					<input type="text" name="TYPE_KENDARAAN" id="TYPE_KENDARAAN" value="<?= $a['TYPE_KENDARAAN']; ?>">
 				</li>
 					<br>
 				<li>
 					<input type="text" name="NO_PLAT" id="NO_PLAT" value="<?= $a['NO_PLAT']; ?>">
 				</li>
 			</ul>
 			<button type="submit" name="ubah">Ubah Data</button>
 	</form>
 			<br>
 			<a href="index.php">Kembali</a>
 
 </body>
 </html>