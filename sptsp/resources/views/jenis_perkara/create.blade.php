@extends('adminlte::page')
@section('title', 'Jenis Perkara Baru')

@section('content_header')
<h1>Jenis Perkara</h1>
@stop


@section('content')
<form action="{{route('jenis_perkara.store')}}" method="post">
    @csrf
    <x-adminlte-card title="Form Penambahan Jenis Perkara" theme="purple" theme-mode="outline" class="elevation-3"
        header-class="bg-light" footer-class="border-top rounded border-light" icon="fas fa-lg fa-bell">
        <x-adminlte-input name="jenis" placeholder="Ketikkan jenis perkara baru ..." required />
        <x-slot name="footerSlot">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Tambahkan</button>
            <a href="{{route('jenis_perkara.index')}}" class="btn btn-outline-warning"><i class="fa fa-reply"></i>
                Kembali</a>
        </x-slot>
    </x-adminlte-card>
</form>
@stop