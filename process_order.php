<?php
$nama            =$_POST['nama'];
$alamat          =$_POST['alamat'];
$email           =$_POST['email'];
$skincare        =$_POST['skincare'];
$pesan           =$_POST['pesan'];

echo " <head><title>Toko Skincare </head></title>";
$fp = fopen("orders.txt","a+");
fputs($fp,"$nama|$alamat|$email|$skincare|$pesan\n");
fclose($fp);

echo "<h2>Pesanan Anda telah berhasil diproses!</h2>";
echo "<h2>Terima Kasih Telah Belanja Di Toko Skincare Kami </h2>";
echo "<a href=index.html> Kembali Ke Halaman Awal </a><br>";
echo "<a href=lihat.php> Lihat Data Order </a><br>";
?>