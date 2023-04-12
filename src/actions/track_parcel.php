<?php

$rest_api_url = 'http://localhost:8000/parcels/' . $_POST["trackingNumber"];
$json_data = file_get_contents($rest_api_url);

// Kijkt of de response van de API niet leeg is
if (!empty($json_data)) {
    $response_data = json_decode($json_data);

        $name = $response_data->name;
        $delivery_date = $response_data->deliveryDate;
        $delivery_address = $response_data->deliveryAddress;
        $delivery_zip = $response_data->deliveryZip;
        $delivery_city = $response_data->deliveryCity;
        $weight = $response_data->dimensions->weight;
        $length = $response_data->dimensions->length;
        $height = $response_data->dimensions->height;
        $width = $response_data->dimensions->width;
        $tracking_nummer = $response_data->trackingNumber;
        $status = $response_data->status;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DeliveryMatch Parcel Portal</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
</head>
<body class="text-center">
<main class="form-signin w-100 m-auto">
    <a class="btn btn-primary" href="../index.php" role="button">Ga terug</a>
    <!-- Kijk of de response leeg is. Zo niet, print de gegevens van het pakket. !-->
    <?php if (!empty($json_data)): ?>
        <h1>Je volgt pakket met trackingnummer: <?= $tracking_nummer ?></h1>
        <h2>Pakket wordt bezorgd op: <?= $delivery_date ?></h2><br>
        <p>Status: <?= $status ?></p>
        <p>Ontvanger: <?= $name ?></p>
        <p>Dimensies: Breedte <?= $width ?>cm x Lengte <?= $length ?>cm x Hoogte <?= $height ?>cm</p>
        <p>Gewicht: <?= $weight ?>KG</p>
    <!-- Zo ja, print dat het pakket niet gevonden is. !-->
    <?php else: ?>
        <h1>Pakket niet gevonden.</h1>
    <?php endif; ?>
</main>
</body>
