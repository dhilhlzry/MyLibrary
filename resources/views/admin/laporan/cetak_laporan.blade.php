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
    <h2 style="text-align: center;">Laporan Peminjaman My Library</h2>
    <h4 style="text-align: center;">Dengan Periode dari Tanggal {{ $dari }} Sampai dengan {{ $sampai }}
    </h4>

    <table border="5" style="text-align: center; width: 100%; border-color: lightgrey;">
        <tr style="height: 10px;">
            <th>ID</th>
            <th>Anggota</th>
            <th>Kode</th>
            <th>Judul</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
        </tr>
        <tr>
            @csrf
            <?php $no = 1; ?>
            @foreach ($laporan as $list)
                <td>{{ $list->kode_pinjam }}</td>
                <td>{{ $list->nama_lengkap }}</td>
                <td>{{ $list->kode_buku }}</td>
                <td>{{ $list->judul }}</td>
                <td>{{ $list->tanggal_pinjam }}</td>
                <td>{{ $list->tanggal_kembali }}</td>
                <td>
                    @if ($list->status == 'pinjam')
                        Pinjam
                    @endif
                    @if ($list->status == 'kembali')
                        Kembali
                    @endif
                    @if ($list->status == 'selesai')
                        Selesai
                    @endif
                </td>
        </tr>
        @endforeach

    </table>
    {{-- <h4 style="text-align: right;">Total Peminjaman Buku Periode Ini : 10 Peminjaman</h4>
    <h4 style="text-align: right;">Anggota Yang Meminjam Buku Pada Periode Ini : 8 Anggota</h4> --}}
    <center id="footer">
        <p><a href="/laporan" style="text-align: right; bottom: auto;">Kembali</a></p>
    </center>
    <script>
        window.print();
    </script>



</body>

</html>
