@extends('layouts.admin')

@section('title', 'Dashboard Data Pelanggan')

@section('content')
    <div class="px-5 pt-4">
        <p class="fs-2">Data Pelanggan</p>
        <a href="{{ route('addpelanggan') }}" class="btn btn-primary">Add Data</a>
        <a href="{{ route('pdfpelanggan') }}" class="btn btn-primary ms-2">Cetak Data</a>
        <table class="table mt-3 text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID_Pelanggan</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No-HP</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelanggan as $row)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->id_pelanggan }}</td>
                    <td>{{ $row->nama_pelanggan }}</td>
                    <td>{{ $row->alamat }}</td>
                    <td>{{ $row->no_hp }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button onclick="window.location='{{ route('editpelanggan', $row->id_pelanggan) }}'"
                                type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button"
                                onclick="window.location='{{ route('destroypelanggan', $row->id_pelanggan) }}'"
                                class="btn btn-primary btn-sm">Delete</button>
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
