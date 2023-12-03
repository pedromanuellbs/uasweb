<div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: -1;"></div>
@extends('layout.layout_user')

@section('container')

    
<!-- choose 1 -->
<div class="container">
  <div class="dropdown">
<select class="form-select" aria-label="Default select example">
    <option selected>Dari stasiun mana?</option>
    <option value="WIL1" disabled="">------------AREA JABODETABEK------------</option>
    @foreach ($stasiun as $items)
      
      <option value={{$items['id']}}>{{$items['stasiun_awal']}}</option>
      @endforeach
  </select>
  <br>
<!-- choose 2 -->
<div class=".container">
   <div class="dropdown">
<select class="form-select" aria-label="Default select example">
    <option selected>Sampai stasiun mana?</option>
    <option value="WIL1" disabled="">------------AREA JABODETABEK------------</option>
    @foreach ($stasiun as $items)
      
      <option value={{$items['id']}}>{{$items['stasiun_tiba']}}</option>
      @endforeach
  </select>
  <br>
  <!-- Button -->
  <div class="d-flex justify-content-center">
    <div class="d-grid gap-1 col-1" style="width: 200px;">
        <a href='/lokasi-train/'>
          <button class="btn btn-danger" type="button" style="width: 100%;">
            SUBMIT
          </button></a>
    </div>
</div>
  <br>  
  
  <!-- card tarif kereta -->
  @php
    $nominal = mt_rand(3000, 6000);
@endphp

@foreach ($stasiun as $items)
    <div class="card w-80 mb-3">
        <div class="card-body">      
            <h5 class="card-title">{{ $items['stasiun_tiba'] }} - {{ $items['stasiun_awal'] }}</h5>
            <p class="card-text">Rp. {{ number_format($nominal, 2, ',', '.') }}</p>
        </div>
    </div>
    @break
@endforeach

@endsection

  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    