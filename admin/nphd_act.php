<?php
include '../koneksi.php';
$ket = $_POST['uraian_nphd'];
$uraian  = $_POST['uraian_nphd'];
$kategori  = $_POST['kategori_nphd'];
$volume  = $_POST['volume_nphd'];
$satuan  = $_POST['satuan_nphd'];
$tarif  = $_POST['tarif_nphd'];
$tahun = $_POST['tahun'];
// echo "insert into nphd values (NULL,'$ket','$volume','$satuan','$tarif')";
if ($uraian == "") {
	mysqli_query($koneksi, "insert into nphd values (NULL,'$kategori','$kategori','$volume','$satuan','$tarif','$tahun')") or die(mysqli_error($koneksi));
	header("location:nphd.php?alert=berhasil");
} else {
	mysqli_query($koneksi, "insert into nphd values (NULL,'$uraian','$kategori','$volume','$satuan','$tarif','$tahun')") or die(mysqli_error($koneksi));
	header("location:nphd.php?alert=berhasil");
}
