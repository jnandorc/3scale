<?php
require_once('lib/ThreeScaleClient.php');

// initialize
$client = new ThreeScaleClient();

// the service token
$service_token = "7817e8cd5df81d0429941ae8b4c0b717761d18df9261904046ee3fb7273796841";

// the service_id
$service_id = "2555417766154";

// you will usually obtain app_id and app_key from the request params
$user_key = "9d364e3cef20438858970155df5afce2";

$response = $client->authrep_with_user_key($user_key, new ThreeScaleClientCredentials($service_id, $service_token), array('hits' => 1));

if ($response->isSuccess()) {
  // All fine, proceeed.
	echo "fine2!";
} else {
  // Something's wrong with this app.
	echo "worng";
}		  
?>