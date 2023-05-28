@extends('layouts.master')

{{-- apabila 1 baris --}}
@section('title' , 'Data Barang')

@push('page-css')

@endpush

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Barang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Barang</li>
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
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Barang</h3>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('data-barang.update', $dataBarang->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input type="text" class="form-control"
                                                placeholder="Masukan nama barang ..." name="nama"
                                                value="{{$dataBarang->nama_barang}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name="kategori">
                                                <option disabled selected>{{$dataBarang->kategori}}</option>
                                                <option value="Dress">Dress</option>
                                                <option value="Jumpsuit">Jumpsuit</option>
                                                <option value="Top">Top</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('page-js')

@endpush

@push('js-script')

@endpush