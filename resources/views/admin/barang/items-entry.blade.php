@extends('layouts.admin')

@section('title', 'Dashboard Data Barang')

@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4 m-4 fs-3">Form Data Barang</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('insertitems') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="id" class="form-label">ID Barang</label>
                    <input type="text" class="form-control input @error('id_barang') is-invalid @enderror" id="id"
                        name="id_barang" value="{{ old('id_barang') }}" placeholder="Masukan ID">
                    @error('id_barang')
                        <div class="invalid-feedback">Silahkan Mengisi Id Barang</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="nama" class="form-label">Merek Barang</label>
                    <input type="text" class="form-control input" id="merek_barang" name="merek_barang"
                        value="{{ old('merek_barang') }}" placeholder="Masukan Merek">
                    @error('merek_barang')
                        <div class="invalid-feedback">Silahkan Mengisi Merek Barang</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="alamat" class="form-label">Jumlah Barang</label>
                    <input type="text" class="form-control input @error('jumlah_barang') is-invalid @enderror"
                        id="jumlah_barang" name="jumlah_barang" value="{{ old('jumlah_barang') }}"
                        placeholder="Masukan Jumlah Barang">
                    @error('jumlah_barang')
                        <div class="invalid-feedback">Silahkan Mengisi Jumlah Barang</div>
                    @enderror
                </div>
                <div class="mb-4 d-flex flex-column gap-3">
                    <label for="">Kualitas Barang</label>
                    <div class="input-radio">
                        <input class="form-check-input input custom-checked" type="radio" value="Baik"
                            name="kualitas_barang" id="baik">
                        <label class="form-check-label @error('kualitas_barang') is-invalid @enderror" for="Baik">
                            Baik
                        </label>
                        @error('kualitas_barang')
                            <div class="invalid-feedback">Silahkan Memilih Kualitas Barang</div>
                        @enderror
                    </div>
                    <div class="input-radio">
                        <input class="form-check-input input custom-checked" type="radio" value="Buruk"
                            name="kualitas_barang" id="buruk">
                        <label class="form-check-label @error('kualitas_barang') is-invalid @enderror" for="Buruk">
                            Buruk
                        </label>
                        @error('kualitas_barang')
                            <div class="invalid-feedback">Silahkan Memilih Kualitas Barang</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="no" class="form-label">ID Distributor</label>
                        <select class="form-control @error('id_distributor') is-invalid @enderror" name="id_distributor">
                            <option class="" value="">- Silahkan Pilih -</option>
                            @foreach ($distributor as $items)
                                <option value="{{ $items->id_distributor }}">{{ $items->id_distributor }}</option>
                            @endforeach
                        </select>
                        @error('id_distributor')
                            <div class="invalid-feedback">Silahkan Mengisi Id Distributor</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
            </form>
        </div>
    </div>
@endsection
