<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        .carousel-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monitoring Kereta Api</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/music.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/music.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body style="background: url('https://assets-a1.kompasiana.com/items/album/2016/09/17/jadwal-commuter-line-krl-ka-commuter-line-depo-bekasi-gambar-kereta-api-wallpaper-keren-57dcdcc0d69373123e995f36.jpg?t=o&v=770') no-repeat fixed; background-size: cover; position: relative;">
    {{-- <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.50);"></div> --}}
    @include('components.header')


    <br>

    <div class="container" id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-bs-interval="3000">
        <!-- ... your carousel code ... -->
    </div>

    <div class="container text-center mt-4">
        <img src="http://banner-access.krl.co.id/banner-access/assets/maps/ce5f644e204ee3c8f90cae078a9fb7e1.png" alt="Your Image" style="width: 50%; height: auto;">
    </div>

    @include('components.footer') <!-- Uncomment this line -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-xxxxxxxx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
