@extends('Layouts.layout')

@section('content')
    <!-- template -->

    <div class="page-wrapper cardhead">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Tambah crud serkom tegar</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('crud_serkom_tegar.index') }}">Data Akun</a></li>
                            <li class="breadcrumb-item active">Create Data crud serkom tegar</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('crud_serkom_tegar.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Nim</label>
                                    <input type="textbox" name="nim" value="{{ old('nim') }}"
                                        class="form-control @error('nim') is-invalid @enderror" placeholder="">
                                    @error('nim')
                                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>nama</label>
                                    <input type="textbox" name="nama" value="{{ old('nama') }}"
                                        class="form-control @error('nama') is-invalid @enderror" placeholder="">
                                    @error('nama')
                                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>skema</label>
                                    <input type="text" name="skema" value="{{ old('skema') }}"
                                        class="form-control @error('skema') is-invalid @enderror" placeholder="pilih skema">
                                    @error('skema')
                                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>hasil</label>
                                    <input type="text" name="hasil" value="{{ old('hasil') }}"
                                        class="form-control @error('hasil') is-invalid @enderror" placeholder="pilih hasil">
                                    @error('hasil')
                                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>tanggal_sertifikasi</label>
                                    <input type="date" name="tanggal_sertifikasi" value="{{ old('tanggal_sertifikasi') }}"
                                        class="form-control @error('tanggal_sertifikasi') is-invalid @enderror" placeholder="">
                                    @error('tanggal_sertifikasi')
                                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('crud_serkom_tegar.index') }}">
                                        <button type="button" class="btn btn-danger"> <i class="fa fa-undo"></i>
                                            Back</button>
                                    </a>
                                    <button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i>
                                        Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
