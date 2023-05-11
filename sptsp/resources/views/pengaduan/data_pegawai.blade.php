@extends('adminlte::page')

@section('title', 'Data Pegawai')

@section('content_header')
<h1>Data Pegawai</h1>
@stop

@section('content')
{{-- content --}}
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Detail</h3>
    </div>

    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <form action="{{route('pengaduan.pegawai')}}" method="get">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search"
                                    class="form-control form-control-sm" placeholder="" aria-controls="example1" name="search" value="{{$search}}"></label>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                        aria-describedby="example1_info">
                        <thead>
                            <tr>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending">NIP
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending">Nama Pegawai</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending">Jabatan</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $p)
                                <tr class="odd">
                                    <td class="sorting_1 dtr-control">{{$p->nip}}</td>
                                    <td>{{$p->nama}}</td>
                                    <td>{{$p->jabatan}}</td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                       
                    </table>
                </div>
            </div>
           {{$data->links()}}
        </div>
    </div>

</div>
@stop

@section('css')

@stop

@section('js')
<script>

</script>
@stop