@extends('layouts.admin')

@section('title', 'Page Update Data Riwayat Transaksi')

@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4 m-4 fs-3">Update Data Riwayat Transaksi</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('updateriwayat', $riwayat->id_riwayat_transaksi) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="" class="form-label">ID Riwayat Transaksi<span></span></label>
                    <input type="text" class="form-control input" id="id_riwayat_transaksi" name="id_riwayat_transaksi"
                        value="{{ $riwayat->id_riwayat_transaksi }}" placeholder="Masukan ID Riwayat Transaksi">
                </div>
                <div class="mb-4">
                    <label for="nama" class="form-label">ID Transaksi<span></span></label>
                    <select class="form-control @error('id_transaksi') is-invalid @enderror" name="id_transaksi">
                        <option class="" value="">- Silahkan Pilih -</option>
                        @foreach ($transaksi as $items)
                            <option value="{{ $items->id_transaksi }}">{{ $items->id_transaksi }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
