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
            @foreach ($data as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('storage/'.$item->foto) }}')">
                        <div class="travel-country">{{ strtoupper($item->nama) }}</div>
                        <div class="travel-location">{{ strtoupper($item->alamat) }}</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('penginapan.detail', $item->id) }}" class="btn btn-travel-details px-4"> Selengkapnya </a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $data->links('vendor.pagination.bootstrap-4') }}

        </div>
    </div>
</section>
@endsection
