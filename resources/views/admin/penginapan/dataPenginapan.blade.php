@extends('layouts.admin.master')
@section('title','Data Penginapan')
@section('content-header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data penginapan
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-hotel"></i> Penginapan</a></li>
            <li><a href="#">Data penginapan</a></li>
        </ol>
    </section>
    @endsection
    @section('content')
    <!-- /.box-header -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header">
                        <button class="btn btn-primary">Tambah data</button>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama </th>
                                    <th>Alamat</th>
                                    <th>No hp</th>
                                    <th>Link</th>
                                    <th>Tentang</th>
                                    <th>Gambar</th>
                                    <th>Fasilitas</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><img src="" alt="" width="100px" height="100px" srcset=""></td>
                                    <td></td>
                                    <td></td>
                                    <td class="">
                                        <a href="">
                                            <button type="button" class="btn btn-success "><i class="fa fa-edit"></i></button>
                                        </a>
                                        <a href="">
                                            <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </a>
                                    </td>
                                </tr>                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama </th>
                                    <th>Alamat</th>
                                    <th>No hp</th>
                                    <th>Link</th>
                                    <th>Tentang</th>
                                    <th>Gambar</th>
                                    <th>Fasilitas</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

@endsection
