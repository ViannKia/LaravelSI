@extends('layouts.admin')

@section('title', 'Dashboard Data Barang')

@section('content')
<div class="px-5 pt-4">
    <p class="fs-2">Data Barang</p>
    <a href="{{ route('additems') }}" class="btn btn-primary">Add Data</a>
    <a href="{{ route('pdfbarang') }}" class="btn btn-primary ms-2">Cetak Data</a>
    <table class="table mt-3 text-center">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">ID_Barang</th>
                <th scope="col">Merk_Barang</th>
                <th scope="col">Jumlah_Barang</th>
                <th scope="col">Kualitas_Barang</th>
                <th scope="col">ID_Distributor</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $row)
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->id_barang }}</td>
            <td>{{ $row->merek_barang }}</td>
            <td>{{ $row->jumlah_barang }}</td>
            <td>{{ $row->kualitas_barang }}</td>
            <td>{{ $row->id_distributor }}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button onclick="window.location='{{ route('edititems', $row->id_barang) }}'"
                    type="button" class="btn btn-primary btn-sm">Edit</button>
                    <button type="button" onclick="window.location='{{ route('destroyitems', $row->id_barang) }}'" class="btn btn-primary btn-sm">Delete</button>
                </div>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
