@extends('layouts.main')
@section('container')
<section id="services" class="services section-bg" style="padding-top: 100px;">
    <div class="container mt-4 mb-4">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @include('partials.profile')
                <div class="col" style="width: 700px">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/user/profileuser"><i class="bi bi-arrow-left px-2 "></a></i>Profile</h5>
                      <hr width="100%" color="#c0c0c0">
                      <form action="">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="validationCustom01" value={{ Auth::user()->name }} required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="validationCustom01" value={{ Auth::user()->email }} required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">No_Telp </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="validationCustom01" value="0746348252475" required>
                            </div>
                          </div>
                      </form>   
                  </div>
                </div>
        </div>
          </div>
    </div>
</section>
@endsection

