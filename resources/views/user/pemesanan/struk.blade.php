@extends('layouts.user')

    <!-- card virtual akun -->
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
    
        <div class="row justify-content-center">
            <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body mb-4 text-center" style="background: rgba(56, 218, 119, 0.15)">
                                <img src="../../assets/img/titip.png" alt="titip" width="100px" height="100px">
                                <p class="card-text text-success mb-1" style="font-size: 20px"><b>Titipsini.com</b></p>
                            </div>
                            <div class="card-body mb-4" style="background: rgba(251, 244, 175, 0.45)">
                                <p class="mb-1" style="color: rgba(254, 171, 114, 1)"><b>Caution:</b></p>
                                <p class="mb-1" style="color: rgba(254, 171, 114, 1)">
                                    Jangan bagikan bukti pembayaran kepada siapapun.
                                </p>
                            </div>
                            <form action="/signup/index" method="POST" enctype="multipart/form-data">
                                <label for="faq" class="form-label"><b>Informasi</b></label><hr>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md">
                                            <p>Tanggal</p>
                                        </div>
                                        <div class="col-md-3">
                                            12 Agustus 2024
                                        </div>   
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <p>Nama pengirim</p>
                                        </div>
                                        <div class="col-md-3">
                                            Angel Silubun
                                        </div>   
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <p>ID Pembayaran</p>
                                        </div>
                                        <div class="col-md-3">
                                            13240294234132
                                        </div>   
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <p>Transfer dari bank</p>
                                        </div>
                                        <div class="col-md-3">
                                        BCA
                                        </div>   
                                    </div>
                                    <hr width="100%" color="#c0c0c0">
                                    <div class="row">
                                        <div class="col-md">
                                            <p>Jumlah Barang</p>
                                        </div>
                                        <div class="col-md-3">
                                            15
                                        </div>   
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <p>Jumlah Hari</p>
                                        </div>
                                        <div class="col-md-3">
                                            4
                                        </div>   
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <p>Total Service</p>
                                        </div>
                                        <div class="col-md-3">
                                            5 x 14
                                        </div>   
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <p>Subtotal</p>
                                        </div>
                                        <div class="col-md-3">
                                            IDR 3,5000,000
                                        </div>   
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <p>Diskon 15%</p>
                                        </div>
                                        <div class="col-md-3">
                                            IDR 525,000
                                        </div>   
                                    </div>
                                    <hr width="100%" color="#c0c0c0">
                                    <div class="row">
                                        <div class="col-md">
                                            <p>Total Price</p>
                                        </div>
                                        <div class="col-md-3">
                                            IDR 2,973,000
                                        </div>   
                                    </div>
                                    <hr width="100%" color="#c0c0c0">
                                    <div class="row">
                                        <div class="col-md">
                                            <p>Metode Pembayaran</p>
                                        </div>
                                        <div class="col-md-3">
                                            ATM (BCA)
                                        </div>   
                                    </div>
                                </div>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <a class="btn btn-outline-success" href="/user/pemesanan/History/On_Progress" role="button">Oke</a>
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/my_chart.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/custom.js"></script>

