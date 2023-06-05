@extends('layouts.admin')

@section('title', 'Dashboard Data Distributor')

@section('content')
    <div class="px-5 pt-4">
        <p class="fs-2">Data Distributor</p>
        <a href="{{ route('adddistributor') }}" class="btn btn-primary">Add Data</a>
        <a href="{{ route('pdfdistributor') }}" class="btn btn-primary ms-2">Cetak Data</a>
        <table class="table mt-3 text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID_Distributor</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No_HP</th>
                    <th scope="col">Jumlah_Barang</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($distributor as $row)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->id_distributor }}</td>
                    <td>{{ $row->nama_distributor }}</td>
                    <td>{{ $row->no_hp }}</td>
                    <td>{{ $row->jumlah_barang }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button onclick="window.location='{{ route('editdistributor', $row->id_distributor) }}'"
                                type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button"
                                onclick="window.location='{{ route('destroydistributor', $row->id_distributor) }}'"
                                class="btn btn-primary btn-sm">Delete</button>
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
