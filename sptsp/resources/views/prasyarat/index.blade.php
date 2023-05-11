@extends('adminlte::page')


@section('title', 'Prasyarat')


@section('content_header')
    <h1>Prasyarat</h1>
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
            <div class="row ml-auto">
                <div class="col">
                    <a href="{{ route('syarat.tambah') }}" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Jenis Perkara</th>
                        <th>Syarat</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($syarats as $s)
                    <tr>
                        <td>{{$s->jenis_perkara->jenis}}</td>
                        <td>{{$s->syarat}}</td>
                        <td class="row">
                            <div class="col">
                                <a href="{{route('syarat.edit', ['id' => $s->id])}}" class="btn btn-outline-info"><i class="fa fa-edit"></i></a>
                            </div>
                            <div class="col">
                                <a href="{{route('syarat.delete', ['id' => $s->id])}}" class="btn btn-outline-warning"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$syarats->links()}}
        </div>
    </div>
@stop