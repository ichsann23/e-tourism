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
                        <a class="btn btn-primary" href="{{ route('admin.penginapan.tambah') }}">Tambah data</a>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No. </th>
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
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->alamat}}</td>
                                        <td>{{$item->nohp}}</td>
                                        <td><a href="{{$item->link}}" target="_blank">{{$item->link}}</a></td>
                                        <td>
                                            {{$item->ulasan}}
                                        </td>
                                        <td>
                                            <img src="{{asset('storage/'.$item->foto)}}" alt="" width="100px" height="100px" srcset="">
                                        </td>
                                        <td>{{$item->fasilitas}}</td>
                                        <td>{{$item->harga}}</td>
                                        <td class="">
                                            <a 
                                            type="button" 
                                            href="{{ route('admin.penginapan.edit', $item->id) }}"
                                            class="btn btn-success ">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a 
                                                href="#modalDelete" 
                                                data-href="{{route('admin.penginapan.hapus', $item->id)}}"
                                                type="button" 
                                                data-toggle="modal"
                                                data-target="#modalDelete"
                                                class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No. </th>
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
                        {{ $data->links('vendor.pagination.bootstrap-4') }}
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
<!--Message Modal-->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDelete">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content b-0">
            <div class="modal-header r-0 bg-danger">
                <h6 class="modal-title text-white" id="exampleModalLabel"><i class="icon-trash"></i> Hapus Data</h6>
                <a href="#" data-dismiss="modal" aria-label="Close"
                    class="paper-nav-toggle paper-nav-white active"><i></i></a>
            </div>
            <form method="post" class="act-ok" action="">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <div class="modal-body no-b">
                    <p>Apakah anda yakin ingin menghapus data ?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger l-s-1 s-12 text-uppercase" type="submit">
                        Hapus Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    //config datatable 
        $('#modalDelete').on('show.bs.modal', function(e) {
            $(this).find('.act-ok').attr('action', $(e.relatedTarget).data('href'));
        });
</script>
@endsection
