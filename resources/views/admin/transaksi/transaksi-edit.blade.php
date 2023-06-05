@extends('layouts.admin')

@section('title', 'Page Update Data Transaksi')

@section('content')

    <body>
        <div class="content-form">
            <h4 class="fw-semibold mb-4 m-4 fs-3">Update Data Transaksi</h4>
            {{-- Form --}}
            <div class="form-add p-4 bg-white rounded-4">
                <form action="{{ route('updatetransaksi', $transaksi->id_transaksi) }}" method="POST">
                    @csrf
                    <div class="mb-4 ">
                        <label for="" class="form-label">ID Transaksi<span></span></label>
                        <input type="text" class="form-control input" id="id_transaksi" name="id_transaksi"
                            value="{{ $transaksi->id_transaksi }}" placeholder="Masukan ID Transaksi">
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="form-label">ID Pembelian<span></span></label>
                        <select class="form-control @error('id_pembelian') is-invalid @enderror" name="id_pembelian">
                            <option class="" value="">- Silahkan Pilih -</option>
                            @foreach ($pembelian as $items)
                                <option value="{{ $items->id_pembelian }}">{{ $items->id_pembelian }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="form-label">ID Admin<span></span></label>
                        <input type="text" class="form-control input" id="id_admin" name="id_admin"
                            value="{{ $transaksi->id_admin }}" placeholder="Masukan ID Admin">
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="form-label">Tanggal Transaksi<span></span></label>
                        <input type="date" class="form-control input" id="tanggal_transaksi" name="tanggal_transaksi"
                            value="{{ $transaksi->tanggal_transaksi }}" placeholder="Masukan Tanggal Transaksi">
                    </div>
                    <div class="mb-4 d-flex flex-column gap-3">
                        <label for="">Jenis Transaksi</label>
                        <div class="input-radio">
                            <input class="form-check-input input custom-checked" type="radio" value="Cash"
                                name="jenis_transaksi" id="cash">
                            <label class="form-check-label" for="cash">
                                Cash
                            </label>
                        </div>
                        <div class="input-radio">
                            <input class="form-check-input input custom-checked" type="radio" value="Credit"
                                name="jenis_transaksi" id="debit">
                            <label class="form-check-label" for="debit">
                                Debit
                            </label>
                            <div class="mb-4 mt-3">
                                <label for="nama" class="form-label">Total Transaksi<span></span></label>
                                <input type="text" class="form-control input" id="total_transaksi"
                                    value="{{ $transaksi->total_transaksi }}" name="total_transaksi"
                                    placeholder="Masukan Total Transaksi">
                            </div>
                            <div class="mb-4">
                                <label for="nama" class="form-label">Poin Transaksi<span></span></label>
                                <input type="text" class="form-control input" id="poin_transaksi"
                                    value="{{ $transaksi->poin_transaksi }}" name="poin_transaksi"
                                    placeholder="Masukan Poin Transaksi">
                            </div>
                            <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
                </form>
            </div>
        </div>
    </body>
@endsection
