<?php

$rest_api_url = 'http://localhost:8000/parcels/' . $_POST["trackingNumber"];
$json_data = file_get_contents($rest_api_url);
$response_data = json_decode($json_data);

var_dump($response_data);