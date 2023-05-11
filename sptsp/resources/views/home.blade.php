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
                    <span class="info-box-number">{{ $data['jenis_perkara'] }}</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="info-box bg-success">
                <span class="info-box-icon"><i class="fa fa-info"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Prasyarat</span>
                    <span class="info-box-number">{{ $data['prasyarat'] }}</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="info-box bg-gradient-warning">
                <span class="info-box-icon"><i class="far fa-copy"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Perkara</span>
                    <span class="info-box-number">{{ $data['perkara'] }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Grafik Data Perkara</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <canvas id="myChart"></canvas>

                </div>


            </div>

        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>

        function randomColor() {
          var r = Math.floor(Math.random() * 256)
          var g = Math.floor(Math.random() * 256)
          var b = Math.floor(Math.random() * 256)

          return `rgb(${r}, ${g}, ${b})`
        
        }

        const dataServer =  {!! json_encode($data) !!};;
        const dataGrafik = dataServer.grafik;
        var dataSet = []
        var dataColor = []

        dataGrafik.data.forEach(i => {
          dataSet.push(i.perkara)
          dataColor.push(randomColor())
        });

        const ctx = document.getElementById('myChart');

        const data = {
            labels: dataGrafik.list_jenis,
            datasets: [{
                label: 'Daftar Perkara',
                data: dataSet,
                backgroundColor: dataColor,
                hoverOffset: 4
            }]
        };

        const config = {
            type: 'doughnut',
            data: data,
        };
        new Chart(ctx, config);
    </script>


    <script>
        setTimeout(() => {
            $(".alert").alert('close');
        }, 4000);
    </script>
@stop
