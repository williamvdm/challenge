<?php
$rest_api_url = 'http://localhost:8000/parcels';

$curl = curl_init($rest_api_url);
curl_setopt($curl, CURLOPT_URL, $rest_api_url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$data = http_build_query([
    "name" => $_POST["name"],
    "deliveryDate" => $_POST["deliveryDate"],
    "address" => $_POST["address"],
    "postcode" => $_POST["postcode"],
    "city" => $_POST["city"],
    "country" => $_POST["country"],
    "weight" => $_POST["weight"],
    "length" => $_POST["length"],
    "height" => $_POST["height"],
    "width" => $_POST["width"]
]);

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);
echo $resp;
curl_close($curl);