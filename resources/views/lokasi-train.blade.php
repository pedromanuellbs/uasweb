<!-- Background Overlay -->
<div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: -1;"></div>


@extends('layout.layout_user')

@section('container')
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Pilih Stasiun</h5>
                        <div class="input-group mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Stasiun</option>
                                <option value="WIL1" disabled="">------------AREA JABODETABEK------------</option>
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
                        <div class="d-grid gap-1">
                            <a href='/lokasi-train/'>
                                <button class="btn btn-primary text-white" type="button">SUBMIT</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tampilan jadwal kereta -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15">
                <div class="card shadow-lg p-2 mb-4 bg-white rounded">
                    <div class="card-body">
                        <div class="col-md-2 col-2 icon-kode-kereta">
                            <img src="https://commuterline.id/img/icon kereta.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="card shadow-lg p-2 mb-4 bg-white rounded">
                    <div class="card-body">
                        <div class="col-md-2 col-2 icon-kode-kereta">
                            <img src="https://commuterline.id/img/icon kereta.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- Card Tarif Kereta -->
                <div class="row justify-content-center mt-4">
                    @foreach ($train as $item)
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-3 col-4"></div>
                                    <div class="col-md-6 col-4">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $item['jurusan'] }} -
                                                {{ $items->stasiun_tiba }}
                                            </h5>
                                            <p class="card-text">{{ $item['kode_kereta'] }}</p>
                                            <p class="card-text">BERANGKAT TAMBUN</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-4">
                                        <div class="card-body">
                                            <br>
                                            <h6 class="card-text">{{ $item['jam_berangkat'] }} -
                                                {{ $item['jam_tiba'] }}
                                            </h6>
                                            <h6 class="card-text">{{ rand(1, 10) }} Stasiun</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
