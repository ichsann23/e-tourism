@extends('layouts.user.master')
@section('title','penginapan')
@section('content')
<section class="penginapan" id="penginapan">
    <div class="container">
        <div class="row">
            <div class="col text-start section-penginapan-heading">
                <h2> </h2>
            </div>
        </div>
    </div>
</section>
<section class="section-penginapan-content" id="penginapanContent">
    <div class="container">
        <div class="section-penginapan-travel row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('assets/frontend/images/hotel.jpg') }}')">
                    <div class="travel-country">REDDOORZ</div>
                    <div class="travel-location">MAROS INDONESIA</div>
                    <div class="travel-button mt-auto">
                        <a href="{{ url('detail-penginapan') }}" class="btn btn-travel-details px-4"> Selengkapnya </a>
                    </div>  
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('assets/frontend/images/hotel.jpg') }}')">
                    <div class="travel-country">HOTEL</div>
                    <div class="travel-location">MAROS INDONESIA</div>
                    <div class="travel-button mt-auto">
                        <a href="#" class="btn btn-travel-details px-4"> Selengkapnya </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('assets/frontend/images/hotel.jpg') }}')">
                    <div class="travel-country">HOTEL</div>
                    <div class="travel-location">MAROS INDONESIA</div>
                    <div class="travel-button mt-auto">
                        <a href="#" class="btn btn-travel-details px-4"> Selengkapnya </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('assets/frontend/images/hotel.jpg') }}')">
                    <div class="travel-country">HOTEL</div>
                    <div class="travel-location">MAROS INDONESIA</div>
                    <div class="travel-button mt-auto">
                        <a href="#" class="btn btn-travel-details px-4"> Selengkapnya </a>
                    </div>
                </div>
            </div>

            <!-- baru -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('assets/frontend/images/hotel.jpg') }}')">
                    <div class="travel-country">REDDOORZ</div>
                    <div class="travel-location">MAROS INDONESIA</div>
                    <div class="travel-button mt-auto">
                        <a href="{{ url('detail-penginapan') }}" class="btn btn-travel-details px-4"> Selengkapnya </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
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
@endsection