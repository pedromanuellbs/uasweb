{{ $page = 'home' }}
@extends('layout.layout_user')
<style>
    .carousel-item img {
        width: 100%;
        height: 400px;
        object-fit: cover;
    }
</style>

@section('container')
    <br>

    <div class="container" id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-bs-interval="3000">
        <!-- ... your carousel code ... -->
    </div>

    <div class="container text-center mt-4">
        <img src="http://banner-access.krl.co.id/banner-access/assets/maps/ce5f644e204ee3c8f90cae078a9fb7e1.png"
            alt="Your Image" style="width: 50%; height: auto;">
    </div>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
