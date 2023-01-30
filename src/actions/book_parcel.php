<?php

// TODO: parcel aanmelden bij je eigen gemaakte backend.

$bookingResult = "Booking successfully";
$query = http_build_query(["message" => $bookingResult]);
header("Location: http://{$_SERVER['HTTP_HOST']}?$query");
