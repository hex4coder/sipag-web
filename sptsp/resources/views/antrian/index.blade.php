@extends('adminlte::page')
@section('title', 'Antrian')

@section('content_header')
    <h1>Antrian</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">

                <div class="col-auto">
                    <h3>Daftar Antrian</h3>
                </div>
                <div class="col-auto ml-auto">
                    <div class="row">

                        <form action="{{ route('antrian.index') }}" method="get" class="row">
                            <div class="form-check">
                                @if ($all == 'on')
                                    <input type="checkbox" class="form-check-input" id="all" name="all" checked>
                                @else
                                    <input type="checkbox" class="form-check-input" id="all" name="all">
                                @endif
                                <label class="form-check-label" for="all">Semua</label>
                            </div>
                            <p style="width: 10px"> </p>
                            <button type="submit" name="submit" class="btn btn-primary btn-sm">Refresh Data</button>
                        </form>
                        &nbsp;
                        @if (count($antrians) > 0)
                            <div class="float-right">
                                <a href="{{ route('antrian.cetak') }}" target="_blank"
                                    class="btn btn-outline-primary btn-sm"><i class="fa fa-print"></i> Cetak Data</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            {{-- Setup data for datatables --}}
            @php
                $heads = ['Nomor Antrian', 'Perkara', 'Pihak 1', 'Status Antrian', 'Opsi'];
                
                $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
                $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
                
                //  build data view
                $data = [];
                foreach ($antrians as $antrian) {
                    $btnDetails = '<a href="' . route('antrian.detail', ['id' => $antrian->id]) . '" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details"><i class="fa fa-lg fa-fw fa-eye"></i></a>';
                    $btnIsiSidang = '<a href="' . route('antrian.isi_sidang', ['id' => $antrian->id]) . '" class="btn btn-xs btn-default text-pink mx-1 shadow" title="Isi Data Sidang"><i class="fa fa-lg fa-fw fa-edit"></i></a>';
                    $terimaBtn = '<a href="' . route('antrian.update_status', ['id' => $antrian->id, 'status' => 1]) . '" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Terima"><i class="fa fa-lg fa-fw fa-check"></i></a>';
                    $callBtn = '<a href="' . route('antrian.update_status', ['id' => $antrian->id, 'status' => 2]) . '" class="btn btn-xs btn-default text-orange mx-1 shadow" title="Panggil"><i class="fa fa-lg fa-fw fa-phone"></i></a>';
                    $masukBtn = '<a href="' . route('antrian.update_status', ['id' => $antrian->id, 'status' => 3]) . '" class="btn btn-xs btn-default text-warning mx-1 shadow" title="Masuk Ruang Sidang"><i class="fa fa-lg fa-fw fa-home"></i></a>';
                    $selesaiBtn = '<a href="' . route('antrian.update_status', ['id' => $antrian->id, 'status' => 4]) . '" class="btn btn-xs btn-default text-purple mx-1 shadow" title="Selesai Sidang"><i class="fa fa-lg fa-fw fa-check"></i></a>';
                    $rejectBtn = '<a href="' . route('antrian.update_status', ['id' => $antrian->id, 'status' => 5]) . '" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Lewat"><i class="fa fa-lg fa-fw fa-phone-slash"></i></a>';
                
                    $status = (int) $antrian->status;
                
                    if ($status == 0) {
                        $actions = '<nobr>' . $btnDetails . $btnIsiSidang . ($antrian->ruang_sidang == '-' ? '' : $terimaBtn) . $rejectBtn . '</nobr>';
                    } elseif ($status == 1) {
                        $actions = '<nobr>' . $btnDetails . $btnIsiSidang . ($antrian->ruang_sidang == '-' ? '' : $callBtn) . '</nobr>';
                    } elseif ($status == 2) {
                        $actions = '<nobr>' . $btnDetails . $btnIsiSidang . ($antrian->ruang_sidang == '-' ? '' : $masukBtn) . '</nobr>';
                    } elseif ($status == 3) {
                        $actions = '<nobr>' . $btnDetails . $btnIsiSidang . ($antrian->ruang_sidang == '-' ? '' : $selesaiBtn) . '</nobr>';
                    } elseif ($status == 4) {
                        $actions = '<nobr>' . $btnDetails . $btnIsiSidang . '</nobr>';
                    } elseif ($status == 5) {
                        $actions = '<nobr>' . $btnDetails . $btnIsiSidang . ($antrian->ruang_sidang == '-' ? '' : $terimaBtn) . '</nobr>';
                    }
                
                    $classStatus = ['primary', 'warning', 'info', 'secondary', 'success', 'danger'];
                
                    $myStatus =
                        '<span class="badge badge-' .
                        $classStatus[$antrian->status] .
                        '">
                                ' .
                        $antrian->strStatus() .
                        '
                            </span>';
                
                    $data[] = [$antrian->nomor_antrian . ' diambil ' . $antrian->created_at->diffForHumans() . '<br><br>' . $antrian->perkara->nomor_perkara, $antrian->perkara->jenis_perkara->jenis, $antrian->perkara->pihak1, $myStatus, $actions];
                }
                
                $config = [
                    'data' => $data,
                    'order' => [[1, 'asc']],
                    'columns' => [null, null, null, null, ['orderable' => false]],
                ];
            @endphp

            {{-- Minimal example / fill data using the component slot --}}
            <x-adminlte-datatable id="table1" :heads="$heads" hoverable striped>
                @foreach ($config['data'] as $row)
                    <tr>
                        @foreach ($row as $cell)
                            <td>{!! $cell !!}</td>
                            {{-- <td>{{ $cell }}</td> --}}
                        @endforeach
                    </tr>
                @endforeach
            </x-adminlte-datatable>
        </div>
    </div>
@stop
