@extends('layouts.admin')

@section('title', 'Dashboard Data Transaksi')

@section('content')

    <body>
        <div class="content-form">
            <h4 class="fw-semibold mb-4 m-4 fs-3">Form Data Transaksi</h4>
            {{-- Form --}}
            <div class="form-add p-4 bg-white rounded-4">
                <form action="{{ route('inserttransaksi', $transaksi->id_transaksi) }}" method="POST">
                    @csrf
                    <div class="mb-4 ">
                        <label for="" class="form-label">ID Transaksi</label>
                        <input type="text" class="form-control input @error('id_transaksi') is-invalid @enderror"
                            id="id_transaksi" name="id_transaksi" value="{{ old('id_transaksi') }}"
                            placeholder="Masukan ID Transaksi">
                        @error('id_transaksi')
                            <div class="invalid-feedback">Silahkan Mengisi Id Transaksi</div>
                        @enderror
                    </div>
                    <div class=" form-group mt-4">
                        <label for="id_pembelian" class="form-label">ID Pembelian</label>
                        <select class="form-control @error('id_pembelian') is-invalid @enderror" name="id_pembelian">
                            <option class="" value="">- Silahkan Pilih -</option>
                            @foreach ($pembelian as $items)
                                <option value="{{ $items->id_pembelian}}">{{ $items->id_pembelian }}</option>
                            @endforeach
                        </select>
                        @error('id_pembelian')
                            <div class="invalid-feedback">Silahkan Pilih Id Pembelian</div>
                        @enderror
                    </div>
                    <div class="mb-4 mt-4">
                        <label for="nama" class="form-label">ID Admin</label>
                        <input type="text" class="form-control input @error('id_admin') is-invalid @enderror"
                            id="id_admin" name="id_admin" value="{{ old('id_admin') }}" placeholder="Masukan ID Admin">
                        @error('id_admin')
                            <div class="invalid-feedback">Silahkan Mengisi Id Admin</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="form-label">Tanggal Transaksi</label>
                        <input type="date" class="form-control input" id="tanggal_transaksi" name="tanggal_transaksi"
                            value="{{ old('tanggal_transaksi') }}" placeholder="Masukan Tanggal Transaksi">
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
                                <label for="nama" class="form-label">Total Transaksi</label>
                                <input type="text" class="form-control input" id="total_transaksi" name="total_transaksi"
                                    value="{{ old('total_transaksi') }}" placeholder="Masukan Total Transaksi">
                            </div>
                            <div class="mb-4">
                                <label for="nama" class="form-label">Poin Transaksi</label>
                                <input type="text" class="form-control input" id="poin_transaksi" name="poin_transaksi"
                                    value="{{ old('poin_transaksi') }}" placeholder="Masukan Poin Transaksi">
                            </div>
                            <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
                </form>
            </div>
        </div>
    </body>
@endsection
