@extends("layouts.main")
@section('container')
    
<section id="services" class="services section-bg" style="padding-top: 100px;">
    <div class="container mt-3 mb-3">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        
        @include('partials.profile')
          <div class="row justify-content-center">
            <div class="col" style="width: 800px">
                <div class="card" style="background-color: #fff;">
                  <div class="card-body">
                  <form action="/signup/index" method="POST" enctype="multipart/form-data">
                    @csrf
                    <br>
                    <h5 class="card-title text-center" style="color: rgb(26, 25, 25);"><b>Kebijakan Privasi</b></h5><hr>
                    <div class="alert text-justify">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit eget tortor facilisis quisque vitae arcu massa. Mauris nunc velit donec porta sem ipsum tortor facilisis mauris. Facilisis elit magna venenatis, enim, diam aenean luctus. Integer dictum ullamcorper urna mollis augue rhoncus, ac.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id laoreet fames donec sed. Id lacus purus mattis nam in viverra rutrum risus nibh. A ultrices malesuada lacus sapien. At nulla tempus, libero iaculis orci iaculis.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id laoreet fames donec sed. Id lacus purus mattis nam in viverra rutrum risus nibh. A ultrices malesuada lacus sapien. At nulla tempus, libero iaculis orci iaculis.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id laoreet fames donec sed. Id lacus purus mattis nam in viverra rutrum risus nibh. A ultrices malesuada lacus sapien. At nulla tempus, libero iaculis orci iaculis.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id laoreet fames donec sed. Id lacus purus mattis nam in viverra rutrum risus nibh. A ultrices malesuada lacus sapien. At nulla tempus, libero iaculis orci iaculis.</p>
                    </div>
                      {{-- <div class="d-grid gap-2">
                          <button class="btn btn-secondary" type="button"  href="#"><b>Kembali</b></button>
                      </div> --}}
                  </form>
                  </div>
                </div>
              </div>
          </div>
      </div>
</section>
@endsection