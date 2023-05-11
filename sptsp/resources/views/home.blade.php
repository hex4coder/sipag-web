@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')


<x-adminlte-alert theme="success" title="Success">
  Hey, selamat datang kembali!
</x-adminlte-alert>


<div class="row">
  <div class="col">
    <div class="info-box">
      <span class="info-box-icon bg-info"><i class="fa fa-bug"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Jenis Perkara</span>
        <span class="info-box-number">{{$data['jenis_perkara']}}</span>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="info-box bg-success">
      <span class="info-box-icon"><i class="fa fa-info"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Prasyarat</span>
        <span class="info-box-number">{{$data['prasyarat']}}</span>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="info-box bg-gradient-warning">
      <span class="info-box-icon"><i class="far fa-copy"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Perkara</span>
        <span class="info-box-number">{{$data['perkara']}}</span>
      </div>
    </div>
  </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
  setTimeout(() => {
            $(".alert").alert('close');
        }, 4000);
        
</script>
@stop