<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data Transaksi</title>

    <style>
        body {
            box-sizing: border-box;
            font-size: 16px;
        }

        h1 {
            text-align: center;
        }

        table {
            box-sizing: border-box;
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }

        thead {
            background-color: #0d47a1;
            color: white;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            text-align: left;
            padding: 10px;
        }

        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Data Transaksi</h1>
    <table class="center">
        <thead>
            <tr>
                <th class="center">ID Transaksi</th>
                <th class="center">ID Pembelian</th>
                <th class="center">ID Admin</th>
                <th class="center">Tanggal Transaksi</th>
                <th class="center">Jenis Transaksi</th>
                <th class="center">Total Transaksi</th>
                <th class="center">Poin Transaksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td class="center">{{ $row->id_transaksi }}</td>
                    <td class="center">{{ $row->id_pembelian }}</td>
                    <td class="center">{{ $row->id_admin }}</td>
                    <td class="center">{{ $row->tanggal_transaksi }}</td>
                    <td class="center">{{ $row->jenis_transaksi }}</td>
                    <td class="center">{{ $row->total_transaksi }}</td>
                    <td class="center">{{ $row->poin_transaksi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
