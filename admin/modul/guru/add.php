<div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Guru</h4>
            <ul class="breadcrumbs">
              <li class="nav-home">
                <a href="#">
                  <i class="flaticon-home"></i>
                </a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Data Guru</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Tambah Guru</a>
              </li>
            </ul>
          </div>
          <div class="row">

                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Form Entry Guru</h3>
                    </div>
                    <div class="card-body">
						<form action="?page=guru&act=proses" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>NIK</label>
								<input name="nik" type="text" class="form-control" placeholder="NIK">								
							</div>

							<div class="form-group">
								<label>Nama Guru</label>
								<input name="nama" type="text" class="form-control" placeholder="Nama dan Gelar">								
							</div>

							<div class="form-group">
								<label>Nomor HP</label>
								<input name="noHp" type="text" class="form-control" placeholder="Nomor Hp">
							</div>
              
								<div class="form-group">
									<label>Mata Pelajaran</label>
									<select name="mapel" class="form-control">
										<option value="">- Pilih -</option>
										<?php
										$mapel = mysqli_query($con, "SELECT * FROM tb_master_mapel ORDER BY id_mapel ASC");
										foreach ($mapel as $g) {
											echo "<option value='$g[id_mapel]'>[ $g[kode_mapel] ] $g[mapel]</option>";
										}
										?>

									</select>
								</div>
							

							<div class="form-group">
								<p>
									<img src="../assets/img/user/<?=$data['foto']; ?>"  class="img-fluid rounded-circle kotak" style="height: 65px; width: 65px;">
								</p>
								<label>Foto</label>
								<input type="file" name="foto">
							</div>

							

							<div class="form-group">
								<button name="saveGuru" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
								<a href="javascript:history.back()" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Batal</a>
							</div>
						</form>
</div>
</div>
</div>
</div>
</div>
