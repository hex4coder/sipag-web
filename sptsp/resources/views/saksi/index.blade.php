@extends('adminlte::page')

@section('title', 'Data Saksi')

@section('content_header')
    <h3>Data Saksi</h3>
@stop


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-database text-purple"></i>

                {{-- jika ada data tampilkan tombol print --}}
                @if (count($listsaksi) > 0)
                    <div class="float-right">
                        <a target="_blank" href="{{ route('saksi.cetak') }}" class="btn btn-primary"><i class="fa fa-print"></i>
                            Cetak
                            Data</a>
                    </div>
                @endif


            </div>
            <div class="card-body">
                @if (count($listsaksi) > 0)
                    {{-- TODO: Membuat daftar list saksi --}}
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>Nomor Perkara</th>
                                <th>Pihak 1</th>
                                <th>Saksi Ke</th>
                                <th>Nama Saksi</th>
                                <th>Detail Saksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listsaksi as $saksi)
                                <tr>
                                    <td>{{ $saksi->perkara->nomor_perkara }}</td>
                                    <td>{{ $saksi->perkara->pihak1 }}</td>
                                    <td>Saksi ke {{ $saksi->saksi_ke }}</td>
                                    <td>{{ $saksi->nama }} Bin/Binti {{ $saksi->bin }}</td>
                                    <td>
                                        <a href="{{ route('saksi.detail_saksi', ['id' => $saksi->id]) }}"
                                            class="btn btn-sm btn-outline-primary">Detail Saksi</a>
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
