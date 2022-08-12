@extends('layouts.user')
@section('container')
<section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
    
    <div class="row justify-content-center">
        <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body mb-4" style="background: rgba(251, 244, 175, 0.45)">
                            <p class="mb-1" style="color: rgba(254, 171, 114, 1)"><b>Caution:</b></p>
                            <p class="mb-1" style="color: rgba(254, 171, 114, 1)">
                                Pastikan anda telah melengkapi seluruh informasi
                                sebelum upload bukti transfer. Titipsini.com akan memeriksa
                                bukti anda dalam 24 jam.
                            </p>
                        </div>
                        <form action="/signup/index" method="POST" enctype="multipart/form-data">
                            <label for="faq" class="form-label"><b>Info Rek Bank :</b></label><hr>
                            <p class="bukti text-secondary text-center"><b>Bukti Transfer*</b></p>
                                <div class="text-center">
                                    <img src="../../assets/img/placehold.jpg" class="rounded" id="showgambar" style="max-width:200px;max-height:200px;margin-bottom: 10px;">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile02">
                                    </div>
                                </div>
                                <div class="mb-3 mt-2">
                                    <label for="exampleFormControlInput1" class="form-label">Nama pengirim di rekening bank</label>
                                    <input type="nama" class="form-control" id="namaPengirim" placeholder="angel silubun">
                                </div>
                                <div class="mt-2">
                                    <p>Transfer dari bank</p>
                                    <select class="form-select" size="4" aria-label="size 3 select example">
                                        <option selected>Pilih bank : </option>
                                        <option value="1">BCA</option>
                                        <option value="2">BRI</option>
                                        <option value="3">MANDIRI</option>
                                        <option value="4">BNI</option>
                                    </select>
                                </div>
                                <div class="mb-3 mt-2">
                                    <label for="exampleFormControlInput1" class="form-label">Masukan no rekening anda</label>
                                    <input type="norek" class="form-control" id="noRek" placeholder="1231241921">
                                </div>
                                <div class="mb-3 mt-2">
                                    <label for="exampleFormControlInput1" class="form-label">Jumlah yang ditransfer</label>
                                    <input type="jumlah" class="form-control" id="jumlahTf" placeholder="Rp 1.000.000">
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <a class="btn btn-outline-success" href="/user/pemesanan/struk" role="button">Kirimkan</a>
                                </div>
                        </form>
                    </div>
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