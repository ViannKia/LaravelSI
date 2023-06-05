@extends('layouts.admin')

@section('title', 'Page Update Data Barang')

@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4 m-4 fs-3">Update Data Barang</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('updateitems', $items->id_barang) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="form-label">ID Barang</label>
                    <input type="text" class="form-control input" id="id" name="id_barang" value="{{ $items->id_barang }}"
                        placeholder="Masukan ID Barang">
                </div>
                <div class="mb-4">
                    <label class="form-label">Merek Barang</label>
                    <input type="text" class="form-control input" id="merek_barang" name="merek_barang"
                        value="{{ $items->merek_barang }}" placeholder="Masukan Merek Barang">
                </div>
                <div class="mb-4">
                    <label class="form-label">Jumlah Barang</label>
                    <input type="text" class="form-control input" id="jumlah_barang" name="jumlah_barang"
                        value="{{ $items->jumlah_barang }}" placeholder="Masukan Jumlah Barang">
                </div>
                <div class="mb-4 d-flex flex-column gap-3">
                    <label for="">Kualitas Barang</label>
                    <div class="input-radio">
                        <input class="form-check-input input custom-checked" type="radio" value="Baik"
                            name="kualitas_barang" id="baik">
                        <label class="form-check-label" for="Baik">
                            Baik
                        </label>
                    </div>
                    <div class="input-radio">
                        <input class="form-check-input input custom-checked" type="radio" value="Buruk"
                            name="kualitas_barang" id="buruk">
                        <label class="form-check-label" for="Buruk">
                            Buruk
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">ID Distributor</label>
                        <select class="form-control @error('id_distributor') is-invalid @enderror" name="id_distributor">
                            <option class="" value="">- Silahkan Pilih -</option>
                            @foreach ($distributor as $items)
                                <option value="{{ $items->id_distributor }}">{{ $items->id_distributor }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
            </form>
        </div>
    </div>
@endsection
