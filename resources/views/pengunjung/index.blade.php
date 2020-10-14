<h1>DATA PENGUNJUNG SMK NURUl ISLAM</h1>
<table>
    <tr>
        <th>NAMA</th>
        <th>NO.HENPHON\</th>
        <th>ASAL</th>
        <th>TUJUAN</th>
        <th>DESKRIPSI</th>
        <th>FOTO</th>
    </tr>
    @foreach($data_pengunjung as $pengunjung)
    <tr>
        <th>{{ $pengunjung->nama }}</th>
        <th>{{ $pengunjung->no_henphon }}</th>
        <th>{{ $pengunjung->asal }}</th>
        <th>{{ $pengunjung->deskripsi }}</th>
        <th>{{ $pengunjung->foto }}</th>
    </tr>
    @endforeach
</table>