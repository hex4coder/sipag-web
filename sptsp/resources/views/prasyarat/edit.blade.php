@extends('adminlte::page')


@section('title', 'Prasyarat')


@section('content_header')
    <h1>Edit Prasyarat</h1>
@stop


@section('content')
<form action="{{route('syarat.update')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $syarat->id }}">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('syarat.index') }}" class="btn btn-outline-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="card-body">
                {{-- daftar jenis perkara --}}
                <x-adminlte-select name="jenis_perkara_id" label="Jenis Perkara" data-placeholder="Pilih jenis perkara" value="{{$syarat->jenis_perkara_id}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-bug"></i>
                        </div>
                    </x-slot>
                    @foreach ($jenisPerkara as $jp)
                    @if ($jp->id != $syarat->jenis_perkara_id)
                        
                    <option value="{{$jp->id}}">{{$jp->jenis}}</option>
                    @else
                    <option selected value="{{$jp->id}}">{{$jp->jenis}}</option>
                        
                    @endif
                    @endforeach
                </x-adminlte-select>

                <x-adminlte-textarea name="syarat" label="Syarat Baru" rows=5 label-class="text-warning"
                    igroup-size="sm" placeholder="Isikan syarat baru" value="{{$syarat->syarat}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-lg fa-file-alt text-warning"></i>
                        </div>
                    </x-slot>
                    {{$syarat->syarat}}
                </x-adminlte-textarea>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Perbarui!</button>
                </div>
            </div>
        </form>
@stop