@extends('adminlte::page')

@section('title', 'Perkara')

@section('content_header')
<h1>Update Perkara</h1>
@stop

@section('content')
<form action="{{route('perkara.update', $perkara->id)}}" method="post">
    @csrf
    {{method_field('PUT')}}
    <x-adminlte-card title="Form Edit Data Perkara" theme="purple" theme-mode="outline" class="elevation-3"
        header-class="bg-light" footer-class="border-top rounded border-light" icon="fas fa-lg fa-bell">

        <div class="row">
            <div class="col-sm-6">
                <x-adminlte-select name="jenis_perkara_id" label="Jenis Perkara" data-placeholder="Pilih jenis perkara">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-bug"></i>
                        </div>
                    </x-slot>
                    @foreach ($jenisPerkara as $jp)
                    @if ($jp->id == $perkara->jenis_perkara_id)
                        <option selected value="{{$jp->id}}">{{$jp->jenis}}</option>
                    @else
                        <option value="{{$jp->id}}">{{$jp->jenis}}</option>
                    @endif
                    @endforeach
                </x-adminlte-select>
            </div>

            <div class="col-sm-6">
                <x-adminlte-input name="nomor_perkara" label="Nomor Perkara" value="{{$perkara->nomor_perkara}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text text-purple">
                            <i class="fas fa-address-card"></i>
                        </div>
                    </x-slot>
                    <x-slot name="bottomSlot">
                        <span class="text-sm text-gray">
                            Contoh nomor perkara: 1/Pdt.G/2022/PA.Pwl
                        </span>
                    </x-slot>
                </x-adminlte-input>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6">
                <x-adminlte-input name="pihak1" label="Pihak 1" value="{{$perkara->pihak1}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
            </div>
            <div class="col-sm-6">
                <x-adminlte-input name="pihak2" label="Pihak 2" value="{{$perkara->pihak2}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6">
                <x-adminlte-input name="saksi1" label="Saksi 1" value="{{$perkara->saksi1}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
            </div>
            <div class="col-sm-6">
                <x-adminlte-input name="saksi2" label="Saksi 2" value="{{$perkara->saksi2}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                @php
                $config = ['format' => 'YYYY-MM-DD HH:mm:ss'];
                @endphp
                <x-adminlte-input-date label="Tanggal Registrasi" name="tanggal_registrasi" :config="$config"
                    placeholder="Pilih tanggal registrasi..." value="{{$perkara->tanggal_registrasi}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-clock"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-date>
            </div>
            <div class="col-sm-6">
                <x-adminlte-input name="saksi3" label="Saksi 3" value="{{$perkara->saksi3}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <x-adminlte-textarea name="tahapan_akhir" label="Tahapan Akhir" rows=5 label-class="text-warning"
                    igroup-size="sm" placeholder="Kosongkan jika tidak ada">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-lg fa-file-alt text-warning"></i>
                        </div>
                    </x-slot>
                    {{$perkara->tahapan_akhir}}
                </x-adminlte-textarea>
            </div>
        </div>





        <x-slot name="footerSlot">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Perbarui!</button>
            <a href="{{route('perkara.index')}}" class="btn btn-outline-warning"><i class="fa fa-reply"></i>
                Batal</a>
        </x-slot>
    </x-adminlte-card>
</form>
@stop

@section('plugins.TempusDominusBs4', true)
@section('plugins.Select2', true)