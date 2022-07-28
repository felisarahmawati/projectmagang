@extends('layouts.main')

@section('container')
    
            <section id="services" class="services section-bg" style="padding-top: 100px;">
                <div class="container detail_layanan" data-aos="fade-up">

                    <div class="section-title">
                        <p>Detail Layanan</p>

                        <img src="../../assets/img/detaillayanan.png" alt="" width="550px" height="300px">

                    </div>
            <div class="container-fluid">
                {{-- Card Packing and order --}}
                <div class="row g-3" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000">
                    <div class="col-md-6 mt-4 pe-2">
                        <div class="card-packing d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
                            <div class="card padding-top: 10px" style="width: 25rem;">
                                <img src="../../assets/img/date.png" class="card-img-top" alt="...">
                                <div class="card-body text-center text-success">
                                <p class="card-text"><b>Estimasi hari : 4 Hari</b></p>
                                </div>
                            </div>
                            <hr width="75%" color="#c0c0c0">
                            <div class="col" style="padding-top: 10px;">
                                <div class="form-check form-check-inline form-switch">
                                    <label for="check1" class="form-check-label"><b>Packing</b></label>
                                    <input type="checkbox" class="form-check-input" value="" id="check1">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card form layanan --}}
                    <div class="col-md-6 mt-4 pe-10 ps-2 mb-1 container">
                        <div class="card-layanan d-flex flex-column px-0 py-4">
                            <div class="id-layanan px-3">
                                <h6 class="mb-1 fw-bold text-center"><b>Layanan Bangunan</b></h6>
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <div class="col-md-20">
                                <label for="inputKendaraan" class="form-label"><b>Bangunan</b></label>
                                <select id="inputKendaraan" class="form-select">
                                    <option selected>Pilih Bangunan</option>
                                    <option>Rumah</option>
                                    <option>Apartemen</option>
                                    <option>Kosan</option>
                                    <option>Gudang</option>
                                    <option>Kamar</option>
                                </select>
                            </div>
                            <div class="mb-3" style="padding-top: 10px;">
                                <label for="exampleFormControlInput1" class="form-label"><b>Tanggal Masuk</b></label>
                                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="14-08-2022">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><b>Tanggal Keluar</b></label>
                                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="05-03-2022">
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="Quantity"><b>Bangunan</b></label>
                                    <div class="input-group mb-3" style="width: 130px">
                                        <button class="input-group-text decrement-btn">-</button>
                                        <input type="text" class="form-control text-center input-qty bg-white" value="1" disabled>
                                        <button class="input-group-text increment-btn">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group mb-3" style="width: 320%">
                                        <span class="input-group-text bg-white"><i class="bi bi-bookmark-plus"></i></span>
                                        <input type="text" class="form-control bg-white" placeholder="eg.kosan" name="kosan">
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-success" type="button"><a href="/user/pemesanan/pemesanan">Order</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
   @endsection