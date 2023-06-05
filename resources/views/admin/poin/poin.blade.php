@extends('layouts.admin')

@section('title', 'Dashboard Data Poin')

@section('content')
    <div class="px-5 pt-4">
        <p class="fs-2">Data Poin</p>
        <a href="{{ route('addpoin') }}" class="btn btn-primary">Add Data</a>
        <a href="{{ route('pdfpoin') }}" class="btn btn-primary ms-2">Cetak Data</a>
        <table class="table mt-3 text-center">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">ID_Poin</th>
                    <th scope="col">ID_Transaksi</th>
                    <th scope="col">Poin-Transaksi</th>
                    <th scope="col">Total-Poin</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($poin as $row)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->id_poin }}</td>
                    <td>{{ $row->id_transaksi }}</td>
                    <td>{{ $row->poin_transaksi }}</td>
                    <td>{{ $row->total_poin }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button onclick="window.location='{{ route('editpoin', $row->id_poin) }}'" type="button"
                                class="btn btn-primary btn-sm">Edit</button>
                            <button type="button" onclick="window.location='{{ route('destroypoin', $row->id_poin) }}'"
                                class="btn btn-primary btn-sm">Delete</button>
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
