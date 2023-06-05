@extends('layouts.admin')

@section('title', 'Dashboard Data Pembelian')

@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4 m-4 fs-3">Form Data Distributor</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('insertdistributor') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="id" cidlass="form-label">ID Distributor</label>
                    <input type="text" class="form-control input @error('id_distributor') is-invalid @enderror"
                        id="id_distributor" name="id_distributor" value="{{ old('id_distributor') }}"
                        placeholder="Masukan ID Distributor">
                    @error('id_distributor')
                        <div class="invalid-feedback">Silahkan Mengisi Id Poin</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="nama" class="form-label">Nama Distributor</label>
                    <input type="text" class="form-control input @error('nama_distributor') is-invalid @enderror"
                        id="nama_distributor" name="nama_distributor" value="{{ old('nama_distributor') }}"
                        placeholder="Masukan Nama Distributor">
                    @error('nama_distributor')
                        <div class="invalid-feedback">Silahkan Mengisi Nama Distributor</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="alamat" class="form-label">No Hp</label>
                    <input type="text" class="form-control input @error('no_hp') is-invalid @enderror" id="no_hp"
                        name="no_hp" value="{{ old('no_hp') }}" placeholder="Masukan Nomer Hp">
                    @error('no_hp')
                        <div class="invalid-feedback">Silahkan Mengisi Nomer Hp</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="no" class="form-label">Jumlah Barang</label>
                    <input type="text" class="form-control input @error('jumlah_barang') is-invalid @enderror" id="jumlah_barang"
                        name="jumlah_barang" value="{{ old('jumlah_barang') }}" placeholder="Masukan Jumlah Barang">
                    @error('jumlah_barang')
                        <div class="invalid-feedback">Silahkan Masukan Jumlah Barang</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
