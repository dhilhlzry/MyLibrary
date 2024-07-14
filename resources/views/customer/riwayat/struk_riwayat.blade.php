<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library - Website</title>
    <style>
        @media print {
            title {
                display: none;
            }
            #footer {
                display: none;
            }

        }
    </style>
</head>

<body>
    @csrf
    <h2 style="text-align: center;">Bukti Peminjaman</h2>
    <p>Nama Peminjam : {{ $detail->nama_lengkap }}</p>
    <p>Email : {{ $detail->email }}</p>
    <p>Alamat : {{ $detail->alamat }}</p>
    <div style="display: flex; gap: 50px;">
        <p>No Peminjaman: {{ $detail->kode_pinjam }}</p>
        <p>Tanggal Peminjman: {{ $detail->tanggal_pinjam }}</p>
        <p>Tanggal Pengembalian: {{ $detail->tanggal_kembali }}</p>
        <p>Status: @if ($detail->status == 'pinjam')
            Pinjam
        @endif
        @if ($detail->status == 'selesai')
            Selesai
        @endif</p>
    </div>
    <table border="5" style="text-align: center; width: 100%; border-color: lightgrey;">
        <tr>
            <th>Kode</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
        </tr>
        <tr>
            <td>{{ $detail->kode_buku }}</td>
            <td>{{ $detail->judul }}</td>
            <td>{{ $detail->penulis }}</td>
            <td>{{ $detail->penerbit }}</td>
            <td>{{ $detail->tahun_terbit }}</td>
        </tr>

    </table>
    @if ($detail->status == 'pinjam')
    <p style="text-align: center; font-size: 17px; font-family: 'Times New Roman', Times, serif;">Terima Kasih Telah
        Meminjam Buku Di Perpustakaan MyLibrary<br> Mohon Kembalikan Buku Tepat Pada Waktu Yang Tertera.</p>
    @endif
    @if ($detail->status == 'selesai')
    <p style="text-align: center; font-size: 17px; font-family: 'Times New Roman', Times, serif;">Terima Kasih Telah
        Meminjam Buku Di Perpustakaan MyLibrary<br> Silahkan Datang Kembali Dilain Waktu.</p>
    @endif
    <center id="footer">
        <p><a href="/hal_riwayat" style="text-align: right; bottom: auto;">Kembali</a></p>
    </center>
    <script>
        window.print();
    </script>

</body>

</html>
