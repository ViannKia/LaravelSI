@extends('layouts.admin')

@section('title', 'Dashboard Data Pembelian')

@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4 m-4 fs-3">Form Data Riwayat Transaksi</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('insertriwayat', $riwayat->id_riwayat_transaksi) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="" class="form-label">ID Riwayat Transaksi</label>
                    <input type="text" class="form-control input @error('id_riwayat_transaksi') is-invalid @enderror"
                        id="id_riwayat_transaksi" name="id_riwayat_transaksi" value="{{ old('id_riwayat_transaksi') }}"
                        placeholder="Masukan ID Riwayat Transaksi">
                    @error('id_riwayat_transaksi')
                        <div class="invalid-feedback">Silahkan Mengisi Id Riwayat Transaksi</div>
                    @enderror
                </div>
                <div class=" form-group mt-4 mb-5">
                    <label for="id_transaksi" class="form-label">ID Transaksi</label>
                    <select class="form-control @error('id_transaksi') is-invalid @enderror" name="id_transaksi">
                        <option class="" value="">- Silahkan Pilih -</option>
                        @foreach ($transaksi as $items)
                            <option value="{{ $items->id_transaksi }}">{{ $items->id_transaksi }}</option>
                        @endforeach
                    </select>
                    @error('id_transaksi')
                        <div class="invalid-feedback">Silahkan Pilih Id Transaksi</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
