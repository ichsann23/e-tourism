@extends('layouts.user.master')
@section('title','Detail-penginapan')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/frontend/styles/detailPenginapan.css') }}">
<div class="card-wrapper">
    <div class="card">
        <!-- card left -->
        <div class="penginapan-imgs">
            <div class="img-display">
                <div class="img-showcase">
                    <img src="{{ asset('storage/'.$data->foto) }}" alt="penginapan">
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
            <h2 class="penginapan-title">{{ucwords($data->nama)}}</h2>
            <a href="{{$data->link}}" class="penginapan-link">{{$data->link}}</a>
            <div class="harga-penginapan">
                <p class="harga-lama">Harga: <span>{{$data->harga}}</span></p>
            </div>
            <div class="penginapan-detail">
                <h2>tentang penginapan</h2>
                <p>
                    {{$data->ulasan}}
                </p>
                <ul>
                    <li>Alamat: <span>{{$data->alamat}}</span></li>
                    <li>No telephone: <span>{{$data->nohp}}</span></li>
                    <li>Fasilitas: <span>{{$data->fasilitas}}</span></li>
                    <!-- <li>Shipping Area: <span>All over the world</span></li>
                    <li>Shipping Fee: <span>Free</span></li> -->
                </ul>
            </div>

        </div>
    </div>
</div>
@endsection