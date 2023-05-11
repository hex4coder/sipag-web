@extends('adminlte::page')

@section('title', 'Transaksi Keuangan')

@section('content_header')
    <h3>Transaksi Keuangan</h3>
@stop


@section('content')
@if ($message = Session::get('success'))
<x-adminlte-callout theme="success" class="bg-teal" icon="fas fa-lg fa-thumbs-up" title="Done" id="message">
    <i class="text-dark">{{$message}}</i>
</x-adminlte-callout>
@endif
@if ($message = Session::get('error'))
<x-adminlte-callout theme="error" class="bg-danger" icon="fas fa-lg fa-bug" title="Error" id="message">
    <i class="text-dark">{{$message}}</i>
</x-adminlte-callout>
@endif
    <div class="card">
        <div class="card-header">
            <i class="fa fa-database"></i>
            <p class="mx-auto"></p>
            <a href="{{ route('kasir.tambah') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            @if (count($pembayarans) > 0)
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>No. Perkara</th>
                            <th>Perkara</th>
                            <th>Pihak 1 dan 2</th>
                            <th>Tanggal Transaksi</th>
                            <th>Jenis Transaksi</th>
                            <th>Pemasukan / Pengeluaran / Sisa</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembayarans as $p)
                        <tr>
                            <td>{{$p->perkara->nomor_perkara}}</td>
                            <td>{{$p->perkara->jenis_perkara->jenis}}</td>
                            <td>{{$p->perkara->pihak1}} dan {{$p->perkara->pihak2}}</td>
                            <td>{{$p->created_at}}</td>
                            <td>{{$p->jenis_pembayaran}}</td>
                            <td>
                                Pemasukan : Rp. {{$p->pemasukan}}, - <br>
                                Pengeluaran : Rp. {{$p->pengeluaran}}, - <br>
                                Sisa : Rp. {{$p->sisa}}, -
                            </td>
                            <td>
                                <a href="{{route('kasir.edit', ['id' => $p->id])}}" class="btn btn-sm btn-outline-success"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('kasir.delete', ['id' => $p->id]) }}" class="btn btn-sm btn-outline-warning"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Belum ada data</p>
            @endif
        </div>
    </div>
@stop