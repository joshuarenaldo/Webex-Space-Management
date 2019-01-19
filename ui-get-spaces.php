<?php
include 'function-api.php';
$get_spaces = panggilAPI('GET', 'https://api.ciscospark.com/v1/rooms', false);
$response = json_decode($get_spaces, true);

echo "<title>Webex API - Joshua</title>";
echo "<h2>List Space dari Webex</h2>";
echo "<hr>";
echo "<table border='2'";
echo "<tr><th>Nama Space</th><th>Tipe Space</th><th>Tanggal Dibuat</th></tr>";

foreach($response as $value) {
  foreach ($value as $index => $baris) {
    echo "<tr>";
    echo "<td>".$baris['title']."</td>";
    echo "<td>".$baris['type']."</td>";
    echo "<td>".$baris['created']."</td>";
    echo "</tr>";
  }
}

?>
