@extends('adminlte::page')

@section('title', 'Produk')

@section('content_header')
    <h4>Form Tambah Produk</h4>
@stop

@section('content')
<form action="{{route('produk.store')}}" method="post">
    @csrf
    <div class="card">
        <div class="card-header">
            <a href="{{route('produk.index')}}" class="btn btn-outline-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>

        
            
        <div class="card-body">
            <x-adminlte-select name="perkara_id" label="Perkara" data-placeholder="Pilih Perkara!">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-bug"></i>
                    </div>
                </x-slot>
                @foreach ($perkaras as $jp)
                <option value="{{$jp->id}}">[{{$jp->nomor_perkara}}] - {{$jp->jenis_perkara->jenis}} - (Pihak 1) {{$jp->pihak1}} - (Pihak 2) {{$jp->pihak2}}</option>
                @endforeach
            </x-adminlte-select>

            <x-adminlte-textarea name="tahapan_akhir" label="Tahapan Akhir" rows=5 label-class="text-warning"
                    igroup-size="sm" placeholder="Kosongkan jika tidak ada">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-lg fa-file-alt text-warning"></i>
                        </div>
                    </x-slot>
                </x-adminlte-textarea>


        </div>
       

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Tambahkan</button>
        </div>
    </div>
</form>
@stop