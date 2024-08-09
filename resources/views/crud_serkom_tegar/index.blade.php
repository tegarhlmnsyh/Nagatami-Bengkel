@extends('layouts.layout')

@section('content')
    <!-- template -->

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="page-title">
                    <h3>Data crud serkom tegar</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item active">Data crud serkom tegar</li>
                    </ul>
                </div>
                <div class="page-btn">
                    <a href="/crud_serkom_tegar/create" class="btn btn-added"><i data-feather="plus"></i><span>crud serkom
                            tegar</span></a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table datanew">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>nim</th>
                                            <th>nama</th>
                                            <th>skema</th>
                                            <th>hasil</th>
                                            <th>tanggal sertifikasi</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($crud_serkom_tegar as $index => $crud_serkom_tegar)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $crud_serkom_tegar->nim }}</td>
                                                <td>{{ $crud_serkom_tegar->nama }}</td>
                                                <td>{{ $crud_serkom_tegar->skema }}</td>
                                                <td>{{ $crud_serkom_tegar->hasil }}</td>
                                                <td>{{ $crud_serkom_tegar->tanggal_sertifikasi }}</td>
                                                <td>
                                                    <a href="{{ route('crud_serkom_tegar.edit', $crud_serkom_tegar->id) }}"
                                                        title="Ubah Data">
                                                        <span class="badge bg-primary">
                                                            <i class="fa fa-edit">Edit</i>
                                                    </a>
                                                    <!-- Delete button -->
                                                    <form
                                                        action="{{ route('crud_serkom_tegar.destroy', $crud_serkom_tegar->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="badge bg-danger border-0"
                                                            onclick="return confirm('Apakah Kamu Yakin Ingin Hapus Produk Ini?');">
                                                            <i class="fa fa-trash"></i> Hapus
                                                        </button>
                                                    </form>
                                                    <a href="{{ route('crud_serkom_tegar.show', $crud_serkom_tegar->id) }}"
                                                        title="crud_serkom_tegar">
                                                        <span class="badge bg-success"><i class="fa fa-tags"></i>
                                                            Detail</span>
                                                    </a>
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
    </div>
@endsection
