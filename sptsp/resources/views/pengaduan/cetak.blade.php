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

                <h1>Laporan Data Aduan</h1>
            </center>
        </div>
        <div class="card-body">
            @if (count($listaduan) > 0)
                {{-- TODO: Membuat daftar list saksi --}}
                <table class="table table-stripped" border="1">
                    <thead>
                        <tr>
                            <th>Nama Pegawai</th>
                            <th>Isi Pengaduan</th>
                            <th>Tanggal</th>
                            <th>Bukti Pengaduan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listaduan as $aduan)
                            <tr>
                                <td>{{ $aduan->pegawai->nama }}</td>
                                <td>{{ $aduan->isi }}</td>
                                <td>{{ $aduan->created_at }}</td>
                                <td>
                                    <img src="{{ $aduan->url_foto_bukti_cetak() }}"
                                        alt="{{ $aduan->url_foto_bukti_cetak() }}" height="100px">
                                </td>
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
