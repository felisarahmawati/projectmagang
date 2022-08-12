@extends('layouts.user')
@section('container') 
<section class="align-items-center services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
  <div class="p-4 container card mb-5" style="width: 75%" > 
  
  <div class="">
      <a href="/user/index" class="ps-3 "><i class="bi bi-arrow-left btn btn-success col-sm-1" style=" font-size: 20px; color: rgb(255, 255, 255);"></i></a>
      <div class="card-body">
      <nav aria-label="breadcrumb "  class="card-header" style="height: 40px; width:100%">
          <ol class="breadcrumb ">
              <li class="breadcrumb-item"><a href="#">History</a></li>
              <li class="breadcrumb-item active" aria-current="page">Your History Service</li>
          </ol>
      </nav>
      </div>
  </div>
<div class="container col-sm-12">
<ul class="nav nav-tabs">
  <li class="nav-item col-md-6">
    <a class="nav-link text-center active" aria-current="page" href="/user/pemesanan/History/On_Progress">On Progress</a>
  </li>
  <li class="nav-item col-md-6">
    <a class="nav-link text-center"  href="/user/pemesanan/History/Last_Progress">Last Progress</a>
  </li>
 
    </ul>
    
        <div class="card mb-3 mt-3" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-2 p-4 justify-content-center">
                <img src="{{ asset('assets/img/icon_kendaraan.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-10 p-6">
                <div class="card-body"><br>
                  <h5 class="card-title">Rebbeca Howard</h5>
                  <p class="card-text"><small class="text-muted">2 Items | 10 Days</small></p>
                  <h6 class="card-text text-end "><i class="bi bi-check-circle p-2" style="color: blue"></i> bayar</h6>
                </div>
              </div>
            </div>
          </div>
        
          <div class="card mb-3 " style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-2 p-4 justify-content-center">
                <img src="{{ asset('assets/img/box.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-10 p-6">
                <div class="card-body"><br>
                    <h5 class="card-title mt-2">Rebbeca Howard</h5>
                    <p class="card-text"><small class="text-muted">2 Items | 10 Days</small></p>
                    <h6 class="text-end" type="button" ><i class="bi bi-x-circle p-2" style="color: blue"></i>Pending</h6>
                  </div>
              </div>
            </div>
          </div>
    </div>
@endsection


