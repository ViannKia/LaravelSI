@extends('layouts.admin')

@section('title', 'Dashboard Data Poin')

@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4 m-4 fs-3">Form Data Poin</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('updatepoin', $poin->id_poin) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="" class="form-label">ID Poin<span></span></label>
                    <input type="text" class="form-control input" id="id_poin" name="id_poin"
                        value="{{ $poin->id_poin }}" placeholder="Masukan ID Poin">
                </div>
                <div class="mb-4">
                    <label for="nama" class="form-label">ID Transaksi<span></span></label>
                    <select class="form-control @error('id_transaksi') is-invalid @enderror" id="id_transaksi" name="id_transaksi">
                        <option class="" value="">- Silahkan Pilih -</option>
                        @foreach ($transaksi as $items)
                            <option value="{{ $items->id_transaksi }}">{{ $items->id_transaksi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="nama" class="form-label">Poin Transaksi<span></span></label>
                    <input type="text" class="form-control input" id="poin_transaksi" name="poin_transaksi"
                        value="{{ $poin->poin_transaksi }}" placeholder="Masukan Poin Transaksi">
                </div>
                <div class="mb-4">
                    <label for="nama" class="form-label">Total Poin<span></span></label>
                    <input type="text" class="form-control input" id="total_poin" name="total_poin"
                        value="{{ $poin->total_poin }}" placeholder="Masukan Total Poin">
                </div>
                <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
