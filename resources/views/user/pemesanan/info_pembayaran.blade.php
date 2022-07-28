@extends('layouts.main')
@section('container')
<section id="services" class="services section-bg" style="padding-top: 80px;" data-aos-delay="50">
    
    <div class="container-fluid d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
        <div class="col-md-6 ps-2 mb-10">
            <div class="card text-center">
                <div class="card-header bg-white">
                    <p class="mb-1 bg-white"><b>Total Pembayaran</b></p>
                </div>
                <div class="card-body">
                  <p class="card-text mb-1 text-success" style="font-size: 25px"><b>IDR 600,076<b></p>
                  <img src="../../img/centanghijau.png" alt="centangHijau" width="15%" height="15%" style="padding-top:10px">
                  <h5 class="card-text text-secondary" style="font-size: 15px; padding-top:15px">Transfer dapat dilakukan ke nomor rekening Virtual Account BRI (BRIVA) berikut ini :</h5>
                  <p class="card-text text-secondary mb-1" style="font-size: 25px">14 08 02</p>
                </div>
                <div class="card-footer text-muted bg-white">
                  Bayar sesuai dengan nominal yang tertera
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
        <div class="col-md-6 pe-10 ps-2 mb-10">
            <div class="card">
                <div class="card-header bg-white" style="text-align: justify">
                    <p class="mb-1 text-center">Tata Cara Pembayaran</p>
                </div>
                <div class="card-body" style="text-align: justify">
                    <p class="mb-1">1. Gunakan ATM / iBanking / mBanking / setor tunai untuk transfer ke rekening PT Airpay International</p>
                    <p>2. Silahkan Upload bukti transfer sebelum 10-09-2021</p>
                    <p>3. Demi keamanan transaksi mohon untuk tidak membagikan bukti atau Konfirmasi
                        pembayaran pesanan kepada siapa pun, selain mengunggahnya via
                        aplikasi titipsini.com</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
        <div class="col-md-6 pe-10 ps-2 mb-10">
            <div class="card bg-success text-white">
                <div class="card-body" style="text-align: justify">
                    <p class="mb-1">Jika bukti transfer tidak di upload dalam waktu 24 jam maka pesanan
                        akan otomatis dibatalkan.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
        <div class="col-md-6 pe-10 ps-2 mb-10">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-success" type="button"><a href="/user/pemesanan/konfirm_pembayaran">Upload bukti transfer sekarang</a></button>
                <button class="btn btn-secondary" type="button">Upload bukti transfer nanti</button>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
        





