@extends('layouts.admin')

@section('title', 'Dashboard Data Saran')

@section('content')
    <div class="px-5 pt-4">
        <p class="fs-2">Data Saran</p>
        <a href="{{ route('addsaran') }}" class="btn btn-primary">Add Data</a>
        <table class="table mt-3 text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID_Saran</th>
                    <th scope="col">Saran</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($saran as $row)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->id_saran }}</td>
                    <td>{{ $row->saran }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button onclick="window.location='{{ route('editsaran', $row->id_saran) }}'" type="button"
                                class="btn btn-primary btn-sm">Edit</button>
                            <button type="button" onclick="window.location='{{ route('destroysaran', $row->id_saran) }}'"
                                class="btn btn-primary btn-sm">Delete</button>
                            <button onclick="window.location='{{ route('pdfsaran', $row->id_saran) }}'"
                                type="button" class="btn btn-primary btn-sm">Cetak</button>
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
