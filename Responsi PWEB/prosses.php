<?php
$pesan=$_POST['pesan'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
echo "<head><tittle><strong>Struk Pembelian</strong></tittle></head>";
$fp = fopen("pesanan.txt","a+");
fputs ($fp,"$pesan|$nama|$alamat\n");
fclose($fp);

echo "<br><br>Terima kasih<br>";
echo "Semoga Pelayanan Kami Tidak Mengecawakan Anda<br>";
echo "<a href=tampilan.php>Isi Form Pemesanan Makanan</a><br>";
echo "<a href=lihat.php>Lihat Pesanan Anda Disini</a><br>";
?> 