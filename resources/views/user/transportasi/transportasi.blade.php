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
            <div class="col-12">
                <h1 class="mt-5">Transportasi</h1>
                <p>Destinasi Makassar ke Kecamatan Segeri</p>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="card">
                    <img src="{{url('assets/frontend/images/avanza.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mobil Sewa</h5>
                        <p class="card-text">Rp250.000 - Rp 300.000</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="card">
                    <img src="{{url('assets/frontend/images/avanza.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mobil Sewa</h5>
                        <p class="card-text">Rp250.000 - Rp 300.000</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="card">
                    <img src="{{url('assets/frontend/images/avanza.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mobil Sewa</h5>
                        <p class="card-text">Rp250.000 - Rp 300.000</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-transportasi-travel row  mb-5">
            <div class="col-12">
                <h1 class="mt-5">Transportasi</h1>
                <p>Destinasi Kecamatan Segeri to Desa Parenreng</p>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="card">
                    <img src="{{url('assets/frontend/images/avanza.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mobil Sewa</h5>
                        <p class="card-text">Rp250.000 - Rp 300.000</p>
                    </div>
                </div>
            </div>
            <!-- baru -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="card">
                    <img src="{{url('assets/frontend/images/avanza.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mobil Sewa</h5>
                        <p class="card-text">Rp250.000 - Rp 300.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
