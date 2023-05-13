@extends('adminlte::page')


{{-- title --}}
@section('title', 'Antrian Detail')



{{-- header --}}
@section('content_header')
    <h1>Antrian Detail</h1>
@stop



{{-- content --}}
@section('content')
    <div class="card p-2">
        <div class="card-header">
            <div class="row">
                <a href="{{ route('antrian.index', ['all' => 'off']) }}" class="btn btn-outline-primary"><i
                        class="fa fa-arrow-left"></i> Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <h4 class="text-success text-underline">Data Antrian Nomor {{ $antrian->nomor_antrian }}</h4>
            <table>

                <tr>
                    <td>Waktu Pengambilan Antrian</td>
                    <td>:</td>
                    <td class="text-info">{{ $antrian->created_at->diffForHumans() }}</td>
                </tr>

                <tr>
                    <td>Pihak 1</td>
                    <td>:</td>
                    <td><strong>{{ $antrian->perkara->pihak1 }}</strong></td>
                </tr>

                <tr>
                    <td>Pihak 2</td>
                    <td>:</td>
                    <td><strong>{{ $antrian->perkara->pihak2 }}</strong></td>
                </tr>

                <tr>
                    <td>Perkara</td>
                    <td>:</td>
                    <td>{{ $antrian->perkara->jenis_perkara->jenis }}</td>
                </tr>

                @foreach ($antrian->perkara->saksi as $saksi)
                    <tr>
                        <td>Saksi Ke {{ $saksi->saksi_ke }}</td>
                        <td>:</td>
                        <td>{{ $saksi->nama }}</td>
                    </tr>
                @endforeach


                <tr>
                    <td>Agenda</td>
                    <td>:</td>
                    <td>{{ $antrian->agenda }}</td>
                </tr>

                <tr>
                    <td>Sidang Ke</td>
                    <td>:</td>
                    <td>{{ $antrian->sidang_ke }}</td>
                </tr>

                <tr>
                    <td>Ruang Sidang</td>
                    <td>:</td>
                    <td>{{ $antrian->ruang_sidang }}</td>
                </tr>

                <tr>
                    <td>KM/PP/JSP</td>
                    <td>:</td>
                    <td>{{ $antrian->km_pp_jsp }}</td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>

                        @if ($antrian->status == 0)
                            <span class="badge badge-primary">
                                {{ $antrian->strStatus() }}
                            </span>
                        @endif

                        @if ($antrian->status == 1)
                            <span class="badge badge-warning">
                                {{ $antrian->strStatus() }}
                            </span>
                        @endif

                        @if ($antrian->status == 2)
                            <span class="badge badge-info">
                                {{ $antrian->strStatus() }}
                            </span>
                        @endif

                        @if ($antrian->status == 3)
                            <span class="badge badge-secondary">
                                {{ $antrian->strStatus() }}
                            </span>
                        @endif

                        @if ($antrian->status == 4)
                            <span class="badge badge-success">
                                {{ $antrian->strStatus() }}
                            </span>
                        @endif

                        @if ($antrian->status == 5)
                            <span class="badge badge-danger">
                                {{ $antrian->strStatus() }}
                            </span>
                        @endif

                    </td>
                </tr>

            </table>
            <hr>
            {{-- baru --}}
            @if ($antrian->status == 0)
                <div class="row">
                    <a href="{{ route('antrian.update_status', ['id' => $antrian->id, 'status' => 1]) }}"
                        class="btn btn-primary">Terima/Setujui</a>
                    &nbsp;
                    <a href="{{ route('antrian.update_status', ['id' => $antrian->id, 'status' => 5]) }}"
                        class="btn btn-outline-danger">Lewat</a>
                    &nbsp;
                    <a href="{{ route('antrian.isi_sidang', ['id' => $antrian->id]) }}" class="btn btn-outline-warning">Isi
                        Data Persidangan</a>
                </div>
            @endif

            {{-- diterima --}}
            @if ($antrian->status == 1)
                <div class="row">
                    <a
                        href="{{ route('antrian.update_status', ['id' => $antrian->id, 'status' => 2]) }}"class="btn btn-primary">Panggil</a>
                    &nbsp; <a href="{{ route('antrian.isi_sidang', ['id' => $antrian->id]) }}"
                        class="btn btn-outline-warning">Isi
                        Data Persidangan</a>
                </div>
            @endif

            {{-- dipanggil --}}
            @if ($antrian->status == 2)
                <div class="row">
                    <a href="{{ route('antrian.update_status', ['id' => $antrian->id, 'status' => 3]) }}"
                        class="btn btn-primary">Masuk Sidang</a>
                    &nbsp;
                    <a href="{{ route('antrian.update_status', ['id' => $antrian->id, 'status' => 5]) }}"
                        class="btn btn-outline-danger">Lewat</a>
                    &nbsp;
                    <a href="{{ route('antrian.isi_sidang', ['id' => $antrian->id]) }}" class="btn btn-outline-warning">Isi
                        Data Persidangan</a>
                </div>
            @endif


            {{-- sedang sidang --}}
            @if ($antrian->status == 3)
                <div class="row">
                    <a
                        href="{{ route('antrian.update_status', ['id' => $antrian->id, 'status' => 4]) }}"class="btn btn-primary">Selesai
                        Sidang</a>
                    &nbsp; <a href="{{ route('antrian.isi_sidang', ['id' => $antrian->id]) }}"
                        class="btn btn-outline-warning">Isi
                        Data Persidangan</a>
                </div>
            @endif


            {{-- pass lewat --}}
            @if ($antrian->status == 5)
                <div class="row">
                    <a
                        href="{{ route('antrian.update_status', ['id' => $antrian->id, 'status' => 1]) }}"class="btn btn-primary">Panggil
                        Ulang</a>
                    &nbsp; <a href="{{ route('antrian.isi_sidang', ['id' => $antrian->id]) }}"
                        class="btn btn-outline-warning">Isi
                        Data Persidangan</a>
                </div>
            @endif
        </div>
    </div>
@stop
