@extends('layouts.layout')

@section('content')
    <!-- template -->

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="page-title">
                    <h3>Data langon</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item active">Data langon</li>
                    </ul>
                </div>
                <div class="page-btn">
                    <a href="/langon/create" class="btn btn-added"><i data-feather="plus"></i><span>langon</span></a>
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
                                            <th>Nama</th>
                                            <th>nomer</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($langon as $index => $langon)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $langon->nama }}</td>
                                                <td>{{ $langon->nomer }}</td>
                                                <td>
                                                    <a href="{{ route('langon.edit', $langon->id) }}" title="Ubah Data">
                                                        <span class="badge bg-primary">
                                                            <i class="fa fa-edit">Edit</i>
                                                    </a>
                                                    <!-- Delete button -->
                                                    <form action="{{ route('langon.destroy', $langon->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="badge bg-danger border-0"
                                                            onclick="return confirm('Apakah Kamu Yakin Ingin Hapus Produk Ini?');">
                                                            <i class="fa fa-trash"></i> Hapus
                                                        </button>
                                                    </form>
                                                    <a href="{{ route('langon.show', $langon->id) }}" title="Detail Barang">
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
