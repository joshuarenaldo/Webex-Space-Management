<?php
function panggilAPI($method, $url, $data) {
  $curl = curl_init();

  switch ($method) {
    case "POST":
      curl_setopt($curl, CURLOPT_POST, 1);

      if($data) {
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
      }
      break;
    default:
      if($data) {
        $url = sprintf("%s?%s", $url, http_build_query($data));
      }
  }

  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer {{Ini diganti Security Token RESTful API dari Cisco Webex}}',
    'Content-Type: application/json',
  ));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

  $result = curl_exec($curl);
  if(!$result) {
    die("Connection Failure");
  }
  curl_close($curl);

  return $result;
}

function getData($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $output = curl_exec($ch);

    curl_close($ch);

    return $output;
}

?>
