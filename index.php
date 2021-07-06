<?php 
	require 'koneksi.php';
		$konsumen = konsumen("SELECT * FROM konsumen");
		$service = service("SELECT * FROM service");
		$inner_join = inner_join("SELECT * FROM konsumen");
		$outer_join = outer_join("SELECT * FROM service");

		if(isset($_POST['tambah'])) {
		 		if(tambah_konsumen($_POST) >0) {
		 			echo "<script>
							alert('Data berhasil ditambahkan');
							document.location.href='index.php';
						  </script>";
		 		} else {
		 			echo "<script>
							alert('Data gagal ditambahkan');
						  </script>";
		 		}
		 	}

		if(isset($_POST['tambah'])) {
		 		if(tambah_service($_POST) >0) {
		 			echo "<script>
							alert('Data berhasil ditambahkan');
							document.location.href='index.php';
						  </script>";
		 		} else {
		 			echo "<script>
							alert('Data gagal ditambahkan');
						  </script>";
		 		}
		 	} 	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tugas Inner Join</title>
 </head>
 <body>

 	<h3>TABLE CUSTOMER (mysqli_fetch_array)</h3>

<!-- FORM TAMBAH DATA -->
 	<form action="" method="post">
 		
 			<tr>
 				<td>
 					<input type="text" name="id_konsumen" placeholder="masukan id konsumen.." required>
 				</td>
 				<td>
 					<input type="text" name="kode_konsumen" placeholder="masukan kode.." required>
 				</td>
 				<td>
 					<input type="text" name="nama_konsumen" placeholder="masukan nama.." required>
 				</td>
 				<td>
 					<input type="text" name="nomer_telfon" placeholder="masukan type nomer telfon.." required>
 				</td>
 				<td>
 					<input type="text" name="type_kendaraan" placeholder="masukan type kendaraan.." required>
 				</td>
 				<td>
 					<input type="text" name="no_plat" placeholder="masukan no plat.." required>
 				</td>
 				<td>
 					<button type="submit" name="tambah">Tambah Data</button>
 				</td>
 			</tr>
 
 	</form>

<!-- TABLE KONSUMEN -->
 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>ID_KONSUMEN</th>
 			<th>KODE_KONSUMEN</th>
 			<th>NAMA_KONSUMEN</th>
 			<th>NOMER_TELFON</th>
 			<th>TYPE_KENDARAAN</th>
 			<th>NO_PLAT</th>
 			<th>Aksi</th>
 		</tr>

 	<?php foreach ($konsumen as $b) : ?>

 		<tr>
 			<td><?= $b["ID_KONSUMEN"]?></td>
 			<td><?= $b["KODE_KONSUMEN"]?></td>
 			<td><?= $b["NAMA_KONSUMEN"]?></td>
 			<td><?= $b["NOMER_TELFON"]?></td>
 			<td><?= $b["TYPE_KENDARAAN"]?></td>
 			<td><?= $b["NO_PLAT"]?></td>
 			<td>
		 			<a href="edit.php?ID_KONSUMEN=<?= $b['ID_KONSUMEN']; ?>">Edit |</a>
		 			<a href="hapus.php?ID_KONSUMEN=<?= $b['ID_KONSUMEN']; ?>" onclick='return confirm("Menghapus data?");'>Delete</a>
		 		</td>
 		</tr>

 	<?php endforeach; ?>
 	</table>

 		<!-- ============================================================== --><br>

 		<h3>TABLE SERVICE (mysqli_fetch_array)</h3>

 	<!-- FORM TAMBAH DATA -->
 	<form action="" method="post">
 		<table border="0">
 			<tr>
 				<td>
 					<input type="number" name="id_service" placeholder="masukan id service.." required>
 				</td>
 				<td>
 					<input type="number" name="kode_service" placeholder="masukan kode.." required>
 				</td>
 				<td>
 					<input type="text" name="kode_konsumen" placeholder="masukan kode konsumen.." required>
 				</td>
 				<td>
 					<input type="number" name="tgl_service" placeholder="masukan tanggal.." required>
 				</td>
 				<td>
 					<input type="text" name="tindakan" placeholder="masukan tindakan.." required>
 				</td>
 				<td>
 					<button type="submit" name="tambah">Tambah Data</button>
 				</td>
 			</tr>
 		</table>
 	</form> 		

<!-- TABLE SERVICE -->
 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>ID_SERVICE</th>
 			<th>KODE_SERVICE</th>
 			<th>KODE_KONSUMEN</th>
 			<th>TGL_SERVICE</th>
 			<th>SERVICE</th>
 			<th>TINDAKAN</th>
 		</tr>

 	<?php foreach ($service as $b) : ?>
 		<tr>
 			<td><?= $b["ID_SERVICE"]?></td>
 			<td><?= $b["KODE_SERVICE"]?></td>
 			<td><?= $b["KODE_KONSUMEN"]?></td>
 			<td><?= $b["TGL_SERVICE"]?></td>
 			<td><?= $b["SERVICE"]?></td>
 			<td><?= $b["TINDAKAN"]?></td>
 		</tr>
 	<?php endforeach; ?>
 	</table>

 		<!-- ============================================================== --><br>

 	<h3>TABLE INNER JOIN (mysqli_fetch_assoc)</h3>

 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>ID_KONSUMEN</th>
 			<th>KODE_KONSUMEN</th>
 			<th>NAMA_KONSUMEN</th>
 			<th>NOMER_TELFON</th>
 			<th>TYPE_KENDARAAN</th>
 			<th>NO_PLAT</th>
 		</tr>

 	<?php foreach ($inner_join as $b) : ?>

 		<tr>
 			<td><?= $b["ID_KONSUMEN"]?></td>
 			<td><?= $b["KODE_KONSUMEN"]?></td>
 			<td><?= $b["NAMA_KONSUMEN"]?></td>
 			<td><?= $b["NOMER_TELFON"]?></td>
 			<td><?= $b["TYPE_KENDARAAN"]?></td>
 			<td><?= $b["NO_PLAT"]?></td>
 		</tr>

 	<?php endforeach; ?>
 	</table>

 		<!-- ============================================================== --><br>

 		<h3>TABLE LEFT OUTER JOIN (mysqli_fetch_assoc)</h3>

 	<table border="1" cellpadding="10" cellspacing="">
 		<tr>
 			<th>ID_SERVICE</th>
 			<th>KODE_SERVICE</th>
 			<th>KODE_KONSUMEN</th>
 			<th>TGL_SERVICE</th>
 			<th>SERVICE</th>
 			<th>TINDAKAN</th>
 		</tr>

 	<?php foreach ($outer_join as $b) : ?>
 		<tr>
 			<td><?= $b["ID_SERVICE"]?></td>
 			<td><?= $b["KODE_SERVICE"]?></td>
 			<td><?= $b["KODE_KONSUMEN"]?></td>
 			<td><?= $b["TGL_SERVICE"]?></td>
 			<td><?= $b["SERVICE"]?></td>
 			<td><?= $b["TINDAKAN"]?></td>
 		</tr>
 	<?php endforeach; ?>
 	</table>

 
 </body>
 </html> 