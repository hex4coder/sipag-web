@extends('adminlte::page')

@section('title', 'Isi Data Sidang')


@section('content_header')
    <h1>Isi Data Sidang</h1>
@endsection


@section('content')
    <form action="{{ route('antrian.post_isi_sidang') }}" method="post">
        @csrf
        <div class="card p-2">
            <div class="card-header">
                <a href="{{ route('antrian.detail', ['id' => $antrian->id]) }}" class="btn btn-outline-primary">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
            <div class="card-body">
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
                <table>
                    <tr>
                        <td>Agenda</td>
                        <td>:</td>
                        <td>
                            <x-adminlte-input name="agenda" label="Agenda Persidangan" value="{{ $antrian->agenda }}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text text-purple">
                                        <i class="fas fa-address-card"></i>
                                    </div>
                                </x-slot>
                                <x-slot name="bottomSlot">
                                    <span class="text-sm text-gray">
                                        Isi dengan benar!
                                    </span>
                                </x-slot>
                            </x-adminlte-input>
                        </td>
                    </tr>

                    <tr>
                        <td>Sidang Ke</td>
                        <td>:</td>
                        <td>
                            @if ($antrian->sidang_ke == '-')
                                <x-adminlte-select name="sidang_ke" label="Sidang Ke" data-placeholder="Sidang Ke"
                                    value=''>
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text bg-gradient-info">
                                            <i class="fas fa-bug"></i>
                                        </div>
                                    </x-slot>
                                    <option value="">-- Pilih Sidang Keberapa? --</option>
                                    @foreach (['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'] as $ke)
                                        @if ($antrian->sidang_ke == $ke)
                                            <option selected value="{{ $ke }}">{{ $ke }}</option>
                                        @else
                                            <option value="{{ $ke }}">{{ $ke }}</option>
                                        @endif
                                    @endforeach
                                </x-adminlte-select>
                            @else
                                <x-adminlte-select name="sidang_ke" label="Sidang Ke" data-placeholder="Sidang Ke"
                                    value='{{ $antrian->sidang_ke }}'>
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text bg-gradient-info">
                                            <i class="fas fa-bug"></i>
                                        </div>
                                    </x-slot>
                                    <option value="">-- Pilih Sidang Keberapa? --</option>
                                    @foreach (['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'] as $ke)
                                        @if ($antrian->sidang_ke == $ke)
                                            <option selected value="{{ $ke }}">{{ $ke }}</option>
                                        @else
                                            <option value="{{ $ke }}">{{ $ke }}</option>
                                        @endif
                                    @endforeach
                                </x-adminlte-select>
                            @endif

                        </td>
                    </tr>

                    <tr>
                        <td>Ruang Sidang</td>
                        <td>:</td>
                        <td>
                            <x-adminlte-select name="ruang_sidang" label="Sidang Ke" data-placeholder="Sidang Ke"
                                value='{{ $antrian->ruang_sidang }}'>
                                <x-slot name="prependSlot">
                                    <div class="input-group-text bg-gradient-info">
                                        <i class="fas fa-bug"></i>
                                    </div>
                                </x-slot>
                                @if ($antrian->ruang_sidang == '-')
                                    <option selected value="-">-- Pilih Ruang Sidang? --</option>
                                @else
                                    <option value="-">-- Pilih Ruang Sidang? --</option>
                                @endif
                                @foreach (['Ruang Sidang 1', 'Ruang Sidang 2'] as $ruangSidang)
                                    @if ($antrian->ruang_sidang == $ruangSidang)
                                        <option selected value="{{ $ruangSidang }}">{{ $ruangSidang }}</option>
                                    @else
                                        <option value="{{ $ruangSidang }}">{{ $ruangSidang }}</option>
                                    @endif
                                @endforeach
                            </x-adminlte-select>
                        </td>
                    </tr>

                    <tr>
                        <td>KM/PP/JSP</td>
                        <td>:</td>
                        <td>
                            <x-adminlte-input name="km_pp_jsp" label="" value="{{ $antrian->km_pp_jsp }}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text text-info">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </x-slot>

                            </x-adminlte-input>
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="id" value="{{ $antrian->id }}">
                <hr>
                <div class="row">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Submit Sidang</button>
                </div>
            </div>
        </div>
    </form>
@endsection
