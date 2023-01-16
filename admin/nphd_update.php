<?php
include '../koneksi.php';
$id  = $_POST['id'];
$uraian  = $_POST['uraian_nphd'];
$volume  = $_POST['volume_nphd'];
$satuan  = $_POST['satuan_nphd'];
$tarif  = $_POST['tarif_nphd'];

mysqli_query($koneksi, "update nphd set uraian_nphd='$uraian', volume_nphd='$volume', satuan_nphd='$satuan',tarif_nphd='$tarif' where id_nphd='$id'") or die(mysqli_error($koneksi));
header("location:nphd.php");
