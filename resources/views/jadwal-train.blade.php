@extends('layout.layout_user')

@section('container')
    <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: -1;">
    </div>


    {{-- test doang --}}
    <style>
        .card {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 15px;
            width: 100%;
            box-sizing: border-box;
        }

        .card .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card .header .date {
            font-size: 18px;
            font-weight: bold;
        }

        .card .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }

        .card .content .details {
            display: flex;
            flex-direction: column;
        }

        .card .content .details .from-to {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card .content .details .date {
            margin-top: 5px;
        }

        .card .content .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        .gatau {
            height: 100%;
            display: flex;
            align-items: center;
        }
        .kartu {
            background-color: white;
            width: 1140px;
            height: 100px;
            border-radius: 10px;
            padding: 16px
        }
        .kartu_tabel {
            background-color: white;
            width: 1140px;
            height: 50px;
            border-radius: 10px;
            padding: 16px
        }

        .bungkus {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .kartu-test{
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
        .kereta {
            width: 250px;
            height: inherit;
            align-content: center;
        }
        .berangkat {
            height: inherit;
            width: 100px
        }
        .tabel_durasi {
            border-radius: 10px;
            overflow: hidden;
            background-color: blue;
        }

        .ikon {
            size: 50px;
            margin-left: 14px;
            font-size: 25px;
        }

        .pesan-btn {
            background-color: #ff6f00;
            border-radius: 4px;
            width: 85px;
            
        }
        


    </style>
    <div class="card mx-auto col-md-6 justify-content-center container mt-5">
        <div class="top-cols">
            <h3 class="goesto">Pemesanan Tiket Kereta Api</h3>
        </div>
        <div class="header">
            <p>Senin, 11 Desember 2023</p>
            <button class="button">Ganti Pencarian</button>
        </div>

        <div class="content">
            <div class="details">
                <table cellpadding="2">
                    <tr>
                        <td>
                            <label>Stasiun Asal:</label>
                        </td>
                        <td style="width: 50px">

                        </td>
                        <td>
                            <div class="input-group pl-5">

                                <input type="text" name="origination" value="" id="origination"
                                    class="form-control letter flexdatalist flexdatalist-set" placeholder="Stasiun Asal..."
                                    data-data="https://booking.kai.id/api/stations2"
                                    data-search-in="[&quot;name&quot;,&quot;code&quot;,&quot;cityname&quot;]"
                                    data-min-length="1" data-value-property="code" data-text-property="name"
                                    data-visible-properties="[&quot;name&quot;,&quot;code&quot;]"
                                    data-selection-require="true" tabindex="-1"
                                    style="position: absolute; top: -14000px; left: -14000px;">
                                <input type="text"
                                    class="form-control letter flexdatalist-alias origination-flexdatalist"
                                    name="flexdatalist-origination" id="origination-flexdatalist" placeholder="Stasiun Asal"
                                    autocomplete="off">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Stasiun Tujuan:</label>
                        </td>
                        <td style="width: 50px">

                        </td>
                        <td>
                            <div class="input-group">

                                <input type="text" name="origination" value="" id="origination"
                                    class="form-control letter flexdatalist flexdatalist-set"
                                    placeholder="Stasiun Tujuan..." data-data="https://booking.kai.id/api/stations2"
                                    data-search-in="[&quot;name&quot;,&quot;code&quot;,&quot;cityname&quot;]"
                                    data-min-length="1" data-value-property="code" data-text-property="name"
                                    data-visible-properties="[&quot;name&quot;,&quot;code&quot;]"
                                    data-selection-require="true" tabindex="-1"
                                    style="position: absolute; top: -14000px; left: -14000px;">
                                <input type="text"
                                    class="form-control letter flexdatalist-alias origination-flexdatalist col-mt-3"
                                    name="flexdatalist-origination" id="origination-flexdatalist"
                                    placeholder="Stasiun Tujuan" autocomplete="off">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="departure_dateh" class="goesto field-label-search">Tanggal
                                Keberangkatan:</label>
                        </td>
                        <td style="width: 50px">

                        </td>
                        <td>
                            <input type="text" name="tanggal" value="" id="departure_dateh"
                                class="form-control no-type hasDatepicker" data-error="Mohon diisi tanggal"
                                required="required" onkeypress="return: false;">
                        </td>
                        <td style="width: 100px">

                        </td>
                        <td>
                            <label for="dewasa" class="goesto">Dewasa:</label>
                        </td>
                        <td style="width: 10px">

                        </td>
                        <td>
                            <div class="form-group">

                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" data-type="minus"
                                        data-field="dewasa">
                                        <span class="glyphicon glyphicon-minus">
                                        </span>
                                    </button>
                                </span>
                                <input class="form-control input-number number" name="adult" min="1" max="10"
                                    id="dewasa" type="text" value="1">
                            </div>
                        </td>
                    </tr>

                </table>

                <div class="content">
                    <div class="details">

                        <div class="form-group col-md-3">


                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <input class="btn btn-primary btn-sample btn-search-booking" name="submit" id="submit"
                            type="submit" value="Cari &amp; Pesan Tiket">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


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
                                <option value="WIL1" disabled>------------AREA JABODETABEK------------
                                </option>
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
                                <button class="btn btn-primary text-white" type="button">
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

    <!-- Tabel jadwal kereta -->

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="table-responsive mt-4">
                    <table class="tabel_durasi table table-striped" style="width: 1150px; margin: 0 auto;">
                        <thead>
                            <tr>
                                <th style="padding: 10px;">Kereta</th>
                                <th style="padding: 10px;">Berangkat</th>
                                <th style="padding: 10px;">Durasi</th>
                                <th style="padding: 10px;">Tiba</th>
                                <th style="padding: 10px;">Harga</th>
                            </tr>
                        </thead>
                        <!-- Tambahkan konten tabel di sini -->
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    
    
    

    {{-- copasan dari bawah --}}
    <div class="container mt-5">
        <div class="row justify-content-center">
            
                <div class="bungkus">
                    <div class="kartu_tabel mb-3">
                        <div class="gatau">
                            {{-- <div class="col-md-4"></div> --}}
                            {{-- <div class="col-md-8"> --}}
                                <div class="card-body">
                                    <div class="kartu-test">
                                        <div class="kereta">
                                            <h5 class="card-title">
                                                Kereta
                                        </div>
                                        <div class="kereta">
                                            <h5 class="card-title">Berangkat</h5>
                                        </div>
                                        <div class="kereta">
                                            <h5>Durasi</h5>
                                        </div>
                                        <div class="kereta">
                                            <h5>Tiba</h5>
                                        </div>
                                        <div class="berangkat">
                                            <h5>Harga</h5>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
        </div>
    </div>



    <!-- Card Tarif Kereta -->
    <div class="content container mt-5">
        <div class="row justify-content-center">
            @foreach ($stasiun as $items)
                <div class="bungkus">
                    <div class="kartu mb-3">
                        <div class="gatau">
                                <div class="card-body">
                                    <div class="kartu-test">
                                        <div class="kereta">
                                            <h5 class="card-title" style="weight">
                                                GAMBIR (60)
                                                {{-- {{ $items['stasiun_tiba'] }} --}}
                                            </h5>
                                            
                                        <p class="card-text">Computer Line {{ $items['stasiun_tiba'] }}</p>
                                        
                                        </div>
                                        <div class="kereta">
                                            <h5 class="card-title">{{ $items['stasiun_tiba'] }}</h5>
                                            <p class="card-text">
                                                <?php
                                                $randomHour = str_pad(rand(0, 23), 2, '0', STR_PAD_LEFT);
                                                $randomMinute = str_pad(rand(0, 30) * 2, 2, '0', STR_PAD_LEFT);
                                                $randomTime = $randomHour . ':' . $randomMinute;
                                                echo $randomTime;
                                                ?>
                                                
                                            </p>
                                            tanggal
                                        </div>
                                        <div class="kereta">
                                            <i class=" ikon fa-solid fa-circle-arrow-right"></i>
                                            <p class="card-text">10j 30m</p>
                                        </div>
                                        <div class="kereta">
                                            Stasiun tiba disini
                                            <p class="card-text">
                                                <?php
                                                $randomHour = str_pad(rand(0, 23), 2, '0', STR_PAD_LEFT);
                                                $randomMinute = str_pad(rand(0, 30) * 2, 2, '0', STR_PAD_LEFT);
                                                $randomTime = $randomHour . ':' . $randomMinute;
                                                echo $randomTime;
                                                ?>
                                            </p>
                                            Tanggal disini
                                        </div>
                                        <div class="kereta">
                                            Rp 680.000,-
                                            <p>
                                                <button class="pesan-btn">Beli</button>
                                            </p>
                                            Tersisa 1 kursi
                                        </div>
                                    </div> 
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
    </div>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
