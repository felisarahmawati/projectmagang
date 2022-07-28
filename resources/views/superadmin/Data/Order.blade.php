@extends('superadmin.Layouts.superadminlayout')
@section('content')
    <section class="home-section">

        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="cardHeader-title">
                    <h2>Orderan</h2>
                </div>
            </div>

            <!-- top nav -->
            <div class="cardBox1">
                <div class="card2">
                    <div>
                        <a href="/admin/data/order" style="text-decoration:none">
                            <div class="cardName2">Kendaraan
                            </div>
                        </a>
                    </div>
                </div>

                <div class="card1">
                    <div>
                        <a href="/admin/data/order=bangunan" style="text-decoration:none">
                            <div class="cardName1">Bangunan
                            </div>
                        </a>
                    </div>
                </div>

                <div class="card1">
                    <div>
                        <a href="/admin/data/order=barang" style="text-decoration:none">
                            <div class="cardName1">Barang
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card1">
                    <div>
                        <a href="/admin/data/order=pickup" style="text-decoration:none">
                            <div class="cardName1">Pick Up
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- data list -->
            <div class="details1">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Data Orderan Kendaraan</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table class="table-borderless mt-3 w-auto">
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>No Hp</td>
                                <td>Jenis Kendaraan</td>
                                <td>Metode Pembayaran</td>
                                <td>Pick Up</td>
                                <td>Total Pembayaran</td>
                                <td>Alamat</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Robecca Howard</td>
                                <td>(307) 555 0133</td>
                                <td>Mobil Pick up</td>
                                <td>Transfer Bank</td>
                                <td>Yes</td>
                                <td>IDR 600.000</td>
                                <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                                <!-- <td><span class="status return">Return</span></td> -->
                            </tr>
                            <tr>
                                <td>Robecca Howard</td>
                                <td>(307) 555 0133</td>
                                <td>Mobil Pick up</td>
                                <td>Transfer Bank</td>
                                <td>Yes</td>
                                <td>IDR 600.000</td>
                                <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                                <!-- <td><span class="status return">Return</span></td> -->
                            </tr>
                            <tr>
                                <td>Robecca Howard</td>
                                <td>(307) 555 0133</td>
                                <td>Mobil Pick up</td>
                                <td>Transfer Bank</td>
                                <td>Yes</td>
                                <td>IDR 600.000</td>
                                <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                                <!-- <td><span class="status return">Return</span></td> -->
                            </tr>
                            <tr>
                                <td>Robecca Howard</td>
                                <td>(307) 555 0133</td>
                                <td>Mobil Pick up</td>
                                <td>Transfer Bank</td>
                                <td>Yes</td>
                                <td>IDR 600.000</td>
                                <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                                <!-- <td><span class="status return">Return</span></td> -->
                            </tr>
                            <tr>
                                <td>Robecca Howard</td>
                                <td>(307) 555 0133</td>
                                <td>Mobil Pick up</td>
                                <td>Transfer Bank</td>
                                <td>Yes</td>
                                <td>IDR 600.000</td>
                                <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                                <!-- <td><span class="status return">Return</span></td> -->
                            </tr>
                            <tr>
                                <td>Robecca Howard</td>
                                <td>(307) 555 0133</td>
                                <td>Mobil Pick up</td>
                                <td>Transfer Bank</td>
                                <td>Yes</td>
                                <td>IDR 600.000</td>
                                <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                                <!-- <td><span class="status return">Return</span></td> -->
                            </tr>
                            <tr>
                                <td>Robecca Howard</td>
                                <td>(307) 555 0133</td>
                                <td>Mobil Pick up</td>
                                <td>Transfer Bank</td>
                                <td>Yes</td>
                                <td>IDR 600.000</td>
                                <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                                <!-- <td><span class="status return">Return</span></td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>