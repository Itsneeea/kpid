 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Laporan Aplikasi Keuangan</title>
     <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

     <meta http-equiv=Content-Type content="text/html; charset=utf-8">
     <meta name=Generator content="Microsoft Word 15 (filtered)">
     <style>
         <!--
         /* Font Definitions */
         @font-face {
             font-family: "Cambria Math";
             panose-1: 2 4 5 3 5 4 6 3 2 4;
         }

         @font-face {
             font-family: Calibri;
             panose-1: 2 15 5 2 2 2 4 3 2 4;
         }

         /* Style Definitions */
         p.MsoNormal,
         li.MsoNormal,
         div.MsoNormal {
             margin-top: 0in;
             margin-right: 0in;
             margin-bottom: 8.0pt;
             margin-left: 0in;
             line-height: 107%;
             font-size: 11.0pt;
             font-family: "Calibri", sans-serif;
         }

         .MsoChpDefault {
             font-family: "Calibri", sans-serif;
         }

         .MsoPapDefault {
             margin-bottom: 8.0pt;
             line-height: 107%;
         }

         @page WordSection1 {
             size: 595.3pt 841.9pt;
             margin: 1.0in 1.0in 1.0in 1.0in;
         }

         div.WordSection1 {
             page: WordSection1;
         }

         /* List Definitions */
         ol {
             margin-bottom: 0in;
         }

         ul {
             margin-bottom: 0in;
         }
         -->
     </style>

 </head>

 <body lang=EN-US style='word-wrap:break-word'>

     <div class=WordSection1>

         <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center'><b><span lang=EN-ID style='font-size:12.0pt;line-height:107%'>KOMISI PENYIARAN INDONESIA
                     DAERAH KALIMANTAN SELATAN</span></b></p>

         <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center'><b><span lang=EN-ID style='font-size:12.0pt;line-height:107%'>BUKU KAS UMUM T.A</span></b></p>

         <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center'><b><span lang=EN-ID style='font-size:12.0pt;line-height:107%'>&nbsp;</span></b></p>

         <p class=MsoNormal style='margin-bottom:0in'><span lang=EN-ID style='font-size:
12.0pt;line-height:107%'>Bendahara                                       : </span></p>

         <p class=MsoNormal style='margin-bottom:0in'><span lang=EN-ID style='font-size:
12.0pt;line-height:107%'>Wakil Bendahara                            :</span></p>

         <p class=MsoNormal style='margin-bottom:0in'><span lang=EN-ID style='font-size:
12.0pt;line-height:107%'>Tahun                                               :
                 <?php
                    $tanggal = date('Y');
                    echo $tanggal; // contoh hasil: "03 January 2021"
                    ?>

             </span></p>

         <body>
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
                                 <td class="text-center"><?php
                                                            $tanggal = date('d-M-y', strtotime($d['transaksi_tanggal']));
                                                            $tanggal = str_replace(
                                                                ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                                                                ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                                                                $tanggal
                                                            );
                                                            echo $tanggal; // contoh hasil: "03-Jan-21"
                                                            ?>

                                 </td>
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

             <p class=MsoNormal style='margin-bottom:0in'><span lang=EN-ID style='font-size:
12.0pt;line-height:107%;color:black'>            Terbilang </span><i><span lang=EN-ID style='font-size:12.0pt;line-height:107%'>“italic”</span></i></p>

             <p class=MsoNormal style='margin-bottom:0in'><span lang=EN-ID style='font-size:
12.0pt;line-height:107%'>            </span></p>

             <p class=MsoNormal style='margin-bottom:0in'><span lang=EN-ID style='font-size:
12.0pt;line-height:107%'>&nbsp;</span></p>

             <p class=MsoNormal style='margin-bottom:0in'><span lang=EN-ID style='font-size:
12.0pt;line-height:107%'>&nbsp;</span></p>

             <p class=MsoNormal style='margin-bottom:0in'><span lang=EN-ID style='font-size:
12.0pt;line-height:107%'>&nbsp;</span></p>

             <p class=MsoNormal style='margin-bottom:0in'><span lang=EN-ID style='font-size:
12.0pt;line-height:107%'>&nbsp;</span></p>

             <p class=MsoNormal style='margin-bottom:0in'><span lang=EN-ID style='font-size:
12.0pt;line-height:107%'>                                                                                   
                     Banjarbaru,
                     tgl</span></p>

             <p class=MsoNormal style='margin-bottom:0in'><span lang=EN-ID style='font-size:
12.0pt;line-height:107%'>                                                                                    <b>Komisi
                         Penyiaran Indonesia Daerah                        
                         <p>                                                                              Kalimantan
                             Selatan</p>
                     </b></span></p>

             <table class=table-responsive border=0 cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none'>
                 <tr>
                     <td width=301 valign=top style='width:225.4pt;padding:0in 5.4pt 0in 5.4pt'>
                         <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-ID style='font-size:12.0pt'>Mengetahui</span></p>
                     </td>
                     <td width=301 valign=top style='width:225.4pt;padding:0in 5.4pt 0in 5.4pt'>
                         <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-ID style='font-size:12.0pt'>Bendahara</span></p>
                     </td>
                 </tr>
                 <tr>
                     <td width=301 valign=top style='width:225.4pt;padding:0in 5.4pt 0in 5.4pt'>
                         <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=EN-ID style='font-size:12.0pt'>&nbsp;</span></p>
                     </td>
                     <td width=301 valign=top style='width:225.4pt;padding:0in 5.4pt 0in 5.4pt'>
                         <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=EN-ID style='font-size:12.0pt'>&nbsp;</span></p>
                         <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=EN-ID style='font-size:12.0pt'>&nbsp;</span></p>
                         <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=EN-ID style='font-size:12.0pt'>&nbsp;</span></p>
                         <p class=MsoNormal style='margin-bottom:0in;line-height:normal'><span lang=EN-ID style='font-size:12.0pt'>&nbsp;</span></p>
                     </td>
                 </tr>
                 <tr>
                     <td width=301 valign=top style='width:225.4pt;padding:0in 5.4pt 0in 5.4pt'>
                         <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-ID style='font-size:12.0pt'>Drs</span></p>
                     </td>
                     <td width=301 valign=top style='width:225.4pt;padding:0in 5.4pt 0in 5.4pt'>
                         <p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
  line-height:normal'><span lang=EN-ID style='font-size:12.0pt'>Nor</span></p>
                     </td>
                 </tr>
             </table>

             <script>
                 window.print();
                 $(document).ready(function() {});
             </script>

         </body>

 </html>