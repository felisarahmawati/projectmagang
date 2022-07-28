@extends('layouts.main')
@extends('partials.header')

@section('container')
    <section id="services" class="services section-bg" style="padding-top: 100px;">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>{{ $data['title'] }}</h2>
                <p>{{ $data['sub-title'] }}</p>
            </div>
            <div class="row align-items-center" style=" margin-left:70px;">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxs-truck"></i></div>
                            <h4 class="title"><a href="/user/detail/kendaraan">Kendaraan</a></h4>
                            <b>
                                <p class="description">{{ $data['judul1'] }}</p>
                            </b>
                            <p class="description"></p>
                            <p class="description">- Free cuci kendaraan</p>
                            <p class="description">- Kendaraan dibersihakan</p>
                            <p class="description">- Kontrol mesin setiap pagi</p>
                            <p class="description">- Konsultasi & Support</p>
                            <b><br>IDR 100k/hari</b>
                    </div>  
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxs-home"></i></div>
                            <h4 class="title"><a href="/user/detail/bangunan">Rumah</a></h4>
                            <b>
                                <p class="description">Layanan yang kami sediakan</p>
                            </b>
                            <p class="description"></p>
                            <p class="description">- Rumah bersih</p>
                            <p class="description">- Kontrol rumah setiap pagi</p>
                            <p class="description">- Rumah dibersihkan</p>
                            <p class="description">- Konsultasi & Support</p>
                            <p class="description">- Keamanan terjaga</p>

                            <b><br>IDR 200k/hari</b>

                            <!-- <a href="#services" class="btn btn-primary" style="margin-top: 10px; background:#00B56A;">Pilih Paket</a> -->
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-basket"></i></div>
                            <h4 class="title"><a href="/user/detail/barang/layanan_barang">Barang</a></h4>
                            <b>
                                <p class="description">Layanan yang kami sediakan</p>
                            </b>
                            <p class="description"></p>
                            <p class="description">- Barang terjaga</p>
                            <p class="description">- Kontrol setiap pagi</p>
                            <p class="description">- Barang dibersihkan</p>
                            <p class="description">- Keamanan terjaga</p>
                            <p class="description">- Konsultasi & Support</p>
                            <b><br>IDR 50k/hari</b>
                            <!-- <a href="#services" class="btn btn-primary" style="margin-top: 10px; background:#00B56A;">Pilih Paket</a> -->
                        </div>
                    </div>
                    <div class="icon-box2" style="text-align: center">
                        <a href="https://play.google.com/store/apps/details?id=com.whatsapp&hl=in&gl=id">
                            <img src="../assets/img/clients/play.png" style="width: 310px; height: 110px">
                        </a>
                    </div>
                </div>
        </div>
    </section>
@endsection