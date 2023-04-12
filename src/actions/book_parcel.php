<?php
$rest_api_url = 'http://localhost:8000/parcels';

// Versturen en ophalen van data over HTTP
// Initialiseer een nieuwe curl sessie
$curl = curl_init($rest_api_url);

curl_setopt($curl, CURLOPT_URL, $rest_api_url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// http_build_query zet een array om in een string die kan worden gebruikt als query in de POST van de API.
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

$response = curl_exec($curl);
curl_close($curl);
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
    <h1><?php echo $response; ?></h1>
</main>
</body>
