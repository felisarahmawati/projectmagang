@extends('layouts.user')

@section('container')
    
<section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">

    <div class="section-title">
        <p>Detail Layanan</p>

        <img src="../../../assets/img/detaillayanan.png" alt="" width="440px" height="200px">

    </div>

    <div class="row justify-content-center">
        <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title text-success"><b>Detail Layanan</b></h5>
                    </div>
                    <div class="card-body">
                        
                        <div class="row g-3">
                            <div class="col-sm-12">
                                <label for="inputKendaraan" class="form-label"><b>Barang</b></label>
                                <select id="inputKendaraan" class="form-select">
                                    <option selected>Pilih Barang</option>
                                    <option>Tas</option>
                                    <option>Lemari</option>
                                    <option>Meja</option>
                                    <option>Kursi</option>
                                    <option>Kulkas</option>
                                    <option>Kompor</option>
                                    <option>Ac</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="tanggalmasuk" class="form-label"><b>Tanggal Masuk</b></label>
                                <input type="date" class="form-control" id="tanggal">
                            </div>
                            <div class="col-sm-6">
                                <label for="tanggalkeluar" class="form-label"><b>Tanggal Keluar</b></label>
                                <input type="date" class="form-control" id="tanggal">
                            </div>
                            <div class="col-sm-4">
                                <label for="qty" class="form-label"><b>Quantity</b></label>
                                <div class="box mt-3" width="100%">
                                    <label for="name">Tas : </label>
                                    <div class="dec button">-</div>
                                    <input type="text" name="qty" id="1" value="0" class="input-filed">
                                    <div class="inc button">+</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="box mt-5" width="100%">
                                    <label for="name">Meja : </label>
                                    <div class="dec button">-</div>
                                    <input type="text" name="qty" id="1" value="0" class="input-filed">
                                    <div class="inc button">+</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="box mt-5" width="100%">
                                    <label for="name">Kulkas : </label>
                                    <div class="dec button">-</div>
                                    <input type="text" name="qty" id="1" value="0" class="input-filed">
                                    <div class="inc button">+</div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="Note"><b>Catatan</b></label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-white"><i class="bi bi-bookmark-plus"></i></span>
                                    <input type="text" class="form-control bg-white" placeholder="eg.skooter" name="skooter">
                                </div>
                            </div>
                            <div style="margin-left: 25%;">
                                <div class="card text-center" style="width: 50%;">
                                    <div class="card-body bg-success text-white">
                                      <div class="row">
                                        <div class="col">
                                            <p class="checkin">Check in</p>
                                            <p class="date">26 Okt.2021</p>
                                        </div>
                                        <div class="col mt-2">
                                            <h1><i class="bi bi-chevron-right"></i></h1>
                                        </div>
                                        <div class="col">
                                            <p class="checkin">Check out</p>
                                            <p class="date">30 Okt.2021</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card-footer text-success bg-white">
                                        <b>Estimasi hari : 4 hari</b>
                                    </div>
                                  </div>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto" style="width:35%">
                                <a class="btn btn-outline-success" href="/user/pemesanan/barang" role="button">Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    
    </div>
</section>

@endsection
    
        <!-- End Services Section -->

