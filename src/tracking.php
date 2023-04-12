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
    <a class="btn btn-primary" href="index.php" role="button" style="margin: 20px;">Verzend pakket</a>
    <form action="actions/track_parcel.php" method="post">
        <img class="mb-4" src="./assets/deliverymatch-logo.png" alt="" height="57">
        <h1 class="h3 mb-3 fw-normal">Please provide parcel tracking number</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="trackingNumber">
            <label for="floatingInput">Tracking number</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-5" type="submit">Get tracking information</button>
        <?php
            if (!empty($_GET['parcel-status'])) {
                echo "<p class='mt-5 mb-3'>Package status: <strong>{$_GET['parcel-status']}</strong></p>";
            }
            if (!empty($_GET['delivery-date'])) {
                echo "<p class='mt-5 mb-3'>Delivery date: <strong>{$_GET['delivery-date']}</strong></p>";
            }
        ?>
    </form>
</main>


</body>
</html>