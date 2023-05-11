@extends('adminlte::page')

@section('title', 'Pendaftaran')

@section('content_header')
    <h1>Pendaftaran</h1>
@stop

@section('content')
    <div class="row">
        @foreach ($data as $d)
            <div class="col-12 col-md-6">
                <div class="card card-success">
                    <div class="card-header">
                    <h3 class="card-title">Kecamatan {{$d['kecamatan']}}</h3>
                    <div class="card-tools">
                        <!-- Buttons, labels, and many other things can be placed here! -->
                        <!-- Here is a label for example -->
                        <span class="badge badge-warning">Biaya</span>
                    </div>
                    <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    @foreach ($d['dataBiaya'] as $b)
                        <div class="card-body">
                            <table class="table" style="width: 100%;">
                                {{-- {{dd($d)}} --}}
                                <tr>
                                    <td>Desa {{$b->desa}}</td>
                                    <td class="text-right">Rp. {{$b->biaya}}, -</td>
                                </tr>
                            </table>
                        </div>
                    @endforeach
                </div>
                <!-- /.card -->
            </div>
            
        @endforeach
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

    </script>
@stop