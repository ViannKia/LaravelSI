@extends('layouts.admin')

@section('title', 'Dashboard Data Penukaran Poin')

@section('content')
    <div class="px-5 pt-4">
        <p class="fs-2">Data Penukaran Poin</p>
        <a href="{{ route('addpenukaran-poin') }}" class="btn btn-primary">Add Data</a>
        <a href="{{ route('pdfpenukaranpoin') }}" class="btn btn-primary ms-2">Cetak Data</a>
        <table class="table mt-3 text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID_Penukaran_Poin</th>
                    <th scope="col">ID_Poin</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penukaranpoin as $row)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->id_penukaranpoin }}</td>
                    <td>{{ $row->id_poin }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button onclick="window.location='{{ route('editpenukaran-poin', $row->id_penukaranpoin) }}'"
                                type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button"
                                onclick="window.location='{{ route('destroypenukaran-poin', $row->id_penukaranpoin) }}'"
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
