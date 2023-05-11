@extends('adminlte::page')
@section('title', 'Sidang')

@section('content_header')
    <h2>Data Hasil Sidang</h2>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <i class="fa fa-database"></i>
        </div>
        <div class="card-body">
            {{-- Setup data for datatables --}}
            @php
                $heads = ['Nomor Antrian', 'Perkara', 'Pihak 1', 'Status Antrian', 'Tanggal Sidang'];
                
                
                //  build data view
                $data = [];
                foreach ($antrians as $antrian) {
                    $classStatus = ['primary', 'warning', 'info', 'secondary', 'success', 'danger'];
                    $myStatus =
                        '<span class="badge badge-' .
                        $classStatus[$antrian->status] .
                        '">
                                 ' .
                        $antrian->strStatus() .
                        '
                             </span>';
                
                    $data[] = [
                        $antrian->nomor_antrian, 
                        $antrian->perkara->jenis_perkara->jenis, 
                        $antrian->perkara->pihak1, 
                        $myStatus, 
                        $antrian->updated_at->diffForHumans()];
                }
                
                $config = [
                    'data' => $data,
                    'order' => [[1, 'asc']],
                    'columns' => [null, null, null, null, ['orderable' => false]],
                ];
            @endphp

            {{-- Minimal example / fill data using the component slot --}}
            <x-adminlte-datatable id="table1" :heads="$heads">
                @foreach ($config['data'] as $row)
                    <tr>

                        @foreach ($row as $cell)
                            <td>{!! $cell !!}</td>
                            {{-- <td>{{ $cell }}</td> --}}
                        @endforeach
                    </tr>
                @endforeach
            </x-adminlte-datatable>

            {{-- Compressed with style options / fill data using the plugin config --}}
            <x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark" :config="$config" striped hoverable
                bordered compressed />
        </div>
    </div>
@stop
