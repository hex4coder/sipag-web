@extends('adminlte::page')

@section('title', 'Detail Saksi')

@section('content_header')
    <h3>Detail Saksi</h3>
@stop


@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <div class="float-left">
                    <a href="{{ route('saksi.index') }}" class="btn btn-outline-primary btn-sm"><i class="fa fa-reply"></i>
                        Kembali</a>
                </div>

            </div>
        </div>
        <div class="card-body">
            <table>

                <tr>
                    <td>Nomor Perkara</td>
                    <td>:</td>
                    <td class="text-info">{{ $saksi->perkara->nomor_perkara }}</td>
                </tr>

                <tr>
                    <td>Pihak 1</td>
                    <td>:</td>
                    <td><strong>{{ $saksi->perkara->pihak1 }}</strong></td>
                </tr>

                <tr>
                    <td>Pihak 2</td>
                    <td>:</td>
                    <td><strong>{{ $saksi->perkara->pihak2 }}</strong></td>
                </tr>

                <tr>
                    <td>Nama Saksi</td>
                    <td>:</td>
                    <td>{{ $saksi->nama }} Bin/Binti {{ $saksi->bin }}</td>
                </tr>

                <tr>
                    <td>Saksi Ke</td>
                    <td>:</td>
                    <td>{{ $saksi->saksi_ke }}</td>
                </tr>


                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $saksi->jln }} {{ $saksi->dusun }} {{ $saksi->desa }} {{ $saksi->kec }}
                        {{ $saksi->kab }}</td>
                </tr>

                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{ $saksi->tempat_lahir }}, {{ $saksi->tanggal_lahir }}</td>
                </tr>

                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ $saksi->pekerjaan }}</td>
                </tr>

                <tr>
                    <td>Pendidikan</td>
                    <td>:</td>
                    <td>{{ $saksi->pendidikan }}</td>
                </tr>

                <tr>
                    <td>Status Kawin</td>
                    <td>:</td>
                    <td>{{ $saksi->status_kawin }}</td>
                </tr>

                <tr>
                    <td>Berkebutuhan Khusus</td>
                    <td>:</td>
                    <td>{{ $saksi->berkebutuhan_khusus }}</td>
                </tr>

                <tr>
                    <td>Hubungan dengan Pihak 1</td>
                    <td>:</td>
                    <td>{{ $saksi->hubungan }}</td>
                </tr>

            </table>
        </div>
    </div>
@stop
