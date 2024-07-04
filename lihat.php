<?php
  echo "<html><head><title>Toko Skincare </title></head>";
  $fp = fopen("orders.txt", "r");
  echo "<table border=0>";

  while ($isi = fgets($fp))
  {
    $pisah = explode("|", $isi);
    echo "<tr><td>nama </td><td>: $pisah[0]</td></tr>";
    echo "<tr><td>alamat </td><td>: $pisah[1]</td></tr>";
    echo "<tr><td>email </td><td>: $pisah[2]</td></tr>";
    echo "<tr><td>skincare </td><td>: $pisah[3]</td></tr>";
    echo "<tr><td>pesan </td><td>: $pisah[4]</td></tr>";
    echo "<tr><td>&nbsp;</td><td><hr></td></tr>";
  }
  
?>
