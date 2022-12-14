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
            <li><a href="#"><i class="fa fa-user"></i>User</a></li>
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
                    <form role="form" action="{{ route('admin.user.tambah.submit') }}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputNama">Nama</label>
                                <input type="text" class="form-control" name="name" id="exampleInputNama" placeholder="Nama ...">
                                @if($errors->has('name'))
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLink">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputLink" placeholder="Email..">
                                @if($errors->has('email'))
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAlamat">Password</label>
                                <input type="Password" name="password" class="form-control" id="exampleInputAlamat" placeholder="Pass..">
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
