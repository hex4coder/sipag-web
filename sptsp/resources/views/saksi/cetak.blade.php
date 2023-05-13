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

                <h1>Laporan Data Saksi</h1>
            </center>
        </div>
        <div class="card-body">
            @if (count($listsaksi) > 0)
                {{-- TODO: Membuat daftar list saksi --}}
                <table border="1" class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Nomor Perkara</th>
                            <th>Pihak 1</th>
                            <th>Saksi Ke</th>
                            <th>Nama Saksi</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Pekerjaan</th>
                            <th>Pendidikan</th>
                            <th>Alamat</th>
                            <th>Hubungan Dengan Pihak 1</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listsaksi as $saksi)
                            <tr>
                                <td>{{ $saksi->perkara->nomor_perkara }}</td>
                                <td>{{ $saksi->perkara->pihak1 }}</td>
                                <td>Saksi ke {{ $saksi->saksi_ke }}</td>
                                <td>{{ $saksi->nama }} Bin/Binti {{ $saksi->bin }}</td>
                                <td>{{ $saksi->tempat_lahir }}, {{ $saksi->tanggal_lahir }}</td>
                                <td>{{ $saksi->pekerjaan }}</td>
                                <td>{{ $saksi->pendidikan }}</td>
                                <td>{{ $saksi->jln }} {{ $saksi->dusun }} {{ $saksi->desa }} {{ $saksi->kec }}
                                    {{ $saksi->kab }}</td>
                                <td>{{ $saksi->hubungan }}</td>
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
