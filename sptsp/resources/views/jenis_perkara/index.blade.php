@extends('adminlte::page')

@section('title', 'Jenis Perkara')

@section('content_header')
<h1>Jenis Perkara</h1>
@stop

@section('content')
@if ($message = Session::get('success'))
<x-adminlte-callout theme="success" class="bg-teal" icon="fas fa-lg fa-thumbs-up" title="Done" id="message">
    <i class="text-dark">{{$message}}</i>
</x-adminlte-callout>
@endif


<x-adminlte-card title="Data Jenis Perkara" theme="purple" icon="fas fa-lg fa-database" collapsible>
    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <form action="{{route('jenis_perkara.index')}}" method="get">
            <div class="row">
                <div class="col-sm-8">
                    <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search"
                                class="form-control form-control-sm" placeholder="" aria-controls="example1" name="search" value="{{$search}}"></label>
                    </div>
                </div>

                <div class="col-sm-4">
                    <a href="{{route('jenis_perkara.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Jenis Perkara</a>
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
                                >Jenis
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                >Tanggal Entri</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                >Opsi</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $p)
                            <tr class="odd">
                                <td class="sorting_1 dtr-control">{{$p->jenis}}</td>
                                <td>{{$p->created_at}}</td>
                                <td>
                                    <div class="row">
                                        <a href="{{route('jenis_perkara.edit', $p->id)}}" class="btn btn-outline-success"><i class="fa fa-edit"></i></a>

                                        <form action="{{route('jenis_perkara.destroy', $p->id)}}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                {{$data->links()}}
            </div>
        </div>
    </div>    
</x-adminlte-card>
@stop

@section('js')
<script>
    $(function() {
        setTimeout(() => {
            $("#message").removeAttr("style").hide();
        }, 2000);
    })
</script>
@stop