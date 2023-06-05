@extends('layouts.admin')

@section('title', 'Dashboard Data Transaksi')

@section('content')
    <div class="px-5 pt-4">
        <p class="fs-2">Data Transaksi</p>
        <a href="{{ route('addtransaksi') }}" class="btn btn-primary me-2">Add Data</a>
        <a href="{{ route('pdftransaksi') }}" class="btn btn-primary">Cetak Data</a>
        <table class="table mt-3 text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID_Transaksi</th>
                    <th scope="col">ID_Pembelian</th>
                    <th scope="col">ID_Admin</th>
                    <th scope="col">Tanggal_Transaksi</th>
                    <th scope="col">Jenis_Transaksi</th>
                    <th scope="col">Total_Transaksi</th>
                    <th scope="col">Poin_Transaksi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $row)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->id_transaksi }}</td>
                    <td>{{ $row->id_pembelian }}</td>
                    <td>{{ $row->id_admin }}</td>
                    <td>{{ $row->tanggal_transaksi }}</td>
                    <td>{{ $row->jenis_transaksi }}</td>
                    <td>{{ $row->total_transaksi }}</td>
                    <td>{{ $row->poin_transaksi }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button onclick="window.location='{{ route('edittransaksi', $row->id_transaksi) }}'"
                                type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button"
                                onclick="window.location='{{ route('destroytransaksi', $row->id_transaksi) }}'"
                                class="btn btn-primary btn-sm">Delete</button>
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
