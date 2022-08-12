@extends('layouts.user')
@section('container')

<section class="align-items-center services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
    <div class="p-4 container card mb-5 mt-5" style="width: 75%" > 
    
    <div class="">
        <a href="/user/pemesanan/History/On_Progress" class="ps-3 "><i class="bi bi-arrow-left btn btn-success col-sm-1" style=" font-size: 20px; color: rgb(255, 255, 255);"></i></a>
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
      <a class="nav-link text-center" href="/user/pemesanan/History/On_Progress">On Progress</a>
    </li>
    <li class="nav-item col-md-6">
      <a class="nav-link active text-center" aria-current="page" href="/user/pemesanan/History/Last_Progress">Last Progress</a>
    </li>
   
  </ul>
        <div class="card mb-3  mt-2" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-2 p-4 justify-content-center">
                <img src="{{ asset('assets/img/icon_Barang.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-10 p-6">
                <div class="card-body">
                  <h5 class="card-title mt-2">Rebbeca Howard</h5>
                  <p class="card-text"><small class="text-muted">2 Items | 10 Days</small></p>
                  <h6 class="text-end" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-check-circle p-2" style="color: #27cd88"></i>Done</h6>
                </div>
              </div>
            </div>
          </div>
        
          <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-2 p-4 justify-content-center">
                <img src="{{ asset('assets/img/icon_kendaraan.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
            <div class="col-md-10 p-6">
                <div class="card-body">
                    <h5 class="card-title mt-2">Rebbeca Howard</h5>
                    <p class="card-text"><small class="text-muted">2 Items | 10 Days</small></p>
                    <h6 class="text-end " type="button" data-bs-toggle="modal" data-bs-target="#Modal"><i class="bi bi-x-circle p-2" style="color: red"></i>Cancelled</h6>
                </div>
            </div>
            </div>
          </div>
    </div>
    
</div> 
</div>   

</div>
<!--modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="color:#27cd88">Done</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h3 style="color:  #999">Detail Pemesanan</h3>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('assets/img/box.png') }}" class="card-img-top" style= "height: 180px" alt="...">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('assets/img/calender.png') }}" class="card-img-top" style= "height: 180px" alt="...">
                    </div>
                  </div>
                </div>
            </div>
        <div>
            <h3 style="color:  #999">Rincian Pembayaran</h3>
    
            
            <div class="row">
                <div class="col-md">
                    <p>Id Order</p>
                </div>
                <div class="col-md-8">
                    <p class="text-end">1796654634</p>
                </div>   
            </div>
            <div class="row">
                <div class="col-md">
                    <p>Barang</p>
                </div>
                <div class="col-md-8">
                    <p class="text-end">Meja, Lemari, Laptop, Tas</p>
                </div>   
            </div>
            <div class="row">
                <div class="col-md">
                    <p>Pick Up</p>
                </div>
                <div class="col-md-8">
                    <p class="text-end">Yes</p>
                </div>   
            </div><hr>

            <div class="row">
                <div class="col-md">
                    <p>Total Service</p>
                </div>
                <div class="col-md-8">
                    <p class="text-end">4 x 12</p>
                </div>   
            </div>
            <div class="row">
                <div class="col-md">
                    <p>Subtotal</p>
                </div>
                <div class="col-md-8">
                    <p class="text-end">IDR 3.500.000</p>
                </div>   
            </div>
            <div class="row">
                <div class="col-md">
                    <p>Discount 15%</p>
                </div>
                <div class="col-md-8">
                    <p class="text-end">IDR 500.000</p>
                </div>   
            </div><hr>

            <div class="row">
                <div class="col-md">
                    <p>Total Harga</p>
                </div>
                <div class="col-md-8">
                    <p class="text-end">IDR 3.000.000</p>
                </div>   
            </div><hr>

            <div class="row">
                <div class="col-md ">
                    <p>Metode Pembayaran</p>
                </div>
                <div class="col-md-8">
                    <p class="text-end">Transfer Bank</p>
                </div>   
                <a href="/user/pemesanan/struk">
                    <button type="button" class="btn btn-success col-md-12 mt-3">Lihat Bukti Pembayaran</button>
                </a>
            </div>

            
            <button type="button" class="btn btn-outline-success col-md-12 mt-3">Bantuan</button>
                
         </div>
        
        </div>
        </div>
       
      </div>
    </div>
</div>
<!--modal cancelled-->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal" style="color:#27cd88">Pending</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h3 style="color:  #999">Detail Pemesanan</h3>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                      <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('assets/img/box.png') }}" class="card-img-top" style= "height: 180px" alt="...">
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('assets/img/calender.png') }}" class="card-img-top" style= "height: 180px"
                            alt="...">
                        </div>
                      </div>
                    </div>
                </div>
            <div>
                <h3 style="color:  #999">Rincian Pembayaran</h3>
        
                
                <div class="row">
                    <div class="col-md">
                        <p>Id Order</p>
                    </div>
                    <div class="col-md-8">
                        <p class="text-end">1796654634</p>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Barang</p>
                    </div>
                    <div class="col-md-8">
                        <p class="text-end">Meja, Lemari, Laptop, Tas</p>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Pick Up</p>
                    </div>
                    <div class="col-md-8">
                        <p class="text-end">Yes</p>
                    </div>   
                </div><hr>
    
                <div class="row">
                    <div class="col-md">
                        <p>Total Service</p>
                    </div>
                    <div class="col-md-8">
                        <p class="text-end">4 x 12</p>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Subtotal</p>
                    </div>
                    <div class="col-md-8">
                        <p class="text-end">IDR 3.500.000</p>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Discount 15%</p>
                    </div>
                    <div class="col-md-8">
                        <p class="text-end">IDR 500.000</p>
                    </div>   
                </div><hr>
    
                <div class="row">
                    <div class="col-md">
                        <p>Total Harga</p>
                    </div>
                    <div class="col-md-8">
                        <p class="text-end">IDR 3.000.000</p>
                    </div>   
                </div><hr>
    
                <div class="row">
                    <div class="col-md ">
                        <p>Metode Pembayaran</p>
                    </div>
                    <div class="col-md-8">
                        <p class="text-end">Transfer Bank</p>
                    </div>   
                </div>
                
                <button type="button" class="btn btn-outline-success col-md-12 mt-3">Bantuan</button>
                    
            </div>
            
            </div>
            </div>
           
          </div>
        </div>
</div>
</section>
@endsection