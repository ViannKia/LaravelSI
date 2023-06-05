@extends('layouts.admin')

@section('title', 'Page Update Data Diskon')

@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4 m-4 fs-3">Update Data Diskon</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('updatediskon', $diskon->id_diskon) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="" class="form-label">ID Diskon<span></span></label>
                    <input type="text" class="form-control input" id="id_diskon" name="id_diskon"
                        value="{{ $diskon->id_diskon }}" placeholder="Masukan ID Diskon">
                </div>
                <div class="mb-4">
                    <label for="nama" class="form-label">ID Penukaran Poin<span></span></label>
                    <select class="form-control @error('id_penukaranpoin') is-invalid @enderror" id="id_diskon" name="id_penukaranpoin">
                        <option class="" value="">- Silahkan Pilih -</option>
                        @foreach ($penukaranpoin as $items)
                            <option value="{{ $items->id_penukaranpoin }}">{{ $items->id_penukaranpoin }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="alamat" class="form-label">Total Diskon</label>
                    <input type="text" class="form-control input" id="total_diskon" name="total_diskon"
                        value="{{ $diskon->total_diskon }}" placeholder="Masukan Total Diskon">
                </div>
                <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
