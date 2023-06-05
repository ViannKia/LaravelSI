@extends('layouts.admin')

@section('title', 'Page Update Data Pembelian')

@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4 m-4 fs-3">Update Data Pembelian</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('updatepembelian', $pembelian->id_pembelian) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="form-label">ID Pembelian</label>
                    <input type="text" class="form-control input" id="pembelian" name="id_pembelian"
                        value="{{ $pembelian->id_pembelian }}" placeholder="Masukan ID Pembelian">
                </div>
                <div class="mb-4">
                    <label class="form-label">ID Pembeli</label>
                    <select class="form-control @error('id_pembeli') is-invalid @enderror" id="id_pembeli" name="id_pembeli">
                        <option class="" value="">- Silahkan Pilih -</option>
                        @foreach ($pelanggan as $items)
                            <option value="{{ $items->id_pelanggan }}">{{ $items->id_pelanggan }}</option>
                        @endforeach
                        @foreach ($konsumen as $items)
                            <option value="{{ $items->id_konsumen }}">{{ $items->id_konsumen }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label">ID Admin</label>
                    <input type="text" class="form-control input" id="admin" name="id_admin"
                        value="{{ $pembelian->id_admin }}" placeholder="Masukan ID Admin">
                </div>
                <div class="mb-4">
                    <label class="form-label">ID Barang</label>
                    <select class="form-control @error('id_barang') is-invalid @enderror" id="id_barang" name="id_barang">
                        <option class="" value="">- Silahkan Pilih -</option>
                        @foreach ($barang as $items)
                            <option value="{{ $items->id_barang }}">{{ $items->id_barang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label">Jumlah Barang</label>
                    <input type="text" class="form-control input" id="jumlah_barang" name="jumlah_barang"
                        value="{{ $pembelian->jumlah_barang }}" placeholder="Masukan Jumlah Barang">
                </div>
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection
