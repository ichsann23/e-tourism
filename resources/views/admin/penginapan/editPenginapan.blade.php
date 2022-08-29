@extends('layouts.admin.master')
@section('title','Edit data penginapan')
@section('content-header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit data penginapan
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-hotel"></i> Penginapan</a></li>
            <li><a href="#">Edit data</a></li>
        </ol>
    </section>
    @endsection
    @section('content')
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Edit data</h3>
                    </div>
                    <form role="form" method="POST" action="{{ route('admin.penginapan.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputNama">Nama penginapan</label>
                                <input type="text" name="nama" value="{{ $data->nama }}" class="form-control" id="exampleInputNama" placeholder="Nama Penginapan">
                                @if($errors->has('nama'))
                                    <small class="text-danger">{{ $errors->first('nama') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLink">Link Penginapan</label>
                                <input type="text" name="link" value="{{ $data->link }}" class="form-control" id="exampleInputLink" placeholder="Link Penginapan">
                                @if($errors->has('link'))
                                    <small class="text-danger">{{ $errors->first('link') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAlamat">Alamat</label>
                                <input type="text" name="alamat" value="{{ $data->alamat }}" class="form-control" id="exampleInputAlamat" placeholder="Alamat Penginapan">
                                @if($errors->has('alamat'))
                                    <small class="text-danger">{{ $errors->first('alamat') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNohp">No Hp</label>
                                <input type="text" name="nohp" value="{{ $data->nohp }}" class="form-control" id="exampleInputNohp" placeholder="No hp penginapan">
                                @if($errors->has('nohp'))
                                    <small class="text-danger">{{ $errors->first('nohp') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputHarga">Harga</label>
                                <input type="text" name="harga" value="{{ $data->harga }}" class="form-control" id="exampleInputHarga" placeholder="Harga Penginapan">
                                @if($errors->has('harga'))
                                    <small class="text-danger">{{ $errors->first('harga') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFasilitas">Fasilitas</label>
                                <input type="text" name="fasilitas" value="{{ $data->fasilitas }}" class="form-control" id="exampleInputFasilitas" placeholder="Fasilitas Penginapan">
                                @if($errors->has('fasilitas'))
                                    <small class="text-danger">{{ $errors->first('fasilitas') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Tentang pengianapan</label>
                                <textarea class="form-control" name="ulasan" id="exampleFormControlTextarea1" rows="3">{{ $data->ulasan }}</textarea>
                                @if($errors->has('ulasan'))
                                    <small class="text-danger">{{ $errors->first('ulasan') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" name="foto" id="exampleInputFile">
                                @if($errors->has('foto'))
                                    <small class="text-danger">{{ $errors->first('foto') }}</small>
                                @endif
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection