@extends('layouts.user.master')
@section('title','Beranda')
@section('header')
<header class="text-center">
    <h1>
        Explore The Beautiful world
        <br />
        As Easy One Click
    </h1>
    <p class="mt-3">
        You will see beautiful
        <br />
        moment you never see before
    </p>
    <a href="#" class="btn btn-get-started px-4 mt-4">Explore </a>
</header>
@endsection
@section('content')
<div class="container">
    <div class="wrap">
        <p class="txt1">
            Bulu Sorongan, Desa Parenreng, Kecamatan Segeri, Kabupaten Pangkep, Sulsel. Bulu Sorongan menjanjikan keindahan yang tak kalah eksotis dari tempat wisata alam lainnya. Mata anda akan dimanjakan oleh hamparan hijau alam Segeri
            yang dihiasi barisan bukit pegunungan yang indah. Padang rumput di puncaknya bak karpet hijau yang melentang luas sehingga sangat aman dan cocok untuk mendirikan tenda.
        </p>
        <p class="txt2">
            Ada sumber mata airnya lagi. Udaranya sejuk, dan kabutnya terasa menyelimuti, tempat ini sangat cocok untuk memuaskan mata anda, menghilangkan penat pikiran, dan berkumpul bersama teman. Perjalan dari Makassar ke Desa Parenreng
            kurang lebih 2 jam. Pendakian butuh waktu kurang lebih tiga jam, melalui delapan pos. Ketinggian Bulu Sorongan 731 mdpl.
        </p>
    </div>
</div>
<!-- penginapan -->
<section class="section-penginapan" id="penginapan">
    <div class="container">
        <div class="row">
            <div class="col text-center section-penginapan-heading">
                <h2>Penginapan</h2>
            </div>
        </div>
    </div>
</section>
<section class="section-penginapan-content" id="penginapanContent">
    <div class="container">
        <div class="section-penginapan-travel row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('assets/frontend/images/hotel.jpg') }}')">
                    <div class="travel-country">REDDOORZ</div>
                    <div class="travel-location">MAROS INDONESIA</div>
                    <div class="travel-button mt-auto">
                        <a href="{{ url('detail-penginapan') }}" class="btn btn-travel-details px-4"> Selengkapnya </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('assets/frontend/images/hotel.jpg') }}')">
                    <div class="travel-country">HOTEL</div>
                    <div class="travel-location">MAROS INDONESIA</div>
                    <div class="travel-button mt-auto">
                        <a href="#" class="btn btn-travel-details px-4"> Selengkapnya </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('assets/frontend/images/hotel.jpg') }}')">
                    <div class="travel-country">HOTEL</div>
                    <div class="travel-location">MAROS INDONESIA</div>
                    <div class="travel-button mt-auto">
                        <a href="#" class="btn btn-travel-details px-4"> Selengkapnya </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('assets/frontend/images/hotel.jpg') }}')">
                    <div class="travel-country">HOTEL</div>
                    <div class="travel-location">MAROS INDONESIA</div>
                    <div class="travel-button mt-auto">
                        <a href="#" class="btn btn-travel-details px-4"> Selengkapnya </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- transportasi -->
<section class="section-transportasi" id="transportasi">
    <div class="container">
        <div class="row">
            <div class="col text-center section-transportasi-heading">
                <h2>Transportasi</h2>
            </div>
        </div>
    </div>
</section>
<section class="section-transportasi-content" id="transportasiContent">
    <div class="container">
        <div class="section-transportasi-travel row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('assets/frontend/images/avanza.jpg') }}')">
                    <div class="travel-country">AVANZA</div>
                    <!-- <div class="travel-location">MAROS,INDONESIA</div> -->
                    <div class="travel-button mt-auto">
                        <a href="{{ url('detail-transportasi') }}" class="btn btn-travel-details px-4"> Selengkapnya </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('assets/frontend/images/avanza.jpg') }}')">
                    <div class="travel-country">RUSH</div>
                    <!-- <div class="travel-location">GUNUNG CIMPAWO</div> -->
                    <div class="travel-button mt-auto">
                        <a href="#" class="btn btn-travel-details px-4"> Selengkapnya </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('assets/frontend/images/avanza.jpg') }}')">
                    <div class="travel-country">INOVA</div>
                    <!-- <div class="travel-location">GUNUNG, PANGKEP</div> -->
                    <div class="travel-button mt-auto">
                        <a href="#" class="btn btn-travel-details px-4"> Selengkapnya </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('assets/frontend/images/avanza.jpg') }}')">
                    <div class="travel-country">Avanza</div>
                    <!-- <div class="travel-location">GUNUNG, PANGKEP</div> -->
                    <div class="travel-button mt-auto">
                        <a href="#" class="btn btn-travel-details px-4"> Selengkapnya </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection