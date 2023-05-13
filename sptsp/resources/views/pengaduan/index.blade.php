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
                        <a target="_blank" href="{{ route('saksi.cetak') }}" class="btn btn-primary"><i class="fa fa-print"></i>
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
                                    <td>{{ $aduan->perkara->nomor_perkara }}</td>
                                    <td>{{ $aduan->perkara->pihak1 }}</td>
                                    <td>aduan ke {{ $aduan->aduan_ke }}</td>
                                    <td>{{ $aduan->nama }} Bin/Binti {{ $aduan->bin }}</td>

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
