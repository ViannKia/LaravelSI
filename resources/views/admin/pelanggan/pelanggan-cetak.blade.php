<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data Pelanggan</title>

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
    <h1>Data Pelanggan</h1>
    <table class="center">
        <thead>
            <tr>
                <th class="center">ID Pelanggan</th>
                <th class="center">Nama Pelanggan</th>
                <th class="center">Alamat</th>
                <th class="center">No Hp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td class="center">{{ $row->id_pelanggan }}</td>
                    <td class="center">{{ $row->nama_pelanggan }}</td>
                    <td class="center">{{ $row->alamat }}</td>
                    <td class="center">{{ $row->no_hp }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
