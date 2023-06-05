@extends('layouts.admin')

@section('title', 'Dashboard Data Konsumen')

@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4 m-4 fs-3">Form Data Konsumen</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('insertkonsumen') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="form-label">ID Konsumen</label>
                    <input type="text" class="form-control input @error('id_konsumen') is-invalid @enderror"
                        id="id_konsumen" name="id_konsumen" value="{{ old('id_konsumen') }}"
                        placeholder="Masukan ID Konsumen">
                    @error('id_konsumen')
                        <div class="invalid-feedback">Silahkan Mengisi Id Konsumen</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label">Nama Konsumen</label>
                    <input type="text" class="form-control input @error('nama_konsumen') is-invalid @enderror"
                        id="nama_konsumen" name="nama_konsumen" value="{{ old('nama_konsumen') }}"
                        placeholder="Masukan Nama Konsumen">
                    @error('nama_konsumen')
                        <div class="invalid-feedback">Silahkan Mengisi Nama Konsumen</div>
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
                    <input type="text" class="form-control input @error('alamat') is-invalid @enderror" id="no"
                        name="no_hp" value="{{ old('no_hp') }}" placeholder="Masukan Nomer Hp ">
                    @error('no_hp')
                        <div class="invalid-feedback">Silahkan Mengisi Nomer Hp</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
