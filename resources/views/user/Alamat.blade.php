@extends("layouts.user")
@section('container')
    
<section id="services" class="services " style="padding-top: 100px;">
<div class="container mt-4 mb-4">

    <div class="row row-cols-1 row-cols-md-2 g-4">
        
        @include('partials.profile')
        <div class="" style="width: 700px">
          <div class="card col-sm-12">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Alamat Saya</h5>
              <hr width="100%" color="#c0c0c0">
              <div class="row">
                <div class="col-md-10">
                    <p><b>Rebbeca Howard</b></p>
                    <p>08934364865234</p>
                    <p>Jln. Sukonandi No. 121 Santrean, <p>Tembelang, Jombang,</p> Timur 35624</p>
                    <p class="card-text"><small class="text-muted">catatan: masuk gang ke arah timur</small></p>
                </div>
                <div class="col-md-2">
                  <p  class="text-end p-1"><a href="/user/edit_alamat"><i class="bi bi-pencil-square" style="font-size: 2rem"></i></a></p>
                </div>  
              </div>
             
                <hr width="100%" color="#c0c0c0">
                 <div class="row" >
                  <div class="col-md-10">
                    <p><b>Rebbeca Howard</b></p>
                    <p>08934364865234</p>
                    <p>Jln. Sukonandi No. 121 Santrean, <p>Tembelang, Jombang,</p> Timur 35624</p>
                    <p class="card-text"><small class="text-muted">catatan: masuk gang ke arah timur</small></p>
                </div>
                <div class="col-md-2">
                   <p  class="text-end p-1"> <a href="/user/edit_alamat"><i class="bi bi-pencil-square" style="font-size: 2rem"></i></a></p>
                </div>  
              </div>
  
            <hr width="100%" color="#c0c0c0">
            <div class="row">
                <div class="col-md-10">
                    <p><b>Rebbeca Howard</b></p>
                    <p>08934364865234</p>
                    <p>Jln. Sukonandi No. 121 Santrean, <p>Tembelang, Jombang,</p> Timur 35624</p>
                    <p class="card-text"><small class="text-muted">catatan: masuk gang ke arah timur</small></p>
                </div>
                <div class="col-md-2">
                  <p  class="text-end p-1"><a href="/user/edit_alamat" class="text-end"><i class="bi bi-pencil-square" style="font-size: 2rem"></i></a></p>
              </div>   
            </div>
      
            <a href="/user/Tambah_alamat"><button type="button" class="btn btn-outline-success col-md-12 mt-3">Tambah Alamat Baru</button></a>
          </div>
        </div>
       
      </div>
    
</div>
</section>
@endsection
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8ae831de67.js" crossorigin="anonymous"></script>
</body>
</html> --}}