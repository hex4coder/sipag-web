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
                <div class="float-right">
                    <a href="#" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Data</a>
                </div>
            </div>
            <div class="card-body">
                {{-- TODO: Membuat daftar list saksi --}}
            </div>
        </div>
    </div>
@stop