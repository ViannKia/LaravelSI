@extends('layouts.admin')

@section('title', 'Dashboard Data Pelanggan')

@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4 m-4 fs-3">Form Data Pelanggan</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('insertpelanggan') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="form-label">ID Pelanggan</label>
                    <input type="text" class="form-control input @error('id_pelanggan') is-invalid @enderror"
                        id="id_pelanggan" name="id_pelanggan" value="{{ old('id_pelanggan') }}"
                        placeholder="Masukan ID Pelanggan">
                    @error('id_pelanggan')
                        <div class="invalid-feedback">Silahkan Mengisi Id Pelanggan</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control input @error('nama_pelanggan') is-invalid @enderror"
                        id="nama_pelanggan" name="nama_pelanggan" value="{{ old('nama_pelanggan') }}"
                        placeholder="Masukan Nama Pelanggan">
                    @error('nama_pelanggan')
                        <div class="invalid-feedback">Silahkan Mengisi Nama Pelanggan</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control input @error('alamat') is-invalid @enderror" id="alamat"
                        name="alamat" value="{{ old('alamat') }}" placeholder="Masukan Alamat">
                    @error('alamat')
                        <div class="invalid-feedback">Silahkan Mengisi Alamat</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label">Nomer Hp</label>
                    <input type="text" class="form-control input @error('no_hp') is-invalid @enderror" id="no_hp"
                        name="no_hp" value="{{ old('no_hp') }}" placeholder="Masukan Nomer Hp">
                    @error('no_hp')
                        <div class="invalid-feedback">Silahkan Mengisi Nomer Hp</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection
