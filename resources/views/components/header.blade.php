{{-- NAVBAR --}}
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #222;">
        <div class="container-fluid">
            <!-- Logo/Gambar -->
            <a class="navbar-brand" href="/">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg/2560px-Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg.png"
                    alt="Logo" width="60" height="30">
            </a>

            <!-- Menu Tengah -->
            <div class="navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link @if ($page == 'lokasi') {{ 'active' }} @endif"
                            aria-current="page" href="/lokasi-train">
                            LOKASI KERETA
                        </a>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link @if ($page == 'jadwal') {{ 'active' }} @endif"
                            href="/jadwal-train">
                            PESAN TIKET
                        </a>
                    </li>
                    {{-- <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link @if ($page == 'tarif') {{ 'active' }} @endif"
                            href="/tarif-train">
                            <i class="fa-solid fa-money-bill-wave fa-fade fa-2xl"></i> Tarif
                        </a>
                    </li> --}}
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link @if ($page == 'login') {{ 'active' }} @endif"
                            href="/login-train">
                            AKUN
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
