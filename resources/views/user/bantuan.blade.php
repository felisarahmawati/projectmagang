@extends("layouts.user")
@section('container')

<section class="align-items-center  services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
        <div class="container mt-9 mb-4">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card" style="background-color: #fff;">
                        <div class="card-body">
                        <form action="/signup/index" method="POST" enctype="multipart/form-data">
                        @csrf
                            <label for="faq" class="form-label"><b>FAQ</b></label><hr>
                            <div class="card">
                                <div class="card-body">
                                    <a href="/user/jawaban1">Apa itu titipsini.com?</a>
                                </div>
                            </div>
                            <div class="card mt-2">
                                <div class="card-body">
                                    <a href="/user/jawaban2">Bagaimana cara membayar ?</a>
                                </div>
                            </div>
                            <div class="card mt-2">
                                <div class="card-body">
                                    <a href="/user/jawaban3">Bagaimana melihat profil anda ?</a>
                                </div>
                            </div>
                            <div class="card mt-2">
                                <div class="card-body">
                                    <a href="/user/jawaban4">Bagaimana cara pesan penitipan ?</a>
                                </div>
                            </div>
                            <div class="card mt-2">
                                <div class="card-body">
                                    <a href="/user/jawaban5">Mengapa saya tidak menerima kode OTP?</a>
                                </div>
                            </div><br>
                            <label for="faq" class="form-label">Hubungi Kami</label><br>
                            <a href="#" class="btn btn-success"><i class="bi bi-envelope"></i> Send E-mail</a>
                            <a href="#" class="btn btn-success"><i class="bi bi-telephone"></i> Call Us</a>
                            <div class="d-grid gap-2 mt-2">
                                <button class="btn btn-success" type="button"  href="#"><i class="bi bi-whatsapp" style="font-size: 20px"></i><b> WhatsApp</b></button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection