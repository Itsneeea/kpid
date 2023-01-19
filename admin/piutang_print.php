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
        $data = mysqli_query($koneksi, "SELECT * FROM piutang");
        $piutang = mysqli_fetch_all($data, MYSQLI_ASSOC);
        $total_piutang = array_sum(array_column($piutang, 'piutang_nominal'));

        ?>

     <div class="table-responsive">
         <table class="table table-bordered table-striped">
             <thead>
                 <tr>
                     <th width="1%" rowspan="2">NO</th>
                     <th width="10%" rowspan="2" class="text-center">KODE</th>
                     <th rowspan="2" class="text-center">TANGGAL</th>
                     <th rowspan="2" class="text-center">KETERANGAN</th>
                     <th colspan="2" class="text-center">NOMINAL</th>
                 </tr>
             </thead>
             <tbody>
                 <?php
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM piutang");
                    while ($d = mysqli_fetch_assoc($data)) {
                    ?>
                     <tr>
                         <td class="text-center"><?php echo $no++; ?></td>
                         <td>HTG-000<?php echo $d['piutang_id']; ?></td>
                         <td class="text-center"><?php echo date('d-m-Y', strtotime($d['piutang_tanggal'])); ?></td>
                         <td><?php echo $d['piutang_keterangan']; ?></td>
                         <td><?php echo "Rp. " . number_format($d['piutang_nominal']) . " ,-"; ?></td>
                     </tr>
                 <?php
                    }
                    ?>
                 <tr>
                     <th colspan="4" class="text-right">TOTAL</th>
                     <td class="text-center text-bold text-success">
                         <?php echo "Rp. " . number_format($total_piutang) . " ,-"; ?>
                     </td>
                 </tr>

             </tbody>

         </table>
     </div>
     <script>
         window.print();
         $(document).ready(function() {});
     </script>

 </body>

 </html>