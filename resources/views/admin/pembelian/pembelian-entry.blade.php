@extends('layouts.admin')

@section('title', 'Dashboard Data Pembelian')

@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4 m-4 fs-3">Form Input Data Pembelian</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('insertpembelian', $pembelian->id_pembelian) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="" class="form-label">ID Pembelian</label>
                    <input type="text" class="form-control input @error('id_pembelian') is-invalid @enderror"
                        id="id_pembelian" name="id_pembelian" value="{{ old('id_pembelian') }}"
                        placeholder="Masukan ID Pembelian">
                    @error('id_pembelian')
                        <div class="invalid-feedback">Silahkan Mengisi Id Pembelian</div>
                    @enderror
                </div>
                <div class=" form-group mt-4 mb-4">
                    <label for="id_transaksi" class="form-label">ID Pembeli</label>
                    <select class="form-control @error('id_pembeli') is-invalid @enderror" name="id_pembeli">
                        <option class="" value="">- Silahkan Pilih -</option>
                        @foreach ($pelanggan as $items)
                            <option value="{{ $items->id_pelanggan }}">{{ $items->id_pelanggan}}</option>
                        @endforeach
                        @foreach ($konsumen as $items)
                            <option value="{{ $items->id_konsumen }}">{{ $items->id_konsumen}}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" form-group mt-4 mb-4">
                    <label for="id_transaksi" class="form-label">ID Barang</label>
                    <select class="form-control @error('id_barang') is-invalid @enderror" name="id_barang">
                        <option class="" value="">- Silahkan Pilih -</option>
                        @foreach ($barang as $items)
                            <option value="{{ $items->id_barang }}">{{ $items->id_barang}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="no" class="form-label">ID Admin</label>
                    <input type="text" class="form-control input @error('id_admin') is-invalid @enderror" id="id_admin"
                        name="id_admin" value="{{ old('id_admin') }}" placeholder="Masukan ID Admin">
                    @error('id_admin')
                        <div class="invalid-feedback">Silahkan Mengisi Id Admin</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="no" class="form-label">Jumlah Barang</label>
                    <input type="text" class="form-control input @error('jumlah_barang') is-invalid @enderror"
                        id="jumlah_barang" name="jumlah_barang" value="{{ old('jumlah_barang') }}"
                        placeholder="Masukan Jumlah Barang">
                    @error('jumlah_barang')
                        <div class="invalid-feedback">Silahkan Mengisi Jumlah Barang</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
