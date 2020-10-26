@extends('layouts.templet')

@section('content')
<div class="container">
    <h1 align="center">Selamat Datang</h1>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mt-4">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kontak</th>
                        <th>Asal Tempat</th>
                        <th>jenis kelamin</th>
                        <th>Keterangan</th>
                        <th>Tujuan</th>
                        <th>Foto</th>
                        <td>Aksi</td>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($daftar as $g)
                        <tr>
                        <td>{{ $no ++ }}</td>
                        <td>{{ $g->Nama }}</td>
                        <td>{{ $g->Kontak }}</td>
                        <td>{{ $g->Asal_tempat }}</td>
                        <td>{{ $g->jenis_kelamin }}</td>
                        <td>{{ $g->Keterangan }}</td>
                        <td>{{ $g->tujuan }}</td>
                        <td ><img src="/img/<?= $g['foto']; ?>"></td>
                        <td>
                            <a href="/delete/{{ $g->id }}" class="btn btn-danger">Hapus</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
