@extends('layouts.admin')

@section('title', 'Dashboard Data Diskon')

@section('content')
    <div class="px-5 pt-4">
        <p class="fs-2">Data Diskon</p>
        <a href="{{ route('adddiskon') }}" class="btn btn-primary">Add Data</a>
        <a href="{{ route('pdfdiskon') }}" class="btn btn-primary ms-2">Cetak Data</a>
        <table class="table mt-3 text-center">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">ID_Diskon</th>
                    <th scope="col">ID_Penukaran_Poin</th>
                    <th scope="col">Total_Diskon</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($diskon as $row)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->id_diskon }}</td>
                    <td>{{ $row->id_penukaranpoin }}</td>
                    <td>{{ $row->total_diskon }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button onclick="window.location='{{ route('editdiskon', $row->id_diskon) }}'" type="button"
                                class="btn btn-primary btn-sm">Edit</button>
                            <button type="button" onclick="window.location='{{ route('destroydiskon', $row->id_diskon) }}'"
                                class="btn btn-primary btn-sm">Delete</button>
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
