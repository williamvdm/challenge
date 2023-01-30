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
    <form action="./actions/book_parcel.php" method="post">
        <img class="mb-4" src="./assets/deliverymatch-logo.png" alt="" height="57">
        <h1 class="h3 mb-3 fw-normal">Please provide parcel details</h1>

        <h1 class="h5 mb-3 fw-normal">Address details</h1>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="John Doe" name="name">
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating">
            <input type="date" class="form-control" id="floatingDate" name="deliveryDate">
            <label for="floatingDate">DeliveryDate</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingAddress" placeholder="Rivium Boulevard 201" name="address">
            <label for="floatingAddress">Address</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingPostcode" placeholder="2909 LK" name="postcode">
            <label for="floatingPostcode">Postcode</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingCity" placeholder="Capelle aan den IJssel" name="city">
            <label for="floatingCity">City</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingCountry" placeholder="NL" name="country">
            <label for="floatingCountry">Country (2 letter ISO-code)</label>
        </div>

        <h1 class="h5 mb-3 fw-normal">Parcel details</h1>
        <div class="form-floating">
            <input type="number" class="form-control" id="floatingWeight" placeholder="0" name="weight">
            <label for="floatingWeight">Weight (KG)</label>
        </div>

        <div class="form-floating">
            <input type="number" class="form-control" id="floatingLength" name="length" placeholder="0">
            <label for="floatingLength">Length (CM)</label>
        </div>

        <div class="form-floating">
            <input type="number" class="form-control" id="floatingHeight" name="height" placeholder="0">
            <label for="floatingHeight">Height (CM)</label>
        </div>

        <div class="form-floating">
            <input type="number" class="form-control" id="floatingWidth" name="width" placeholder="0">
            <label for="floatingWidth">Width (CM)</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-5" type="submit">Book parcel</button>
        <?php
            $message = $_GET['message'] ?? "";
            echo "<p class='mt-5 mb-3 text-muted'>$message</p>"
        ?>
    </form>
</main>


</body>
</html>