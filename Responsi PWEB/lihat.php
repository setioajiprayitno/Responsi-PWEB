<?php 

echo "<head><title>keranjang</title></head>";
$fp = fopen("pesanan.txt","r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>alamat: </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>pesanan </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>nama: </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='tampilan.php'> Isi menu </a>";

?> 