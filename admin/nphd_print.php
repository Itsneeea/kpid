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
                 </tr><?php include'../koneksi.php';
 $no=1;
 $tarif_nphd=0;
 $volume_nphd=0;
 $data=mysqli_query($koneksi, "SELECT * FROM nphd");

 while($d=mysqli_fetch_assoc($data)) {
   $tarif_nphd=$d['tarif_nphd'];
   $volume_nphd=$d['volume_nphd'];
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
                     <td><?php echo "".number_format($tarif_nphd)."";
   ?></td>
                     <td><?php echo "Rp. ".number_format($tarif_nphd * $volume_nphd)." ,-";
   ?></td><?php
 }

 ?>
                 </tr>
             </tbody>
         </table>
         <div id="page-container">
             <div id="pf1" class="pf w0 h0" data-page-no="1">
                 <div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt=""
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABKgAAAaVCAIAAACQxGAoAAAACXBIWXMAABYlAAAWJQFJUiTwAAAgAElEQVR42uzXQREAAAjDMMC/580Hl0jor5tkAAAA+OskAAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAABg/CQAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAGD8JAAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAYPwkAAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAABg/CQAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAxg9o+3VMAwAMAzBMQVLg+4Z0ODrZEPIFAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAIDxkwAAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAgPGTAAAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAOMHAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAAAwfgAAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAwPgBAABg/AAAADB+AAAAGD8AAACMHwAAAMYPAAAA4wcAAGD8AAAAMH4AAAAYPwAAAIwfAAAAxg8AAADjBwAAgPEDAADA+AEAABg/AAAAjB8AAADGDwAAAOMHAACA8QMAAMD4AQAAYPwAAACMHwAAAMYPAAAA4wcAAIDxAwAAwPgBAABg/AAAADB+AAAAxg8AAADjBwAAgPEDAADA+AEAAGD8AAAAMH4AAAAYPwAAAIwfAACA8QMAAMD4AQAAYPwAAAAwfgAAABg/AAAAjB8AAADGDwAAwDJ1FZYAAAAaSURBVPgBAABg/AAAAFg7fvdMVZIAAAD85QF/HhGITwlb6wAAAABJRU5ErkJggg==" />
                     <div class="c x1 y1 w2 h2">
                         <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0"> </div>
                     </div>
                     <div class="c x3 y1 w2 h2">
                         <div class="t m0 x4 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Banjarbaru $tanggal<span
                                 class="_ _0"></span> </div>
                     </div>
                     <div class="c x1 y3 w2 h2">
                         <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0"> </div>
                     </div>
                     <div class="c x3 y3 w2 h2">
                         <div class="t m0 x5 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0"> </div>
                     </div>
                     <div class="c x1 y4 w2 h2">
                         <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0"> </div>
                     </div>
                     <div class="c x3 y4 w2 h2">
                         <div class="t m0 x6 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Komisi Penyiaran<span class="_ _0"></span>
                             Indonesia Daerah </div>
                     </div>
                     <div class="c x1 y5 w2 h2">
                         <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0"> </div>
                     </div>
                     <div class="c x3 y5 w2 h2">
                         <div class="t m0 x4 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Kalimantan Selatan,<span
                                 class="_ _0"></span> </div>
                     </div>
                     <div class="c x1 y6 w2 h4">
                         <div class="t m0 x2 h3 y7 ff1 fs0 fc0 sc0 ls0 ws0"> </div>
                         <div class="t m0 x2 h3 y8 ff1 fs0 fc0 sc0 ls0 ws0"> </div>
                         <div class="t m0 x2 h3 y9 ff1 fs0 fc0 sc0 ls0 ws0"> </div>
                         <div class="t m0 x2 h3 ya ff1 fs0 fc0 sc0 ls0 ws0"> </div>
                         <div class="t m0 x2 h3 yb ff1 fs0 fc0 sc0 ls0 ws0"> </div>
                         <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0"> </div>
                     </div>
                     <div class="c x3 y6 w2 h4">
                         <div class="t m0 x5 h3 y7 ff1 fs0 fc0 sc0 ls0 ws0"> </div>
                     </div>
                     <div class="c x1 yc w2 h2">
                         <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0"> </div>
                     </div>
                     <div class="c x3 yc w2 h2">
                         <div class="t m0 x7 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Azhari Fadli, S.Pd.I<span
                                 class="_ _0"></span>. </div>
                     </div>
                     <div class="c x0 yd w3 h0">
                         <div class="t m0 x1 h3 ye ff1 fs0 fc0 sc0 ls0 ws0"> </div>
                     </div>
                 </div>
                 <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
             </div>
         </div>
         <div class="loading-indicator">
         </div>
     </div>
     <script>
     window.print();

     $(document).ready(function() {}

     );
     </script>
 </body>

 </html>