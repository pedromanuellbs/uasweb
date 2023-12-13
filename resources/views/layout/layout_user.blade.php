<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KAI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/music.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/music.png">
</head>
@if ($page == 'home')

    <body class="d-flex flex-column"
        style="background: url('https://assets-a1.kompasiana.com/items/album/2016/09/17/jadwal-commuter-line-krl-ka-commuter-line-depo-bekasi-gambar-kereta-api-wallpaper-keren-57dcdcc0d69373123e995f36.jpg?t=o&v=770') no-repeat fixed; background-size: cover; position: relative;">
    @else

        <body class="d-flex flex-column">
@endif


@include('components.header')

<div class="pt-5">@yield('container')</div>

<div class="pt-5" style="flex: 1 0 auto;"></div>
@include('components.footer')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</body>

</html>
