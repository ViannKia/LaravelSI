@extends('layouts.admin')

@section('title', 'Dashboard Data Pembelian')

@section('content')
    <div class="px-5 pt-4">
        <p class="fs-2">Data Pembelian</p>
        <a href="{{ route('addpembelian') }}" class="btn btn-primary">Add Data</a>
        <a href="{{ route('pdfpembelian') }}" class="btn btn-primary ms-2">Cetak Data</a>
        <table class="table mt-3 text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID_Pembelian</th>
                    <th scope="col">ID_Pembeli</th>
                    <th scope="col">ID_Barang</th>
                    <th scope="col">ID_Admin</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembelian as $row)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->id_pembelian }}</td>
                    <td>{{ $row->id_pembeli }}</td>
                    <td>{{ $row->id_barang }}</td>
                    <td>{{ $row->id_admin }}</td>
                    <td>{{ $row->jumlah_barang }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button onclick="window.location='{{ route('editpembelian', $row->id_pembelian) }}'"
                                type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button"
                                onclick="window.location='{{ route('destroypembelian', $row->id_pembelian) }}'"
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
