@extends('adminlte::page')

@section('title', 'Data Perkara')

@section('content_header')
<h1>Data Perkara</h1>
@stop

@section('content')
{{-- content --}}
@if ($message = Session::get('success'))
<x-adminlte-callout theme="success" class="bg-teal" icon="fas fa-lg fa-thumbs-up" title="Done" id="message">
    <i class="text-dark">{{$message}}</i>
</x-adminlte-callout>
@endif

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Detail</h3>
    </div>

    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <form action="{{route('perkara.index')}}" method="get">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search"
                                    class="form-control form-control-sm" placeholder="" aria-controls="example1" name="search" value="{{$search}}"></label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 pull-right">
                        <a href="{{ url('perkara/create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Perkara Baru
                        </a>
                        <a href="{{ route('perkara.import') }}" class="btn btn-outline-success"><i class="fa fa-download"></i> Import Data</a>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                        aria-describedby="example1_info">
                        <thead>
                            <tr>
                                <th class="sorting sorting_asc" tabindex="0" rowspan="1" colspan="1">Tanggal Pendaftaran</th>
                                <th class="sorting sorting_asc" tabindex="0" rowspan="1" colspan="1">No. Perkara</th>
                                <th class="sorting" tabindex="0" rowspan="1" colspan="1">Jenis Perkara</th>
                                <th class="sorting" tabindex="0" rowspan="1" colspan="1">Pihak 1</th>
                                <th class="sorting" tabindex="0" rowspan="1" colspan="1">Pihak 2</th>
                                <th class="sorting" tabindex="0" rowspan="1" colspan="1">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $p)
                                <tr class="odd">
                                    <td class="sorting_1 dtr-control">{{$p->tanggal_registrasi}}</td>
                                    <td class="sorting_1 dtr-control">{{$p->nomor_perkara}}</td>
                                    <td>{{$p->jenis_perkara->jenis}}</td>
                                    <td>{{$p->pihak1}}</td>
                                    <td>{{$p->pihak2}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col">
                                                <a href="{{route('perkara.edit', $p->id)}}" class="btn btn-outline-success btn-xs"><i class="fa fa-edit"></i></a>
                                            </div>
                                            <div class="col">
                                                <a href="{{route('perkara.show', $p->id)}}" class="btn btn-xs btn-outline-warning"><i class="fa fa-eye"></i></a>
                                            </div>
                                            <div class="col">
                                                <form action="{{route('perkara.destroy', $p->id)}}" method="post">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                    <button type="submit" class="btn btn-xs btn-outline-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
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
    $(function() {
        setTimeout(() => {
            $('#message').removeAttr('style').hide()
        }, 2500);
    })
</script>
@stop