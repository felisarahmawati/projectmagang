@extends('layouts.main')
@section('container')
<section id="services" class="services section-bg" style="padding-top: 100px;">
<div class="container mt-4 mb-4">

    <div class="row row-cols-1 row-cols-md-2 g-4">
        @include('partials.profile')

        <div class="col" style="width: 700px">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><a href="/user/Alamat"><i class="bi bi-arrow-left px-2 "></i>Edit Alamat</h5>
              <hr width="100%" color="#c0c0c0">
              <form action="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input class="form-control" type="text" placeholder="Rebecca Howard" aria-label="Disabled input example">

                    </div>
                
            
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kontak</label>
                        <input class="form-control" type="text" placeholder="089598374543" aria-label="Disabled input example" >
                    </div>
    

                  <div class="mb-3">
                    <label for="text" class="col-sm-2 col-form-label">Alamat </label>
                    <div>
                        <p href=""><i class="bi bi-geo-alt px-1"></i>Pilih Lokasi Kamu</p>
                    </div>
                        <input class="form-control" type="text" placeholder="Tembelang,Jombang, Jawa Timur 123422" aria-label="Disabled input example">
            
                   
                        <input class="form-control" type="text" placeholder="Jln. Sukonandi No. 121 Santrean" aria-label="Disabled input example">
                
                
                        <input class="form-control" type="text" placeholder="Masuk Gng Depan" aria-label="Disabled input example">
                  </div>
                  <div class="cardHeader1" style="margin-top: 30px;">
                    <h6>Pilih sebagai alamat utama</h6>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>

                <button type="button" class="btn btn-outline-success col-md-12 mt-3">Hapus Alamat</button>
                <button type="button" class="btn btn-success col-md-12 mt-3"><a href="/user/Alamat">Simpan</a></button>
              </form>
              
          </div>
        </div>
       
      </div>
    
</div>

@endsection