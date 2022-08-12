@extends('layouts.user')

@section('container')
<section id="services" class="services section-bg" style="padding-top: 100px;">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Barang</h2>
            <p>Silahkan pilih Layanan Barang yang kamu butuhkan</p>
        </div>

        <div class="row align-items-center" style=" margin-left:70px;">
            <div class="container">
                <div class="row justify-content-evenly">
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxs-truck"></i></div>
                            <h4 class="title"><a href="/user/detail/barang/barang">Pilih Barang</a></h4>
                            <b>
                                <p class="description">Layanan yang kami sediakan</p>
                            </b>
                            <p class="description"></p>
                            <p class="description">- Free cuci kendaraan</p>
                            <p class="description">- Kendaraan dibersihakan</p>
                            <p class="description">- Kontrol mesin setiap pagi</p>
                            <p class="description">- Konsultasi & Support</p>
                            <b><br>IDR 100k/hari</br></b>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxs-truck"></i></div>
                            <h4 class="title"><a href="/user/detail/barang/paket">Pilih Paket</a></h4>
                            <b>
                                <p class="description">Layanan yang kami sediakan</p>
                            </b>
                            <p class="description"></p>
                            <p class="description">- Free cuci kendaraan</p>
                            <p class="description">- Kendaraan dibersihakan</p>
                            <p class="description">- Kontrol mesin setiap pagi</p>
                            <p class="description">- Konsultasi & Support</p>
                            <b><br>IDR 100k/hari</br></b>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
    </div>
</section>
@endsection
   
