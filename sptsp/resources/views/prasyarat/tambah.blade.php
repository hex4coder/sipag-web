@extends('adminlte::page')


@section('title', 'Prasyarat')


@section('content_header')
    <h1>Tambah Prasyarat</h1>
@stop


@section('content')
<form action="{{route('syarat.store')}}" method="post">
    @csrf
    <div class="card">
        <div class="card-header">
            <a href="{{ route('syarat.index') }}" class="btn btn-outline-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="card-body">
                {{-- daftar jenis perkara --}}
                <x-adminlte-select name="jenis_perkara_id" label="Jenis Perkara" data-placeholder="Pilih jenis perkara">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-bug"></i>
                        </div>
                    </x-slot>
                    @foreach ($jenisPerkara as $jp)
                    <option value="{{$jp->id}}">{{$jp->jenis}}</option>
                    @endforeach
                </x-adminlte-select>

                <x-adminlte-textarea name="syarat" label="Syarat Baru" rows=5 label-class="text-warning"
                    igroup-size="sm" placeholder="Isikan syarat baru">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-lg fa-file-alt text-warning"></i>
                        </div>
                    </x-slot>
                </x-adminlte-textarea>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Tambahkan!</button>
                </div>
            </div>
        </form>
@stop