{{-- NAVBAR --}}
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #222;">
        <!-- Logo/Gambar -->
        <a class="navbar-brand" href="/" style="margin-left: 20px">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg/2560px-Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg.png"
                alt="Logo" width="60" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu Tengah -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="margin-right: auto">
                <li class="nav-item" style="margin-right: 20px;">
                    <a class="nav-link @if ($page == 'lokasi') {{ 'active' }} @endif" aria-current="page"
                        href="/lokasi-train">
                        LOKASI KERETA
                    </a>
                </li>
                <li class="nav-item" style="margin-right: auto">
                    <a class="nav-link @if ($page == 'jadwal') {{ 'active' }} @endif"
                        href="/jadwal-train">
                        PESAN TIKET
                    </a>
                </li>


            </ul>
            <ul class="navbar-nav mr-auto">
                <li style="margin-right: 20px" class="nav-item navbar-right">
                    <a class="nav-link @if ($page == 'login') {{ 'active' }} @endif"
                        href="/login-train">
                        AKUN
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
