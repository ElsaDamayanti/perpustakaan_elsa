<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Update Data Transaksi</h4>
                        <br>
                        <form action="<?=base_url('index.php/transaksi/proses_update_transaksi')?>" method="POST">
                            <input type="hidden" name="no_identitas" id="no_identitas" value="<?php echo $tbl_transaksi['no_identitas']?>">
                            <table class="table">
                                <tr>
                                    <td>Tanggal Booking</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="tanggal_booking" id="tanggal_booking" value="<?php echo $tbl_transaksi['tanggal_booking']?>"></td>
								</tr>
								<tr>
      								<td>Nama Customer</td>
     								 <td>:</td>
     								 <td><input type="text"  class="form-control" name="nama_customer" id="nama_customer" value="<?php echo $tbl_transaksi['nama_customer']?>"></td>
 								 </tr>
                                <tr>
                                    <td>Tipe Kamar</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="tipe_kamar" id="tipe_kamar" cols="10" rows="6" ><?php echo $tbl_transaksi['tipe_kamar']?></textarea></td>
                                </tr>
                                <tr>
                                    <td>Durasi Menginap</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="durasi_menginap" id="durasi_menginap" cols="10" rows="6" ><?php echo $tbl_transaksi['durasi_menginap']?></textarea></td>
                                </tr>
 

                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-warning" value="Update">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>