<?php include 'header.php'; ?>

<div class="content-wrapper">

    <section class="content-header">
        <h1>
            LAPORAN
            <small>Data Laporan</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <section class="col-lg-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Filter Laporan</h3>
                    </div>
                    <div class="box-body">
                        <form method="get" action="">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Periode</label>
                                        <select name="periode" class="form-control" required="required">
                                            <option value="semua">- Pilih -</option>
                                            <?php 
                      $periode = mysqli_query($koneksi,"SELECT * FROM bank");
                      while($p = mysqli_fetch_array($periode)){
                        ?>
                                            <option
                                                <?php if(isset($_GET['periode'])){ if($_GET['periode'] == $p['bank_id']){echo "selected='selected'";}} ?>
                                                value="<?php echo $p['bank_id']; ?>"><?php echo $p['periode']; ?>
                                            </option>
                                            <?php 
                      }
                      ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <br />
                                        <input type="submit" value="TAMPILKAN" class="btn btn-sm btn-primary btn-block">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Laporan Anggaran Naskah Penerima Hibah Dana</h3>
                    </div>
                    <div class="box-body">
                        <?php 
                         $periode = mysqli_query($koneksi,"SELECT * FROM bank");
            if(isset($_GET['periode'])){
              $periode= $_GET['periode'];
              ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>PERIODE</th>
                                        <th>:</th>
                                        <td>
                                            <?php 
                                     $k = mysqli_query($koneksi,"select * from bank where bank_id='$periode'");
                          $kk = mysqli_fetch_assoc($k);
                          echo $kk['periode'];?></td>
                                    </tr>
                                </table>
                                <?php 
            }
              ?>
                            </div>
                        </div>

                        <a href="laporan_excel.php?periode=<?php echo $periode ?>" target="_blank"
                            class="btn btn-sm btn-success"><i class="fa fa-file-pdf-o"></i>
                            &nbsp
                            CETAK
                            EXCEL</a>
                        <a href="nphd_print.php/periode=<?php echo $periode ?>" target="_blank"
                            class="btn btn-sm btn-primary"><i class="fa fa-print"></i> &nbsp
                            PRINT</a>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="5%" rowspan="4">
                                            No
                                        </th>
                                        <th width="0%" rowspan="2" class="text-center">
                                            KATEGORI
                                        </th>
                                        <th rowspan="3" class="text-center">
                                            TOTAL PENGGUNAAN
                                        </th>
                                        <th width="20%" rowspan="2" class="text-center">
                                            SALDO
                                        </th>
                                        <th width="20%" rowspan="2" class="text-center">
                                            PERSENTASE
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    include '../koneksi.php';
                    $no=1;
                    $tarif_nphd=0; 
                    $transaksi_nominal=0;
$data = mysqli_query($koneksi, "
SELECT DISTINCT nphd.id_nphd, nphd.tarif_nphd, kategori.kategori_id, kategori.kategori, transaksi.transaksi_nominal, transaksi.transaksi_jenis 
FROM nphd
LEFT JOIN kategori
ON nphd.kategori_nphd = kategori.kategori_id
LEFT JOIN transaksi
ON transaksi.transaksi_nominal = kategori.kategori_id
WHERE transaksi.transaksi_jenis='pengeluaran' AND nphd.bank_id = '$periode'
") ;
while($d = mysqli_fetch_array($data)){
  $tarif_nphd = $d['tarif_nphd'];
  $transaksi_nominal = $d['transaksi_nominal'];
    ?>
                                    <tr>
                                        <td width="5%">
                                            <?php echo $no++;?>
                                        </td>
                                        <td>
                                            <?php echo $d['kategori'];?>
                                        </td>
                                        <td>
                                            <?php echo $d['transaksi_nominal'];?>
                                        </td>
                                        <td>
                                            <?php echo $d['tarif_nphd'];?>
                                        </td>
                                        </td>
                                        <td>
                                            <?php echo "Rp. ".number_format($tarif_nphd)." ,-"; ?>
                                        </td>
                                    </tr>


                                    <!-- <?php 
            // }else{
              ?> -->

                                    <!-- <div class="alert alert-info text-center">
                                        Silahkan Filter Laporan Terlebih Dulu.
                                    </div> -->

                                    <?php
            }
            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

</div>
<?php include 'footer.php'; ?>