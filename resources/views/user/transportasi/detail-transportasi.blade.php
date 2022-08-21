@extends('layouts.user.master')
@section('title','Detail-Transportasi')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/frontend/styles/detailPenginapan.css') }}">
<div class="card-wrapper">
    <div class="card">
        <!-- card left -->
        <div class="penginapan-imgs">
            <div class="img-display">
                <div class="img-showcase">
                    <img src="{{ asset('assets/frontend/images/avanza.jpg') }}" alt="penginapan">
                </div>
            </div>
            <div class="img-select">
                <!-- <div class="img-item">
                    <a href="" data-id="1">
                        <img src="{{ asset('assets/frontend/images/hotel-paramount.jpg') }}" alt="penginapan">
                    </a>
                </div>
                <div class="img-item">
                    <a href="" data-id="1">
                        <img src="{{ asset('assets/frontend/images/hotel-paramount.jpg') }}" alt="penginapan">
                    </a>
                </div>
                <div class="img-item">
                    <a href="" data-id="1">
                        <img src="{{ asset('assets/frontend/images/hotel-paramount.jpg') }}" alt="penginapan">
                    </a>
                </div>
                <div class="img-item">
                    <a href="" data-id="1">
                        <img src="{{ asset('assets/frontend/images/hotel-paramount.jpg') }}" alt="penginapan">
                    </a>
                </div> -->
            </div>
        </div>
        <!--card right  -->
        <div class="penginapan-content">
            <h2 class="penginapan-title">Avanza</h2>
            <a href="" class="penginapan-link">kunjungi</a>
            <div class="harga-penginapan">
                <p class="harga-lama">Harga: <span>Rp.150.000</span></p>
            </div>
            <div class="penginapan-detail">
                <h2>tentang penginapan</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, cumque neque eaque ipsam reprehenderit illum quasi obcaecati ullam. Sit aut cumque enim mollitia excepturi voluptate?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi repudiandae dicta esse reprehenderit praesentium quae.</p>
                <ul>
                    <li>Alamat: <span>Maros, Mandai, 90552, Indonesia</span></li>
                    <li>No telephone: <span>-</span></li>
                    <li>Fasilitas: <span>6 kursi, ac, full bahan bakar</span></li>
                    <!-- <li>Shipping Area: <span>All over the world</span></li>
                    <li>Shipping Fee: <span>Free</span></li> -->
                </ul>
            </div>

        </div>
    </div>
</div>
@endsection