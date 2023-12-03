@extends('layout.layout_user')

@section('container')
  <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: -1;"></div>
  
  <!-- choose 1 -->
  <div class="container">
    <div class="dropdown">
      <select class="form-select" aria-label="Default select example">
        <option selected>Dari stasiun mana?</option>
        <option value="WIL1" disabled="">------------AREA JABODETABEK------------</option>
        @foreach ($stasiun as $items)
          <option value={{$items['id']}}>{{$items['stasiun_tiba']}}</option>
        @endforeach
      </select>
      <br>
    </div>
  </div>

  <!-- Button -->
  <div class="d-flex justify-content-center">
    <div class="d-grid gap-1 col-1" style="width: 200px;">
      <a href='/lokasi-train/'>
        <button class="btn btn-danger" type="button" style="width: 100%;">
          SUBMIT
        </button>
      </a>
    </div>
  </div>

  <!-- JAM -->
  <div class="col-md-12">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-5 box-time">
          <div>
            <p>Jam Datang</p>
            <select class="form-select" id="jam-from">
              <option selected>-</option>
              <!-- Jam options here -->
            </select>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- card tarif kereta -->
  @foreach ($stasiun as $items)
    <div class="container">
      <div class="card mb-3" >
        <div class="row g-0">
          <div class="col-md-4"></div> 
          <div class="col-md-4">
            <div class="card-body">
              <h5>{{ $items['stasiun_tiba'] }}</h5>
              <p class="card-text">Computer Line {{ $items['stasiun_tiba'] }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <br>
              <p class="card-text">
                <?php
                  $randomHour = str_pad(rand(0, 23), 2, '0', STR_PAD_LEFT); // Generates random hour from 00 to 23
                  $randomMinute = str_pad(rand(0, 30) * 2, 2, '0', STR_PAD_LEFT); // Generates random minute in intervals of 2 from 00 to 30
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
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
