<div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: -1;"></div>
@extends('layout.layout_user')

@section('container')

<div class="container-fluid">
  <div class="dropdown">
<select class="form-select" aria-label="Default select example">
    <option selected>Pilih Stasiun</option>
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
  @foreach ($train as $item)
  <div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-3 col-4">
        </div>
        <div class="col-md-6 col-4">
            <div class="card-body">
                <h5 class="card-title">{{$item['jurusan']}} - {{$items->stasiun_tiba}}</h5>
                <p class="card-text">{{$item['kode_kereta']}}</p>
                <p class="card-text">BERANGKAT TAMBUN</p> 
            </div>
        </div>
        <div class="col-md-3 col-4">
            <div class="card-body">
                <br>
                <h6 class="card-text">{{$item['jam_berangkat']}} - {{$item['jam_tiba']}}</h6>
                <h6 class="card-text">{{ rand(1, 10) }} Stasiun</h6>

            </div>
        </div>
    </div>
</div>
  @endforeach
    
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</body>
</html>
