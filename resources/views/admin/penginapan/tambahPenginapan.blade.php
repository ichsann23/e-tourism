@extends('layouts.admin.master')
@section('title','Tambah data penginapan')
@section('content-header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah data penginapan
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-hotel"></i> Penginapan</a></li>
            <li><a href="#">Tambah data</a></li>
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
                        <h3 class="box-title">Form tambah data</h3>
                    </div>

                    <form action="{{ route('admin.penginapan.tambah.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class=" box-body">
                            <div class="form-group">
                                <label for="exampleInputNama">Nama penginapan</label>
                                <input type="text" class="form-control" name="nama" id="exampleInputNama" placeholder="Nama Penginapan">
                                @if($errors->has('nama'))
                                    <small class="text-danger">{{ $errors->first('nama') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLink">Link Penginapan</label>
                                <input type="text" class="form-control" name="link" id="exampleInputLink" placeholder="Link Penginapan">
                                @if($errors->has('link'))
                                    <small class="text-danger">{{ $errors->first('link') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAlamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="exampleInputAlamat" placeholder="Alamat Penginapan">
                                @if($errors->has('alamat'))
                                    <small class="text-danger">{{ $errors->first('alamat') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNohp">No Hp</label>
                                <input type="text" class="form-control" id="exampleInputNohp" name="nohp" placeholder="No hp penginapan">
                                @if($errors->has('nohp'))
                                    <small class="text-danger">{{ $errors->first('nohp') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputHarga">Harga</label>
                                <input type="text" class="form-control" id="exampleInputHarga" name="harga" placeholder="Harga Penginapan">
                                @if($errors->has('harga'))
                                    <small class="text-danger">{{ $errors->first('harga') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFasilitas">Fasilitas</label>
                                <input type="text" class="form-control" id="exampleInputFasilitas" name="fasilitas" placeholder="Fasilitas Penginapan">
                                @if($errors->has('fasilitas'))
                                    <small class="text-danger">{{ $errors->first('fasilitas') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Tentang pengianapan</label>
                                <textarea class="form-control" name="ulasan" id="exampleFormControlTextarea1" rows="3"></textarea>
                                @if($errors->has('ulasan'))
                                    <small class="text-danger">{{ $errors->first('ulasan') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" name="foto" id="exampleInputFile">
                                <small class="text-info">Maximal 2MB</small>
                                @if($errors->has('foto'))
                                    <br>
                                    <small class="text-danger">{{ $errors->first('foto') }}</small>
                                @endif
                            </div>

                        </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
</div>
</section>
</div>
@endsection
