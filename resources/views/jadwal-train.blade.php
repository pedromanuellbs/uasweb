@extends('layout.layout_user')

@section('container')
<div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: -1;"></div>

<!-- Form Stasiun -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Pilih Stasiun</h5>
                    <div class="input-group mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Dari stasiun mana?</option>
                            <option value="WIL1" disabled>------------AREA JABODETABEK------------</option>
                            @foreach ($stasiun as $items)
                            <option value={{$items['id']}}>{{$items['stasiun_tiba']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-grid gap-1">
                        <a href='/lokasi-train/'>
                            <button class="btn btn-danger" type="button">
                                SUBMIT
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jam Datang -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Jam Datang</h5>
                    <div class="input-group mb-3">
                        <select class="form-select" id="jam-from">
                            <option selected>-</option>
                            <!-- Jam options here -->
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Card Tarif Kereta -->
<div class="container mt-5">
    <div class="row justify-content-center">
        @foreach ($stasiun as $items)
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $items['stasiun_tiba'] }}</h5>
                            <p class="card-text">Computer Line {{ $items['stasiun_tiba'] }}</p>
                            <p class="card-text">
                                <?php
                                    $randomHour = str_pad(rand(0, 23), 2, '0', STR_PAD_LEFT);
                                    $randomMinute = str_pad(rand(0, 30) * 2, 2, '0', STR_PAD_LEFT);
                                    $randomTime = $randomHour . ":" . $randomMinute;
                                    echo $randomTime;
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
