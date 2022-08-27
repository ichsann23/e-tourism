@extends('layouts.admin.master')
@section('title','Tambah data transportasi')
@section('content-header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah data transportasi
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-car"></i>Transportasi</a></li>
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
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputNama">Nama transportasi</label>
                                <input type="text" class="form-control" id="exampleInputNama" placeholder="Nama transportasi">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLink">Link transportasi</label>
                                <input type="text" class="form-control" id="exampleInputLink" placeholder="Link transportasi">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAlamat">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputAlamat" placeholder="Alamat transportasi">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNohp">No Hp</label>
                                <input type="text" class="form-control" id="exampleInputNohp" placeholder="No hp transportasi">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputHarga">Harga</label>
                                <input type="text" class="form-control" id="exampleInputHarga" placeholder="Harga transportasi">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFasilitas">Fasilitas</label>
                                <input type="text" class="form-control" id="exampleInputFasilitas" placeholder="Fasilitas transportasi">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Tentang transportasi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">
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
