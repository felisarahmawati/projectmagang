@extends('layouts.main')
    <!-- card edit alamat -->
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
        
        <div class="container-fluid d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
            <div class="col-md-6 ps-2 mb-10">
                <div class="card">
                    <div class="card-header bg-white">
                        <div class="row">
                            <div class="col-md justify-content-center">
                                <p><b>Rebeca Howard</b></p>
                            </div>
                            <div class="col-md-3">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn bg-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Ubah Alamat
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <p class="modal-title" id="exampleModalLabel"><b>Alamat Baru</b></p>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Masukan Alamat Baru</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="person-description">
                            <p class="text-black-100 text-wrap">(307) 555-0133
                                <br>2118 Thornridge Cir.Syracuse, Connecticut 35624
                            </p>       
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
            <div class="col-md-6 pe-10 ps-2 mb-10">
                <div class="card">
                    <div class="card-header bg-white">
                        <p class="mb-1"><b>Jenis Kendaraan</b></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md">
                                <p>Mobil</p>
                            </div>
                            <div class="col-md-3">
                                x 1
                            </div>   
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <p>Sepeda</p>
                            </div>
                            <div class="col-md-3">
                                x 1
                            </div>   
                        </div>
                        <hr width="90%" color="#c0c0c0">
                        <div class="row">
                            <div class="col-md">
                                <p>Total Kendaraan</p>
                            </div>
                            <div class="col-md-3">
                                2 Unit
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
            <div class="col-md-6 pe-10 ps-2 mb-10">
                <div class="card">
                    <div class="card-header bg-white">
                        <p class="mb-1"><b>Detail Transaksi</b></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md">
                                <p>Durasi Penitipan</p>
                            </div>
                            <div class="col-md-3">
                                3 hari
                            </div>   
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <p>Pick Up</p>
                            </div>
                            <div class="col-md-3">
                                Ya
                            </div>   
                        </div>
                        <hr width="100%" color="#c0c0c0">
                        <div class="row">
                            <div class="col-md">
                                <p>Subtotal</p>
                            </div>
                            <div class="col-md-3">
                                200.000
                            </div>   
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <p>Diskon</p>
                            </div>
                            <div class="col-md-3">
                            -
                            </div>   
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <p>Biaya Penjemputan</p>
                            </div>
                            <div class="col-md-3">
                                15.000
                            </div>   
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <p>Pembayaran</p>
                            </div>
                            <div class="col-md-3">
                                <button class="btn bg-white" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1">Metode</button>
                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <p class="modal-title" id="exampleModalLabel"><b>Metode Pembayaran</b></p>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    <a class="btn bg-white" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    Transfer Bank <i class="bi bi-chevron-down"></i>
                                                    </a>
                                                </p>
                                                <div class="collapse" id="collapseExample">
                                                    <div class="card card-body">
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
                                                </div>
                                                <div class="d-grid gap-2 d-md-block" style="margin-top: 10px">
                                                    <button class="btn bg-white" type="button">Gopay</button>
                                                </div>
                                                <div class="d-grid gap-2 d-md-block" style="margin-top: 10px">
                                                    <button class="btn bg-white" type="button">Dana</button>
                                                </div>
                                                <div class="d-grid gap-10 d-md-block" style="margin-top: 10px">
                                                    <button class="btn bg-white" type="button">COD</button>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Konfirmasi</button>
                                                {{-- <button type="button" class="btn btn-primary">Simpan</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <p>Total Pembayaran</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rp 615.000</p>
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto" style="padding-top: 12px">
                        <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal22">
                                Checkout
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="card text-center">
                                            <div class="card-body">
                                              <img src="../../img/centanghijauuu.png" alt="centangHijau" width="120px" height="100px">
                                              <p class="congratulations" style="padding-top: 20px"><b>Congratulations!!!<b></p>
                                              <h5 class="berhasil" style="padding-top: 5px; color: grey">Pesanan sudah berhasil dibuat!</h5>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <button class="btn btn-success" type="button"><a href="/user/pemesanan/info_pembayaran">Pembayaran</a></button>
                                                <button class="btn btn-secondary" type="button"><a href="/user/pemesanan/History/Last_Progress">Pesanan Saya</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
        


   