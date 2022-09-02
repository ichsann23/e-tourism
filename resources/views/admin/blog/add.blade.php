@extends('layouts.admin.master')

@section('title','Tambah data user')
@section('content-header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah data User
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i>Blog</a></li>
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
                    <form role="form" action="{{ route('admin.blog.tambah.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputNama">Judul</label>
                                <input type="text" class="form-control" value="{{ old('judul') }}" name="judul" id="exampleInputNama" placeholder="Judul ...">
                                @if($errors->has('judul'))
                                    <small class="text-danger">{{ $errors->first('judul') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Sampul</label>
                                <input type="file" name="sampul" id="exampleInputFile">
                                <small class="text-info">Maximal 2MB</small>
                                @if($errors->has('sampul'))
                                    <br>
                                    <small class="text-danger">{{ $errors->first('sampul') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Headline/ Tajuk Utama</label>
                                <textarea class="form-control" name="tajuk_utama" id="exampleFormControlTextarea1" rows="3">{{ old('tajuk_utama') }}</textarea>
                                @if($errors->has('tajuk_utama'))
                                    <small class="text-danger">{{ $errors->first('tajuk_utama') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea2">Isi</label>
                                <textarea class="form-control" name="isi" id="exampleFormControlTextarea2" rows="10">{{ old('isi') }}</textarea>
                                @if($errors->has('isi'))
                                    <small class="text-danger">{{ $errors->first('isi') }}</small>
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
