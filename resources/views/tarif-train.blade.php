<!-- Background Overlay -->
<div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: -1;">
</div>

@extends('layout.layout_user')

@section('container')
    <div class="container mt-5">
        <!-- Choose Departure Station -->
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">Pilih Stasiun Keberangkatan</h5>
                <div class="dropdown">
                    <select class="form-select" aria-label="Departure Station">
                        <option selected>Dari stasiun mana?</option>
                        <option value="WIL1" disabled>------------AREA JABODETABEK------------</option>
                        <option value="CK">CISAUK</option>
                        <option value="CK">TANAH ABANG</option>
                        <option value="PH">PALMERAH</option>
                        <option value="RB">RANGKASBITUNG</option>
                        <option value="DK">DEPOK</option>
                        <option value="DB">DEPOK BARU</option>
                        <option value="DI">DURI</option>
                        <option value="GL">GROGOL</option>
                        <option value="JA">JAKARTAKOTA</option>
                        @foreach ($stasiun as $items)
                            <option value={{ $items['id'] }}>{{ $items['stasiun_awal'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <!-- Choose Destination Station -->
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">Pilih Stasiun Tujuan</h5>
                <div class="dropdown">
                    <select class="form-select" aria-label="Destination Station">
                        <option selected>Sampai stasiun mana?</option>
                        <option value="WIL1" disabled>------------AREA JABODETABEK------------</option>
                        <option value="CK">CISAUK</option>
                        <option value="CK">TANAH ABANG</option>
                        <option value="PH">PALMERAH</option>
                        <option value="RB">RANGKASBITUNG</option>
                        <option value="DK">DEPOK</option>
                        <option value="DB">DEPOK BARU</option>
                        <option value="DI">DURI</option>
                        <option value="GL">GROGOL</option>
                        <option value="JA">JAKARTAKOTA</option>
                        @foreach ($stasiun as $items)
                            <option value={{ $items['id'] }}>{{ $items['stasiun_tiba'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <!-- Submit Button -->
        <div class="d-flex justify-content-center">
            <div class="d-grid gap-1 col-4" style="width: 200px;">
                <a href='/lokasi-train/'>
                    <button class="btn btn-primary text-white" type="button" style="width: 100%;">SUBMIT</button>
                </a>
            </div>
        </div>
    </div>

    <!-- Biaya Tarif Kereta -->
    <div class="d-flex justify-content-center">
        <img src="https://commuterline.id/img/kmt.png" alt="">
    </div>
    <div class="d-flex justify-content-center">
        <div class="ajax-response">
            <p id="from-to">-</p>
            <span id="ongkos">Rp </span>
        </div>
    </div>


    @php
        $nominal = mt_rand(3000, 6000);
    @endphp

    @foreach ($stasiun as $items)
        <div class="container mt-3">
            <!-- Card Tarif Kereta -->
            <div class="card w-80">
                <div class="card-body">
                    <h5 class="card-title">{{ $items['stasiun_tiba'] }} - {{ $items['stasiun_awal'] }}</h5>
                    <p class="card-text">Rp. {{ number_format($nominal, 2, ',', '.') }}</p>
                </div>
            </div>
        </div>
    @break
@endforeach
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
