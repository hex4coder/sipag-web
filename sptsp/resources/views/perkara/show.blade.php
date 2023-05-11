@extends('adminlte::page')
@section('title', 'Detail Perkara')

@section('content_header')
    <h1>Detail Perkara</h1>
@stop

@section('content')
<x-adminlte-card :title="$perkara->jenis_perkara->jenis" theme="info" icon="fas fa-lg fa-bell" maximizable>
    <h4 class="text-success">Informasi Perkara</h4>
    <table>
        <tr>
            <td>Nomor Perkara</td>
            <td style="padding-left: 100px;">:</td>
            <td><strong class="text-purple">{{$perkara->nomor_perkara}}</strong></td>
        </tr>

        <tr>
            <td>Tanggal Registrasi Ke Sistem</td>
            <td style="padding-left: 100px;">:</td>
            <td><strong class="text-info">{{$perkara->tanggal_registrasi}}</strong></td>
        </tr>

        <tr>
            <td>Pihak 1</td>
            <td style="padding-left: 100px;">:</td>
            <td>{{$perkara->pihak1}}</td>
        </tr>

        <tr>
            <td>Pihak 2</td>
            <td style="padding-left: 100px;">:</td>
            <td>{{$perkara->pihak2}}</td>
        </tr>

        <tr>
            <td>Saksi 1</td>
            <td style="padding-left: 100px;">:</td>
            <td>{{$perkara->saksi1}}</td>
        </tr>

        <tr>
            <td>Saksi 2</td>
            <td style="padding-left: 100px;">:</td>
            <td>{{$perkara->saksi2}}</td>
        </tr>

        <tr>
            <td>Saksi 3</td>
            <td style="padding-left: 100px;">:</td>
            <td>{{$perkara->saksi3}}</td>
        </tr>

        <tr>
            <td>Tahapan Akhir</td>
            <td style="padding-left: 100px;">:</td>
            <td>{{$perkara->tahapan_akhir}}</td>
        </tr>
    </table>
    <x-slot name="footerSlot">
        <a href="{{route('perkara.index')}}" class="btn btn-outline-warning"><i class="fa fa-reply"></i> Kembali</a>
        <a href="{{ route('perkara.edit', $perkara->id) }}" class="btn btn-outline-success"><i class="fa fa-edit"></i> Edit</a>
    </x-slot>
</x-adminlte-card>
@stop