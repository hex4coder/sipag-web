@extends('adminlte::page')
@section('title', 'Jenis Perkara Baru')

@section('content_header')
<h1>Jenis Perkara</h1>
@stop


@section('content')
<form action="{{route('jenis_perkara.update', $jenisPerkara->id)}}" method="post">
    @csrf
    {{@method_field('PUT')}}
    <x-adminlte-card title="Form Update Jenis Perkara" theme="purple" theme-mode="outline" class="elevation-3"
        header-class="bg-light" footer-class="border-top rounded border-light" icon="fas fa-lg fa-bell">
        <x-adminlte-input name="jenis" placeholder="Ketikkan jenis perkara ..." required value="{{$jenisPerkara->jenis}}" />
        <x-slot name="footerSlot">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Perbarui</button>
            <a href="{{route('jenis_perkara.index')}}" class="btn btn-outline-warning"><i class="fa fa-reply"></i>
                Kembali</a>
        </x-slot>
    </x-adminlte-card>
</form>
@stop