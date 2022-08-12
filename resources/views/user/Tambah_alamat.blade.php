@extends('layouts.user')
@section('container')
<section id="services" class="services" style="padding-top: 100px;">
<div class="container mt-4 mb-4">

    <div class="row row-cols-1 row-cols-md-2 g-4">
        @include('partials.profile')
        <div class="col" style="width: 700px">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Tambah Alamat</h5>
              <hr width="100%" color="#c0c0c0">
              <form action="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input class="form-control" type="text" placeholder="Nama Lengkap" aria-label="Disabled input example">

                    </div>
                
            
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kontak</label>
                        <input class="form-control" type="text" placeholder="Nomor Telepon" aria-label="Disabled input example">
                    </div>
    

                  <div class="mb-3">
                    <label for="text" class="col-sm-2 col-form-label">Alamat </label>
                    <div>
                        <p href=""><i class="bi bi-geo-alt px-1"></i>Pilih Lokasi Kamu</p>
                    </div>
                        <input class="form-control" type="text" placeholder="Provinsi, Kota, Kecamatan, Kode Pos" aria-label="Disabled input example" >
            
                   
                        <input class="form-control" type="text" placeholder="Nama Jalan" aria-label="Disabled input example">
                
                
                        <input class="form-control" type="text" placeholder="catatan : masuk gang depan" aria-label="Disabled input example" >
                  </div>
                  <div class="cardHeader1" style="margin-top: 30px;">
                    <h6>Pilih sebagai alamat utama</h6>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>

                <button type="button" class="btn btn-success col-md-12 mt-3"><a href="/user/Alamat">Simpan</a></button>
              </form>
              
          </div>
        </div>
       
      </div>
    
</div>
@endsection