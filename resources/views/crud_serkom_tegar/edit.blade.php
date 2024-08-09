@extends('Layouts.layout')

@section('content')
    <!-- template -->

    <div class="page-wrapper cardhead">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Tambah Data crud_serkom_tegar</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('crud_serkom_tegar.index') }}">Data
                                    crud_serkom_tegar</a></li>
                            <li class="breadcrumb-item active">Create Data crud_serkom_tegar</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Tambah Data crud_serkom_tegar</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('crud_serkom_tegar.update', $crud_serkom_tegar->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>nim</label>
                                    <input type="text" name="nim" value="{{ old('nim', $crud_serkom_tegar->nim) }}"
                                        class="form-control @error('nim') is-invalid @enderror" placeholder="">
                                    @error('nim')
                                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>nama</label>
                                    <textarea name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="">{{ old('nama', $crud_serkom_tegar->nama) }}</textarea>
                                    @error('nama')
                                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>skema</label>
                                    <input type="text" name="skema"
                                        value="{{ old('skema', $crud_serkom_tegar->skema) }}"
                                        class="form-control @error('skema') is-invalid @enderror"
                                        placeholder="pilih skema">
                                    @error('skema')
                                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>hasil</label>
                                    <input type="text" name="hasil"
                                        value="{{ old('hasil', $crud_serkom_tegar->hasil) }}"
                                        class="form-control @error('hasil') is-invalid @enderror"
                                        placeholder="pilih hasil">
                                    @error('skema')
                                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>tanggal_sertifikasi</label>
                                    <input type="date" name="tanggal_sertifikasi" value="{{ old('tanggal_sertifikasi', $crud_serkom_tegar->tanggal_sertifikasi) }}"
                                        class="form-control @error('tanggal_sertifikasi') is-invalid @enderror" placeholder="">
                                    @error('tanggal_sertifikasi')
                                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="text-end">
                                    <a href="{{ route('crud_serkom_tegar.index') }}">
                                        <button type="button" class="btn btn-danger"> <i class="fa fa-undo"></i>
                                            Back</button>
                                    </a>
                                    <button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
