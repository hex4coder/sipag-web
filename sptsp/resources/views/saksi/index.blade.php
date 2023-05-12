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
                        <a href="#" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Data</a>
                    </div>
                @endif


            </div>
            <div class="card-body">
                @if (count($listsaksi) > 0)
                    {{-- TODO: Membuat daftar list saksi --}}
                @else
                    <h5 class="text-center">Belum ada data</h5>
                @endif

            </div>
        </div>
    </div>
@stop
