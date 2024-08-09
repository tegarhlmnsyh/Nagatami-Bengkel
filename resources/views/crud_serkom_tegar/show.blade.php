@extends('Layouts.layout')

@section('content')
    <!-- template -->

    <div class="page-wrapper cardhead">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Detail Data crud_serkom_tegar</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('crud_serkom_tegar.index') }}">Data Barang</a></li>
                            <li class="breadcrumb-item active">Detail Data crud_serkom_tegar</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Detail Data crud_serkom_tegar</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>nim</label>
                                <p>{{ $crud_serkom_tegar->nim }}</p>
                            </div>

                            <div class="form-group">
                                <label>Nama</label>
                                <p>{{ $crud_serkom_tegar->nama }}</p>
                            </div>

                            <div class="form-group">
                                <label>skema</label>
                                <p>{{ $crud_serkom_tegar->skema }}</p>
                            </div>

                            <div class="form-group">
                                <label>hasil</label>
                                <p>{{ $crud_serkom_tegar->hasil }}</p>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label>tanggal_sertifikasi</label>
                                    <p>{{ $crud_serkom_tegar->tanggal_sertifikasi }}</p>
                                </div>

                            <div class="text-end">
                                <a href="{{ route('crud_serkom_tegar.index') }}" class="btn btn-danger">
                                    <i class="fa fa-undo"></i> Kembali
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
