{{-- NAVBAR --}}
<header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: transparent;">
        <div class="container-fluid">
            <!-- Logo/Gambar -->
            <a class="navbar-brand" href="/">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg/2560px-Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg.png"
                alt="Logo" width="60" height="30">
            </a>
            
            <!-- Menu Tengah -->
            <div class="navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                  <li class="nav-item" style="margin-right: 20px;">
                    <a class="nav-link" aria-current="page" href="/lokasi-train">
                        {{-- lokasi kereta --}}
                        <i class="fa-solid fa-location-crosshairs fa-fade fa-2xl"></i>
                    </a>
                  </li>
                  <li class="nav-item" style="margin-right: 20px;">
                    <a class="nav-link active" href="/jadwal-train" style="color: white;">
                        {{-- jadwal kereta --}}
                        <i class="fa-solid fa-calendar fa-fade fa-2xl" style="color: #ffffff;"></i>
                    </a>
                  </li>
                  <li class="nav-item" style="margin-right: 20px;">
                    <a class="nav-link" href="/tarif-train" style="color: white">
                        {{-- tarif --}}
                        <i class="fa-solid fa-money-bill-wave fa-fade fa-2xl" style="color: #ffffff;"></i>
                    </a>
                </ul>     
        </div>
    </nav>
</header>