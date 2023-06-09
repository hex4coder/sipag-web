@extends('adminlte::page')

@section('title', 'Data Pengaduan')

@section('content_header')
    <h3>Data Pengaduan</h3>
@stop


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-database text-purple"></i>

                {{-- jika ada data tampilkan tombol print --}}
                @if (count($listaduan) > 0)
                    <div class="float-right">
                        <a target="_blank" href="{{ route('pengaduan.cetak') }}" class="btn btn-primary"><i
                                class="fa fa-print"></i>
                            Cetak
                            Data</a>
                    </div>
                @endif


            </div>
            <div class="card-body">
                @if (count($listaduan) > 0)
                    {{-- TODO: Membuat daftar list saksi --}}
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>Nama Pegawai</th>
                                <th>Isi Pengaduan</th>
                                <th>Tanggal</th>
                                <th>Bukti Pengaduan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listaduan as $aduan)
                                <tr>
                                    <td>{{ $aduan->pegawai->nama }}</td>
                                    <td>{{ $aduan->isi }}</td>
                                    <td>{{ $aduan->created_at }}</td>
                                    <td>
                                        <a href="{{ $aduan->url_foto_bukti() }}" target="_blank"
                                            rel="noopener noreferrer"><img src="{{ $aduan->url_foto_bukti() }}"
                                                alt="{{ $aduan->url_foto_bukti() }}" height="100px"></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h5 class="text-center">Belum ada data</h5>
                @endif

            </div>
        </div>
    </div>
@stop
