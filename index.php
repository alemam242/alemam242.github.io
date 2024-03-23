<?php
$response = [
  "ip"=>$_SERVER["REMOTE_ADDR"];
  ];
echo json_encode($response);

?>
