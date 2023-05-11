@extends('adminlte::page')

@section('title', 'Transaksi Pembayaran')

@section('content_header')
    <h4>Form Tambah Transaksi Pembayaran</h4>
@stop

@section('content')
<form action="{{route('kasir.store')}}" method="post">
    @csrf
    <div class="card">
        <div class="card-header">
            <a href="{{route('kasir.index')}}" class="btn btn-outline-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>

        @if (isset($request))
        <div class="card-body">
            <x-adminlte-select name="perkara_id" label="Perkara" data-placeholder="Pilih Perkara!">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-bug"></i>
                    </div>
                </x-slot>
                @foreach ($perkaras as $jp)
                @if ($request->perkara_id == $jp->id)
                <option selected value="{{$jp->id}}">[{{$jp->nomor_perkara}}] - {{$jp->jenis_perkara->jenis}} - (Pihak 1) {{$jp->pihak1}} - (Pihak 2) {{$jp->pihak2}}</option>
                
                @else
                
                <option value="{{$jp->id}}">[{{$jp->nomor_perkara}}] - {{$jp->jenis_perkara->jenis}} - (Pihak 1) {{$jp->pihak1}} - (Pihak 2) {{$jp->pihak2}}</option>
                @endif
                @endforeach
            </x-adminlte-select>

            <x-adminlte-input name="jenis_pembayaran" label="Jenis Pembayaran" value="{{$request->jenis_pembayaran}}">
                <x-slot name="prependSlot">
                    <div class="input-group-text text-teal">
                        <i class="fa fa-database"></i>
                    </div>
                </x-slot>
                
            </x-adminlte-input>

            <x-adminlte-input name="pemasukan" label="Pemasukan" value="{{$request->pemasukan}}">
                <x-slot name="prependSlot">
                    <div class="input-group-text text-purple">
                        <i class="fas fa-address-card"></i>
                    </div>
                </x-slot>
                
            </x-adminlte-input>

            <x-adminlte-input name="pengeluaran" label="Pengeluaran" value="{{$request->pengeluaran}}">
                <x-slot name="prependSlot">
                    <div class="input-group-text text-purple">
                        <i class="fas fa-address-card"></i>
                    </div>
                </x-slot>
                
            </x-adminlte-input>


        </div>
        @else
            
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

            <x-adminlte-input name="jenis_pembayaran" label="Jenis Pembayaran">
                <x-slot name="prependSlot">
                    <div class="input-group-text text-teal">
                        <i class="fa fa-database"></i>
                    </div>
                </x-slot>
                
            </x-adminlte-input>

            <x-adminlte-input name="pemasukan" label="Pemasukan" value="0">
                <x-slot name="prependSlot">
                    <div class="input-group-text text-purple">
                        <i class="fas fa-address-card"></i>
                    </div>
                </x-slot>
                
            </x-adminlte-input>

            <x-adminlte-input name="pengeluaran" label="Pengeluaran" value="0">
                <x-slot name="prependSlot">
                    <div class="input-group-text text-purple">
                        <i class="fas fa-address-card"></i>
                    </div>
                </x-slot>
                
            </x-adminlte-input>


        </div>
        @endif

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Tambahkan</button>
        </div>
    </div>
</form>
@stop