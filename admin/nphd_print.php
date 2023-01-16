 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Laporan Aplikasi Keuangan</title>
     <style type="text/css">
         html {
             font-family: Calibri, Arial, Helvetica, sans-serif;
             font-size: 11pt;
             background-color: white
         }

         a.comment-indicator:hover+div.comment {
             background: #ffd;
             position: absolute;
             display: block;
             border: 1px solid black;
             padding: 0.5em
         }

         a.comment-indicator {
             background: red;
             display: inline-block;
             border: 1px solid black;
             width: 0.5em;
             height: 0.5em
         }

         div.comment {
             display: none
         }

         table {
             border-collapse: collapse;
             page-break-after: always
         }

         .gridlines td {
             border: 1px dotted black
         }

         .gridlines th {
             border: 1px dotted black
         }

         .b {
             text-align: center
         }

         .e {
             text-align: center
         }

         .f {
             text-align: right
         }

         .inlineStr {
             text-align: left
         }

         .n {
             text-align: right
         }

         .s {
             text-align: left
         }

         td.style0 {
             vertical-align: bottom;
             border-bottom: none #000000;
             border-top: none #000000;
             border-left: none #000000;
             border-right: none #000000;
             color: #000000;
             font-family: 'Calibri';
             font-size: 11pt;
             background-color: white
         }

         th.style0 {
             vertical-align: bottom;
             border-bottom: none #000000;
             border-top: none #000000;
             border-left: none #000000;
             border-right: none #000000;
             color: #000000;
             font-family: 'Calibri';
             font-size: 11pt;
             background-color: white
         }

         td.style1 {
             vertical-align: middle;
             text-align: center;
             border-bottom: 1px solid #000000 !important;
             border-top: 1px solid #000000 !important;
             border-left: 1px solid #000000 !important;
             border-right: 1px solid #000000 !important;
             color: #000000;
             font-family: 'Times New Roman';
             font-size: 12pt;
             background-color: white
         }

         th.style1 {
             vertical-align: middle;
             text-align: center;
             border-bottom: 1px solid #000000 !important;
             border-top: 1px solid #000000 !important;
             border-left: 1px solid #000000 !important;
             border-right: 1px solid #000000 !important;
             color: #000000;
             font-family: 'Times New Roman';
             font-size: 12pt;
             background-color: white
         }

         td.style2 {
             vertical-align: bottom;
             border-bottom: 1px solid #000000 !important;
             border-top: 1px solid #000000 !important;
             border-left: 1px solid #000000 !important;
             border-right: 1px solid #000000 !important;
             color: #000000;
             font-family: 'Times New Roman';
             font-size: 12pt;
             background-color: white
         }

         th.style2 {
             vertical-align: bottom;
             border-bottom: 1px solid #000000 !important;
             border-top: 1px solid #000000 !important;
             border-left: 1px solid #000000 !important;
             border-right: 1px solid #000000 !important;
             color: #000000;
             font-family: 'Times New Roman';
             font-size: 12pt;
             background-color: white
         }

         td.style3 {
             vertical-align: bottom;
             border-bottom: 1px solid #000000 !important;
             border-top: 1px solid #000000 !important;
             border-left: 1px solid #000000 !important;
             border-right: 1px solid #000000 !important;
             color: #000000;
             font-family: 'Calibri';
             font-size: 11pt;
             background-color: white
         }

         th.style3 {
             vertical-align: bottom;
             border-bottom: 1px solid #000000 !important;
             border-top: 1px solid #000000 !important;
             border-left: 1px solid #000000 !important;
             border-right: 1px solid #000000 !important;
             color: #000000;
             font-family: 'Calibri';
             font-size: 11pt;
             background-color: white
         }

         td.style4 {
             vertical-align: bottom;
             border-bottom: 1px solid #000000 !important;
             border-top: 1px solid #000000 !important;
             border-left: 1px solid #000000 !important;
             border-right: 1px solid #000000 !important;
             font-weight: bold;
             color: #000000;
             font-family: 'Times New Roman';
             font-size: 12pt;
             background-color: white
         }

         th.style4 {
             vertical-align: bottom;
             border-bottom: 1px solid #000000 !important;
             border-top: 1px solid #000000 !important;
             border-left: 1px solid #000000 !important;
             border-right: 1px solid #000000 !important;
             font-weight: bold;
             color: #000000;
             font-family: 'Times New Roman';
             font-size: 12pt;
             background-color: white
         }

         td.style5 {
             vertical-align: middle;
             text-align: left;
             border-bottom: 1px solid #000000 !important;
             border-top: 1px solid #000000 !important;
             border-left: 1px solid #000000 !important;
             border-right: 1px solid #000000 !important;
             color: #000000;
             font-family: 'Times New Roman';
             font-size: 12pt;
             background-color: white
         }

         td.style6 {
             vertical-align: middle;
             text-align: center;
             border-bottom: 1px solid #000000 !important;
             border-top: 1px solid #000000 !important;
             border-left: 1px solid #000000 !important;
             border-right: 1px solid #000000 !important;
             color: #000000;
             font-family: 'Times New Roman';
             font-size: 12pt;
             background-color: white
         }

         th.style5 {
             vertical-align: middle;
             text-align: center;
             border-bottom: 1px solid #000000 !important;
             border-top: 1px solid #000000 !important;
             border-left: 1px solid #000000 !important;
             border-right: 1px solid #000000 !important;
             color: #000000;
             font-family: 'Times New Roman';
             font-size: 12pt;
             background-color: white
         }

         table.sheet0 col.col0 {
             width: 15.58888871pt
         }

         table.sheet0 col.col1 {
             width: 16.26666648pt
         }

         table.sheet0 col.col2 {
             width: 14.91111094pt
         }

         table.sheet0 col.col3 {
             width: 15.58888871pt
         }

         table.sheet0 col.col4 {
             width: 14.91111094pt
         }

         table.sheet0 col.col5 {
             width: 87.43333233pt
         }

         table.sheet0 col.col6 {
             width: 86.07777679pt
         }

         table.sheet0 col.col7 {
             width: 42pt
         }

         table.sheet0 col.col8 {
             width: 42pt
         }

         table.sheet0 col.col9 {
             width: 42pt
         }

         table.sheet0 col.col10 {
             width: 51.51111052pt
         }

         table.sheet0 tr {
             height: 15pt
         }

         table.sheet0 tr.row0 {
             height: 15.75pt
         }

         table.sheet0 tr.row1 {
             height: 31.5pt
         }

         table.sheet0 tr.row2 {
             height: 31.5pt
         }

         table.sheet0 tr.row3 {
             height: 15.75pt
         }

         table.sheet0 tr.row4 {
             height: 15.75pt
         }

         table.sheet0 tr.row5 {
             height: 15.75pt
         }

         table.sheet0 tr.row6 {
             height: 15.75pt
         }

         table.sheet0 tr.row7 {
             height: 15.75pt
         }
     </style>
 </head>

 <body>
     <center>
         <h4>LAPORAN</h4>
         <h4>SISTEM IFORMASI KEUANGAN</h4>
     </center>
     <style>
         @page {
             margin-left: 0.7in;
             margin-right: 0.7in;
             margin-top: 0.75in;
             margin-bottom: 0.75in;
         }

         body {
             margin-left: 0.7in;
             margin-right: 0.7in;
             margin-top: 0.75in;
             margin-bottom: 0.75in;
         }
     </style>
     <div class="table-responsive">
         <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines" width="100%">
             <col class="col0">
             <col class="col1">
             <col class="col2">
             <tbody>
                 <tr class="row0">
                     <td class="column0 style6 s style6" colspan="5" rowspan="2"><b>Kode Rekening</b></td>
                     <td class="column5 style6 s style6" colspan="2" rowspan="2"><b>Uraian</b></td>
                     <td class="column7 style5 s style5" colspan="3"><b>Rincian Perhitungan</b></td>
                     <td class="column10 style5 s style5" rowspan="2"><b>Jumlah</b></td>
                 </tr>
                 <tr class="row1">
                     <td class="column7 style1 s"><b>Volume</b></td>
                     <td class="column8 style1 s"><b>Satuan</b></td>
                     <td class="column9 style1 s"><b>Harga Satuan</b></td>
                 </tr>
                 <tr class="row2">
                     <td class="column0 style5 n style5" colspan="5"><b>1</b></td>
                     <td class="column2 style1 n" colspan="2"><b>2</b></td>
                     <td class="column7 style1 n"><b>3</b></td>
                     <td class="column8 style1 n"><b>4</b></td>
                     <td class="column9 style1 n"><b>5</b></td>
                     <td class="column10 style1 s"><b>6=(3 x 5)</b></td>
                 </tr><?php include '../koneksi.php';
                        $no = 1;
                        $tarif_nphd = 0;
                        $volume_nphd = 0;
                        $data = mysqli_query($koneksi, "SELECT * FROM nphd");

                        while ($d = mysqli_fetch_assoc($data)) {
                            $tarif_nphd = $d['tarif_nphd'];
                            $volume_nphd = $d['volume_nphd'];
                        ?><tr>
                         <td class="column0 style1 null"></td>
                         <td class="column1 style1 null"></td>
                         <td class="column2 style1 null"></td>
                         <td class="column3 style1 null"></td>
                         <td class="column4 style1 null"></td>
                         <td class="column5 style5 n style5" colspan="2"><?php echo $d['uraian_nphd'];
                                                                            ?></td>
                         <td><?php echo $d['volume_nphd'];
                                ?></td>
                         <td><?php echo $d['satuan_nphd'];
                                ?></td>
                         <td><?php echo "" . number_format($tarif_nphd) . "";
                                ?></td>
                         <td><?php echo "Rp. " . number_format($tarif_nphd * $volume_nphd) . " ,-";
                                ?></td><?php
                                    }

                                        ?>
                     </tr>
             </tbody>
         </table>
     </div>
     <script>
         window.print();

         $(document).ready(function() {}

         );
     </script>
 </body>

 </html>