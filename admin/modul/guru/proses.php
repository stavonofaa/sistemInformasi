<?php 

if (isset($_POST['saveGuru'])) {

    $pass= sha1($_POST['nik']);

		$sumber = @$_FILES['foto']['tmp_name'];
		$target = '../assets/img/user/';
		$nama_gambar = @$_FILES['foto']['name'];
		$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
		if ($pindah) {
			$save= mysqli_query($con,"INSERT INTO tb_guru VALUES(NULL,'$_POST[nik]','$_POST[nama]','$_POST[noHp]','$_POST[mapel]','$pass','$nama_gambar','Y') ");
			if ($save) {
				echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[nama]) ', 'Berhasil disimpan', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=guru');
				} ,3000);   
				</script>";
			}

		}


  }elseif (isset($_POST['editGuru'])) {

  	 $pass= sha1($_POST['noHp']);
		$gambar = @$_FILES['foto']['name'];
		if (!empty($gambar)) {
		move_uploaded_file($_FILES['foto']['tmp_name'],"../assets/img/user/$gambar");
		$ganti = mysqli_query($con,"UPDATE tb_guru SET foto='$gambar' WHERE id_guru='$_POST[id]' ");
		}
		$editGuru= mysqli_query($con,"UPDATE tb_guru SET nama_guru='$_POST[nama]',no_hp='$_POST[noHp]',id_mapel='$_POST[mapel]' WHERE id_guru='$_POST[id]' ");

		if ($editGuru) {
			echo "
				<script type='text/javascript'>
				setTimeout(function () { 

				swal('($_POST[nama]) ', 'Berhasil diubah', {
				icon : 'success',
				buttons: {        			
				confirm: {
				className : 'btn btn-success'
				}
				},
				});    
				},10);  
				window.setTimeout(function(){ 
				window.location.replace('?page=guru');
				} ,3000);   
				</script>";
		}


  }
 ?>