@extends('layouts.user.master')
@section('title','transportasi')
@section('content')
<section class="transportasi" id="transportasi">
    <div class="container">
        <div class="row">
            <div class="col text-center section-transportasi-heading">
                <h2></h2>
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
                        <a href="{{url('detail-transportasi')}}" class="btn btn-travel-details px-4"> Selengkapnya </a>
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
                    <div class="travel-country">FORTUNER</div>
                    <!-- <div class="travel-location">GUNUNG, PANGKEP</div> -->
                    <div class="travel-button mt-auto">
                        <a href="#" class="btn btn-travel-details px-4"> Selengkapnya </a>
                    </div>
                </div>
            </div>
            <!-- baru -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('assets/frontend/images/avanza.jpg') }}')">
                    <div class="travel-country">AVANZA</div>
                    <!-- <div class="travel-location">MAROS,INDONESIA</div> -->
                    <div class="travel-button mt-auto">
                        <a href="{{url('detail-transportasi')}}" class="btn btn-travel-details px-4"> Selengkapnya </a>
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
                    <div class="travel-country">FORTUNER</div>
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
