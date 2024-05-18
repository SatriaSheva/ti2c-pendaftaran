<?php
include("config.php");
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
 // ambil data dari formulir
 $id = $_POST['id'];
 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $jk = $_POST['jenis_kelamin'];
 $agama = $_POST['agama'];
 $sekolah = $_POST['sekolah'];
 // buat query update
 $sql = "UPDATE daftar SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk',
 agama='$agama',$sekolah='$sekolah' WHERE id=$id";
  $query = mysqli_query($db, $sql);
  // apakah query update berhasil?
  if( $query ) {
  // kalau berhasil alihkan ke halaman list-siswa.php
  header('Location: list-siswa.php');
  } else {
  // kalau gagal tampilkan pesan
  die("Gagal menyimpan perubahan...");
  }
 } else {
  die("Akses dilarang...");
 }
 ?>