<?php 

	$conn = mysqli_connect("localhost","root","","mohammadfajar_311810783");

	function konsumen($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_array($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}

	function service($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_array($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}

	function inner_join($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_assoc($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}

	function outer_join($query) {
		global $conn;
			 $result = mysqli_query($conn, $query);
			 $array = [];
			 while($row = mysqli_fetch_assoc($result)) {
			 	$array[] = $row;
			 }
			 	return $array;
		}


	function tambah_konsumen($data) {
		global $conn;

			$id_konsumen = htmlspecialchars($data['id_konsumen']);
			$kode_konsumen = htmlspecialchars($data['kode_konsumen']);
			$nama_konsumen = htmlspecialchars($data['nama_konsumen']);
			$nomer_telfon = htmlspecialchars($data['nomer_telfon']);
			$type_kendaraan = htmlspecialchars($data['type_kendaraan']);
			$no_plat = htmlspecialchars($data['no_plat']);

				$query = "INSERT INTO konsumen VALUES
					('$id_konsumen','$kode_konsumen','$nama_konsumen','$nomer_telfon','$type_kendaraan','$no_plat')";

					mysqli_query($conn, $query);
					return mysqli_affected_rows($conn);
	}	

	function tambah_service($data) {
		global $conn;

			$id_service = htmlspecialchars($data['id_service']);
			$kode_service = htmlspecialchars($data['kode_service']);
			$kode_konsumen = htmlspecialchars($data['kode_konsumen']);
			$tgl_service = htmlspecialchars($data['tgl_service']);
			$service = htmlspecialchars($data['service']);
			$tindakan = htmlspecialchars($data['tindakan']);

				$query = "INSERT INTO id_service VALUES
					('$id_service','$kode_service','$kode_konsumen','$tgl_service','$service','$tindakan')";

					mysqli_query($conn, $query);
					return mysqli_affected_rows($conn);
	}	

	function edit($data) {
		global $conn;

			$ID_KONSUMEN = htmlspecialchars($data['ID_KONSUMEN']);
			$KODE_KONSUMEN = htmlspecialchars($data['KODE_KONSUMEN']);
			$NAMA_KONSUMEN = htmlspecialchars($data['NAMA_KONSUMEN']);
			$NOMER_TELFON = htmlspecialchars($data['NOMER_TELFON']);
			$TYPE_KENDARAAN = htmlspecialchars($data['TYPE_KENDARAAN']);
			$NO_PLAT = htmlspecialchars($data['NO_PLAT']);

				$query = "UPDATE KONSUMEN SET
							ID_KONSUMEN = '$ID_KONSUMEN',
							KODE_KONSUMEN = '$KODE_KONSUMEN',
							NAMA_KONSUMEN = '$NAMA_KONSUMEN',
							NOMER_TELFON = '$NOMER_TELFON',
							TYPE_KENDARAAN = '$TYPE_KENDARAAN'
							NO_PLAT = '$NO_PLAT'
						WHERE ID_KONSUMEN = $ID_KONSUMEN";

					mysqli_query($conn, $query);
					return mysqli_affected_rows($conn);
	}	

	function hapus($id_konsumen) {
			global $conn;
				$query = "DELETE FROM konsumen WHERE id_konsumen = $id_konsumen";
				mysqli_query($conn, $query);
				return mysqli_affected_rows($conn);
		}
 ?>