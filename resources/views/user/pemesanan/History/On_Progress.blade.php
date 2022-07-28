@extends('layouts.main')
@section('container') 

  <div class="container">
      <div class="card-body mt-2">
          <nav aria-label="breadcrumb" >
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">History</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Your History Service</li>
              </ol>
          </nav><hr>
      </div>
  </div>

  <div class="container cardBox1 justify-center col-mt-2">
        <div class="card2" style="width: 540px">
            <div>
                <a href="/user/pemesanan/History/On_Progress" style="text-decoration:none">
                <div class="cardName2">On progress</div>
                </a>
            </div>
        </div>
    
        <div class="card1 " style="width: 540px">
            <div>
                <a href="/user/pemesanan/History/Last_Progress" style="text-decoration:none">
                <div class="cardName1">Last Progress </div>
                </a>
            </div>
        </div>
  </div>
    <div class="container">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('assets/img/icon_kendaraan.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Rebbeca Howard</h5>
                  <p class="card-text"><small class="text-muted">2 Items | 10 Days</small></p>
                  <h6 class="card-text text-end "><i class="bi bi-check-circle p-2" style="color: blue"></i> bayar</h6>
                </div>
              </div>
            </div>
          </div>
        
          <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('assets/img/box.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title mt-2">Rebbeca Howard</h5>
                    <p class="card-text"><small class="text-muted">2 Items | 10 Days</small></p>
                    <h6 class="text-end " type="button" ><i class="bi bi-x-circle p-2" style="color: blue"></i>Pending</h6>
                  </div>
              </div>
            </div>
          </div>
    </div>
@endsection


