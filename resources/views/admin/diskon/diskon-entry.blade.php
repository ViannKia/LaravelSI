@extends('layouts.admin')

@section('title', 'Dashboard Data Diskon')

@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4 m-4 fs-3">Form Data Diskon</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('insertdiskon') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="" class="form-label">ID Diskon</label>
                    <input type="text" class="form-control input @error('id_diskon') is-invalid @enderror" id="id_diskon"
                        name="id_diskon" value="{{ old('id_diskon') }}" placeholder="Masukan ID Diskon">
                    @error('id_diskon')
                        <div class="invalid-feedback">Silahkan Mengisi Id Poin</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="nama" class="form-label">ID Penukaran Poin</label>
                    <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" name="id_penukaranpoin">
                        <option class="" value="">- Silahkan Pilih -</option>
                        @foreach ($penukaranpoin as $items)
                            <option value="{{ $items->id_penukaranpoin }}">{{ $items->id_penukaranpoin }}</option>
                        @endforeach
                    </select>
                    @error('id_penukaranpoin')
                        <div class="invalid-feedback">Silahkan Mengisi Id Penukaran Poin</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="alamat" class="form-label">Total Diskon</label>
                    <input type="text" class="form-control input @error('total_diskon') is-invalid @enderror"
                        id="total_diskon" name="total_diskon" value="{{ old('total_diskon') }}"
                        placeholder="Masukan Total Diskon">
                    @error('total_diskon')
                        <div class="invalid-feedback">Silahkan Mengisi Id Poin</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
