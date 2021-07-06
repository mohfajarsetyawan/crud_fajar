<?php 	
		require 'koneksi.php';
		
		$ID_KONSUMEN = $_GET['ID_KONSUMEN'];

			if(hapus($ID_KONSUMEN)) {
				echo "<script>
							alert('Data berhasil dihapus');
							document.location.href='index.php';
						  </script>";
		 		} else {
		 			echo "<script>
							alert('Data gagal dihapus');
							document.location.href='index.php';
						  </script>";
				}
 ?>