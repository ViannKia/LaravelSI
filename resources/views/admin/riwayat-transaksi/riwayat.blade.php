@extends('layouts.admin')

@section('title', 'Dashboard Data Riwayat Transaksi')

@section('content')
    <div class="px-5 pt-4">
        <p class="fs-2">Data Riwayat Transaksi</p>
        <a href="{{ route('addriwayat') }}" class="btn btn-primary">Add Data</a>
        <a href="{{ route('pdfriwayat') }}" class="btn btn-primary ms-2">Cetak Data</a>
        <table class="table mt-3 text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID_Riwayat_Transaksi</th>
                    <th scope="col">ID_Transaksi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($riwayat as $row)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->id_riwayat_transaksi }}</td>
                    <td>{{ $row->id_transaksi }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button onclick="window.location='{{ route('editriwayat', $row->id_riwayat_transaksi) }}'"
                                type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button"
                                onclick="window.location='{{ route('destroyriwayat', $row->id_riwayat_transaksi) }}'"
                                class="btn btn-primary btn-sm">Delete</button>
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('asset')
@endsection
