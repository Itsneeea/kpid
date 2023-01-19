 <!DOCTYPE html>
 <html>

 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Laporan Aplikasi Keuangan</title>
   <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

 </head>

 <body>

   <center>
     <h4>LAPORAN</h4>
     <h4>SISTEM IFORMASI KEUANGAN</h4>
   </center>




   <div class="row">
     <div class="col-lg-6">
       <table class="table table-bordered">
         <tr>

           </td>
         </tr>
       </table>

     </div>
   </div>

   <?php
    include '../koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * FROM transaksi");
    $hutang = mysqli_fetch_all($data, MYSQLI_ASSOC);
    $total_hutang = array_sum(array_column($hutang, 'hutang_nominal'));

    ?>

   <div class="table-responsive">
     <table class="table table-bordered table-striped">
       <thead>
         <tr>
           <th width="10%" rowspan="2" class="text-center">TANGGAL</th>
           <th rowspan="2" class="text-center">PERIHAL</th>
           <th class="text-center">NO.KAS</th>
           <th class="text-center">MASUK</th>
           <th class="text-center">KELUAR</th>
           <th class="text-center" rowspan="2">SALDO</th>
         </tr>
       </thead>
       <tbody>
         <?php include '../koneksi.php';
          $no = 1;

          // Calculate the total income
          $total_pemasukan = 0;
          $data = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE transaksi_jenis='Pemasukan'");
          while ($d = mysqli_fetch_array($data)) {
            $total_pemasukan += $d['transaksi_nominal'];
          }

          // Calculate the total expenditure
          $total_pengeluaran = 0;
          $data = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE transaksi_jenis='Pengeluaran'");
          while ($d = mysqli_fetch_array($data)) {
            $total_pengeluaran += $d['transaksi_nominal'];
          }

          // Calculate the balance
          $saldo = $total_pemasukan - $total_pengeluaran;

          // Iterate over the transactions and update the balance
          $data = mysqli_query($koneksi, "SELECT * FROM transaksi ORDER BY transaksi_id ASC");
          while ($d = mysqli_fetch_array($data)) {
            if ($d['transaksi_jenis'] == 'Pengeluaran') {
              // Subtract the amount of the transaction from the balance
              $saldo -= $d['transaksi_nominal'];
            } else if ($d['transaksi_jenis'] == 'Pemasukan') {
              // Subtract the amount of the transaction from the balance
              $saldo += $d['transaksi_nominal'];
            }
          ?>
           <tr>
             <td class="text-center"><?php echo date('d-M-y', strtotime($d['transaksi_tanggal'])); ?></td>
             <td><?php echo $d['transaksi_keterangan']; ?></td>
             <td class="text-center"><?php echo $d['kode_rekening']; ?></td>

             <td class="text-center">
               <?php
                if ($d['transaksi_jenis'] == "Pemasukan") {
                  echo "Rp. " . number_format($d['transaksi_nominal']) . " ,-";
                } else {
                  echo "-";
                }
                ?>
             </td>
             <td class="text-center">
               <?php
                if ($d['transaksi_jenis'] == "Pengeluaran") {
                  echo "Rp. " . number_format($d['transaksi_nominal']) . " ,-";
                } else {
                  echo "-";
                }
                ?>
             </td>
             <td class="text-center">
               <?php
                echo "Rp. " . number_format($saldo) . " ,-";
                ?> </td>
           <?php
          }
            ?>

       </tbody>

     </table>
   </div>
   <script>
     window.print();
     $(document).ready(function() {});
   </script>

 </body>

 </html>