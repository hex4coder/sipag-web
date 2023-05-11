@extends('adminlte::page')
@section('title', 'Import Data Perkara')
@section('content_header')
<h1>Import Perkara</h1>
@stop


@section('content')
<form action="{{ route('perkara.proses_import') }}" method="post" enctype="multipart/form-data">
    @csrf
    <x-adminlte-card title="Form Import Data" theme="info" icon="fas fa-lg fa-bell" maximizable>
        {{-- With multiple slots and multiple files --}}
        <x-adminlte-input-file id="file" name="file" label="Upload file" placeholder="Pilih file ..." igroup-size="lg"
            legend="Choose" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
            <x-slot name="appendSlot">
                <x-adminlte-button theme="primary" label="Upload" />
            </x-slot>
            <x-slot name="prependSlot">
                <div class="input-group-text text-primary">
                    <i class="fas fa-file-upload"></i>
                </div>
            </x-slot>
        </x-adminlte-input-file>
        <x-slot name="footerSlot">
            <a href="{{route('perkara.index')}}" class="btn btn-outline-warning"><i class="fa fa-reply"></i> Kembali</a>
            <button type="submit" class="btn btn-outline-success"><i
                    class="fa fa-upload"></i> Laksanakan Import Data!</button>
        </x-slot>
    </x-adminlte-card>


</form>
@stop


@section('plugins.BsCustomFileInput', true)