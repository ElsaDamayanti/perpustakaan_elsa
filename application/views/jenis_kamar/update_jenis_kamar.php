<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Update Data jenis kamar</h4>
                        <br>
                        <form action="<?=base_url('index.php/jenis_kamar/proses_update_jenis_kamar')?>" method="POST">
                            <input type="hidden" name="id_jenis" id="id_jenis" value="<?php echo $tbl_jenis_kamar['id_jenis']?>">
                            <table class="table">
                                <tr>
                                    <td>Kamar</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="kamar" id="kamar" value="<?php echo $tbl_jenis_kamar['kamar']?>"></td>
								</tr>
								<tr>
      								<td>Keterangan</td>
     								 <td>:</td>
     								 <td><input type="text"  class="form-control" name="keterangan" id="keterangan" value="<?php echo $tbl_jenis_kamar['keterangan']?>"></td>
 								 </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="harga" id="harga" cols="10" rows="6" ><?php echo $tbl_jenis_kamar['harga']?></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-info" value="Update">
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
</div>