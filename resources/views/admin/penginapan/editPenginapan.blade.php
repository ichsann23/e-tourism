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
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputNama">Nama penginapan</label>
                                <input type="text" class="form-control" id="exampleInputNama" placeholder="Nama Penginapan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLink">Link Penginapan</label>
                                <input type="text" class="form-control" id="exampleInputLink" placeholder="Link Penginapan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAlamat">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputAlamat" placeholder="Alamat Penginapan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNohp">No Hp</label>
                                <input type="text" class="form-control" id="exampleInputNohp" placeholder="No hp penginapan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputHarga">Harga</label>
                                <input type="text" class="form-control" id="exampleInputHarga" placeholder="Harga Penginapan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFasilitas">Fasilitas</label>
                                <input type="text" class="form-control" id="exampleInputFasilitas" placeholder="Fasilitas Penginapan">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Tentang pengianapan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">
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