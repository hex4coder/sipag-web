<div class="container">
    <div class="card">
        <div class="card-header">

            <div class="row">
                <img height="100px" src="{{ $_SERVER['DOCUMENT_ROOT'] . '/logo.png' }}" alt="logo">
                <h3>Pengadilan Agama Kabupaten Polewali Mandar Kelas 1B</h3>
                <h5>Tanggal : {{ $tanggal }}</h5>

            </div>
            <hr>
            <center>

                <h1>Laporan Data Sidang</h1>
            </center>
        </div>
        <div class="card-body">
            @if (count($antrians) > 0)
                {{-- TODO: Membuat daftar list antrian --}}
                <table border="1" class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Nomor Perkara</th>
                            <th>Nomor Antrian</th>
                            <th>Pihak 1</th>
                            <th>Pihak 2</th>
                            <th>Agenda</th>
                            <th>Ruang Sidang</th>
                            <th>Sidang Ke</th>
                            <th>KM / PP / JSP</th>
                            <th>Tanggal Sidang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($antrians as $antrian)
                            <tr>
                                <td>{{ $antrian->perkara->nomor_perkara }}</td>
                                <td>{{ $antrian->nomor_antrian }}</td>
                                <td>{{ $antrian->perkara->pihak1 }}</td>
                                <td>{{ $antrian->perkara->pihak2 }}</td>
                                <td>{{ $antrian->agenda }}</td>
                                <td>{{ $antrian->ruang_sidang }}</td>
                                <td>Sidang Ke {{ $antrian->sidang_ke }}</td>
                                <td>{{ $antrian->km_pp_jsp }}</td>
                                <td>{{ $antrian->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h5 class="text-center">Belum ada data</h5>
            @endif

        </div>
    </div>
</div>
