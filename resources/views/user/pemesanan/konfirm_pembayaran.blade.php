@extends('layouts.main')
@section('container')
<section id="services" class="services section-bg" style="padding-top: 80px;" data-aos-delay="50">
        
        <div class="container-fluid d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
            <div class="col-md-6 pe-10 ps-2 mb-10">
                <div class="card text-white" style="background-color:rgb(255, 199, 110)">
                    <div class="card-body" style="text-align: justify;">
                        <p class="mb-1"><b>Caution:</b></p>
                        <p>Pastikan anda telah melengkapi seluruh informasi
                            sebelum upload bukti transfer. Titipsini.com akan memeriksa
                            bukti anda dalam 24 jam.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
            <div class="col-md-6 pe-10 ps-2 mb-10">
                <div class="card" style="background-color: #fff;">
                    <div class="card-body">
                        <form action="/signup/index" method="POST" enctype="multipart/form-data">
                            <label for="faq" class="form-label"><b>Info Rek Bank :</b></label><hr>
                            <p class="bukti text-secondary text-center"><b>Bukti Transfer*</b></p>
                                <div class="text-center">
                                    <img src="{{ asset('assets/img/placehold.jpg') }}" class="rounded" id="showgambar" style="max-width:200px;max-height:200px;margin-bottom: 10px;">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile02">
                                    </div>
                                </div>
                                <div class="form-floating mb-3 mt-2">
                                    <input type="nama" class="form-control" id="floatingInput" placeholder="angel silubun">
                                    <label for="floatingInput">Nama pengirim di rekening bank</label>
                                </div>
                                <div class="mt-2">
                                    <div class="card text-bg-secondary">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md">
                                                    <p>Transfer dari bank</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn bg-white" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1">Pilih Bank</button>
                                                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <p class="modal-title" id="exampleModalLabel"><b>Pilih Bank</b></p>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                        Bank BCA
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                        Bank BRI
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                        Bank MANDIRI
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                        Bank BNI
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Konfirmasi</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="form-floating mb-3">
                                        <input type="rekno" class="form-control" id="floatingInput" placeholder="14082002">
                                        <label for="floatingRekening">Masukan no rekening anda</label>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="form-floating">
                                        <input type="jumlah" class="form-control" id="floatingPassword" placeholder="Rp 2.000">
                                        <label for="floatingJumlah">Jumlah di transfer</label>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
            <div class="col-md-6 pe-10 ps-2 mb-10">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-success" type="button"><a href="/user/pemesanan/struk">Kirimkan</a></button>
                </div>
            </div>
        </div>
        </div>
    </section>
        

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>titipsini.com</h3>
                        <p>
                            Gg. Puntodewo 212, Modalan, Banguntapan, Kec. Banguntapan <br>
                            Bantul, Yogyakarta<br>
                            Indonesia, 55198<br><br>
                            <strong>Phone:</strong> +62 8589 5548 2234<br>
                            <strong>Email:</strong> titipsiniofficial@main.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sosial Media Kami</h4>
                        <p>follow sosial media kami untuk update berita terbaru</p>
                        <div class="social-links mt-3">
                            <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                            <a href="https://m.facebook.com/profile.php?id=100060690075937" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/titipsini.co/" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCuAqwTJYTXP9i45XLeNVYlQ"
                                class="youtube"><i class="bx bxl-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>titipsini.com</span></strong>. All Rights Reserved
            </div>

        </div>

    </footer><!-- End Footer -->

   @endsection