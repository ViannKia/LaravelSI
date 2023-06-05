@extends('layouts.admin')

@section('title', 'Page Update Data Penukaran Poin')

@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4 m-4 fs-3">Update Data Penukaran Poin</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('updatepenukaran-poin', $penukaranpoin->id_penukaranpoin) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="" class="form-label">ID Penukaran Poin<span></span></label>
                    <input type="text" class="form-control input" id="id_penukaranpoin" name="id_penukaranpoin"
                        value="{{ $penukaranpoin->id_penukaranpoin }}" placeholder="Masukan ID Penukaran Poin">
                </div>
                <div class="mb-4">
                    <label for="nama" class="form-label">ID Poin<span></span></label>
                    <select class="form-control @error('id_poin') is-invalid @enderror" id="id_poin" name="id_poin">
                        <option class="" value="">- Silahkan Pilih -</option>
                        @foreach ($poin as $items)
                            <option value="{{ $items->id_poin }}">{{ $items->id_poin }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100 mt-3">Submit</button>
            </form>
        </div>
    </div>
@endsection
