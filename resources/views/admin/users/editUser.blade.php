@extends('layouts.admin.master')
@section('title','Tambah data user')
@section('content-header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit data User
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i>User</a></li>
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
                        <h3 class="box-title">Form edit data</h3>
                    </div>
                    <form role="form" action="{{ route('admin.user.update', $data->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputNama">Nama</label>
                                <input type="text" class="form-control" value="{{ $data->name }}" name="name" id="exampleInputNama" placeholder="Nama ...">
                                @if($errors->has('name'))
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLink">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $data->email }}" id="exampleInputLink" placeholder="Email..">
                                @if($errors->has('email'))
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAlamat">Password</label>
                                <input type="Password" name="password" class="form-control" id="exampleInputAlamat" placeholder="Pass..">
                                <small class="text-info">Masukkan password jika ingin mengganti password.</small>
                                @if($errors->has('password'))
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
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
