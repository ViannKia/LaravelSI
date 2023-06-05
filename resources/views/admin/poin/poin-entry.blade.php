@extends('layouts.admin')

@section('title', 'Dashboard Data Poin')

@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4 m-4 fs-3">Form Data Poin</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('insertpoin') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="" class="form-label">ID Poin</label>
                    <input type="text" class="form-control input @error('id_poin') is-invalid @enderror" id="id_poin"
                        name="id_poin" value="{{ old('id_poin') }}" placeholder="Masukan ID Poin">
                    @error('id_poin')
                        <div class="invalid-feedback">Silahkan Mengisi Id Poin</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="nama" class="form-label">ID Transaksi</label>
                    <select class="form-control @error('id_transaksi') is-invalid @enderror" name="id_transaksi">
                        <option class="" value="">- Silahkan Pilih -</option>
                        @foreach ($transaksi as $items)
                            <option value="{{ $items->id_transaksi }}">{{ $items->id_transaksi }}</option>
                        @endforeach
                    </select>
                    @error('id_transaksi')
                        <div class="invalid-feedback">Silahkan Mengisi Id Transaksi</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="nama" class="form-label">Poin Transaksi</label>
                    <input type="text" class="form-control input @error('poin_transaksi') is-invalid @enderror"
                        id="poin_transaksi" name="poin_transaksi" value="{{ old('poin_transaksi') }}"
                        placeholder="Masukan Poin Transaksi">
                    @error('poin_transaksi')
                        <div class="invalid-feedback">Silahkan Mengisi Jumlah Poin Transaksi</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="nama" class="form-label">Total Poin</label>
                    <input type="text" class="form-control input @error('total_poin') is-invalid @enderror"
                        id="total_poin" name="total_poin" value="{{ old('total_poin') }}" placeholder="Masukan Total Poin">
                    @error('total_poin')
                        <div class="invalid-feedback">Silahkan Mengisi Total Poin</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
