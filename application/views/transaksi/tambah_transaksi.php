<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah transaksi</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah Data transaksi</h1>


	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('index.php/transaksi/proses_tambah_transaksi')?>" autocomplete="off">
						<div class="form-group col-lg-12">
							<label>No KTP : </label>
                            <input type="text" name="no_ktp" id="no_ktp" class="form-control">
						</div>
						<div class="form-group col-lg-12">
							<label>Nama Lengkap : </label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
						</div>
						<div class="form-group col-lg-12">
							<label>Alamat : </label>
                            <textarea name="alamat" id="alamat" cols="20" rows="3" class="form-control"></textarea>	
						</div>
						<div class="form-group col-lg-12">
							<label>Nomor Handphone : </label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control">
						</div>
						<div class="form-group col-lg-12">
							<label>Jenis Kamar : </label>
							<input type="text" name="jenis_kamar" id="jenis_kamar" class="form-control">
						</div>
						<div class="form-group col-lg-12">
							<label>Nomor Kamar : </label>
							<input type="text" name="no_kamar" id="no_kamar" class="form-control">
						</div>
						<div class="form-group col-lg-12">
							<label>Tanggal Masuk : </label>
							<input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control">
						</div>
						<div class="form-group col-lg-12">
							<label>Tanggal Keluar : </label>
							<input type="date" name="tanggal_keluar" id="tanggal_keluar" class="form-control">
						</div>
						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-info btn-flat">
								<i class="fa fa-pencil"></i> Simpan</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
				</div>
			</div>
			<br>
			<br>
		</div>

	</div>

</div>
	
