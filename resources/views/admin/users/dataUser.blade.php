@extends('layouts.admin.master')
@section('title','Data User')
@section('content-header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data User
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> User</a></li>
            <li><a href="#">Data user</a></li>
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
                        <a href="{{ route('admin.user.tambah') }}" class="btn btn-primary">Tambah data</a>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama </th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td class="">
                                            <a href="{{ route('admin.user.edit', $item->id) }}" type="button" class="btn btn-success "><i class="fa fa-edit"></i></a>
                                            @if ($item->id != 1)
                                                <a 
                                                href="#modalDelete" 
                                                data-href="{{route('admin.user.hapus', $item->id)}}"
                                                type="button" 
                                                data-toggle="modal"
                                                data-target="#modalDelete"
                                                class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama </th>
                                    <th>Email</th>
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
