@extends('layouts.master')

{{-- apabila 1 baris --}}
@section('title' , 'Data Barang')

@push('page-css')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Penjualan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Penjualan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title flex-fill">Informasi Data Penjualan</h3>
                            <a href="{{ route('penjualan.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                                Tambah Data</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="container">
                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-four-dress-tab"
                                                data-toggle="pill" href="#custom-tabs-four-dress" role="tab"
                                                aria-controls="custom-tabs-four-dress" aria-selected="true">Dress</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-jumpsuit-tab" data-toggle="pill"
                                                href="#custom-tabs-four-jumpsuit" role="tab"
                                                aria-controls="custom-tabs-four-jumpsuit"
                                                aria-selected="false">Jumpsuit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-top-tab" data-toggle="pill"
                                                href="#custom-tabs-four-top" role="tab"
                                                aria-controls="custom-tabs-four-top" aria-selected="false">Top</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-four-tabContent">
                                        <div class="tab-pane fade active show" id="custom-tabs-four-dress"
                                            role="tabpanel" aria-labelledby="custom-tabs-four-dress-tab">
                                            <div class="card-body">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th width="20px">No</th>
                                                            <th>Nama Barang</th>
                                                            <th>Kategori</th>
                                                            <th>Jumlah Penjualan</th>
                                                            <th>Tanggal</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($dress as $dress)
                                                        <tr>
                                                            <td>{{$loop->iteration }}</td>
                                                            <td>{{$dress->nama_barang}}</td>
                                                            <td>{{$dress->kategori}}</td>
                                                            <td>{{$dress->jumlah}}</td>
                                                            <td>{{$dress->tanggal}}</td>
                                                            <td class="text-end">
                                                                <div class="actions d-flex">
                                                                    <a href="{{ route('penjualan.edit', $dress->id) }}"
                                                                        class="btn btn-success mr-2"><i
                                                                            class="fas fa-edit"></i></a>

                                                                    <form
                                                                        action="{{ route('penjualan.destroy', $dress->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="btn btn-danger" type="submit">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-jumpsuit" role="tabpanel"
                                            aria-labelledby="custom-tabs-four-jumpsuit-tab">
                                            <div class="card-body">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th width="20px">No</th>
                                                            <th>Nama Barang</th>
                                                            <th>Kategori</th>
                                                            <th>Jumlah Penjualan</th>
                                                            <th>Tanggal</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($jumpsuit as $jumpsuit)
                                                        <tr>
                                                            <td>{{$loop->iteration }}</td>
                                                            <td>{{$jumpsuit->nama_barang}}</td>
                                                            <td>{{$jumpsuit->kategori}}</td>
                                                            <td>{{$jumpsuit->jumlah}}</td>
                                                            <td>{{$jumpsuit->tanggal}}</td>
                                                            <td class="text-end">
                                                                <div class="actions d-flex">
                                                                    <a href="{{ route('penjualan.edit', $jumpsuit->id) }}"
                                                                        class="btn btn-success mr-2"><i
                                                                            class="fas fa-edit"></i></a>

                                                                    <form
                                                                        action="{{ route('penjualan.destroy', $jumpsuit->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="btn btn-danger" type="submit">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-top" role="tabpanel"
                                            aria-labelledby="custom-tabs-four-top-tab">
                                            <div class="card-body">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th width="20px">No</th>
                                                            <th>Nama Barang</th>
                                                            <th>Kategori</th>
                                                            <th>Jumlah Penjualan</th>
                                                            <th>Tanggal</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($top as $top)
                                                        <tr>
                                                            <td>{{$loop->iteration }}</td>
                                                            <td>{{$top->nama_barang}}</td>
                                                            <td>{{$top->kategori}}</td>
                                                            <td>{{$top->jumlah}}</td>
                                                            <td>{{$top->tanggal}}</td>
                                                            <td class="text-end">
                                                                <div class="actions d-flex">
                                                                    <a href="{{ route('penjualan.edit', $top->id) }}"
                                                                        class="btn btn-success mr-2"><i
                                                                            class="fas fa-edit"></i></a>

                                                                    <form
                                                                        action="{{ route('penjualan.destroy', $top->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="btn btn-danger" type="submit">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
</div>
@endsection

@push('page-js')
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
{{-- <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script> --}}
@endpush

@push('js-script')
{{-- <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script> --}}
@endpush