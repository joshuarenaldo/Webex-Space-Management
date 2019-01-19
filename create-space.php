<?php
include 'function-api.php';
$listData = array(
  "title" => $_POST['nama_space']
);

$json_obj = json_encode($listData);
$create_space = panggilAPI('POST', 'https://api.ciscospark.com/v1/rooms', $json_obj);

header("location: http://localhost/test-api/ui-create-spaces.php");
?>
