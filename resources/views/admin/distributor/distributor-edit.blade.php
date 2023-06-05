@extends('layouts.admin')

@section('title', 'Page Update Data Distributor')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4 m-4 fs-3">Update Data Distributor</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{ route('editdistributor', $distributor->id_distributor) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="id" cidlass="form-label">ID Distributor<span></span></label>
                <input type="text" class="form-control input" id="id_distributor" name="id_distributor" value="{{ $distributor->id_distributor }}" placeholder="Masukan ID Distributor">
            </div>
            <div class="mb-4">
                <label for="nama" class="form-label">Nama Distributor<span></span></label>
                <input type="text" class="form-control input" id="nama_distributor" name="nama_distributor" value="{{ $distributor->nama_distributor }}" placeholder="Masukan Nama Distributor">
            </div>
            <div class="mb-4">
                <label for="alamat" class="form-label">No Hp</label>
                <input type="text" class="form-control input" id="no_hp" name="no_hp" value="{{ $distributor->no_hp }}" placeholder="Masukan Nomer Hp">
            </div>
            <div class="mb-4">
                <label for="no" class="form-label">Jumlah Barang</label>
                <input type="text" class="form-control input" id="jumlah_barang" name="jumlah_barang" value="{{ $distributor->jumlah_barang }}" placeholder="Masukan Jumlah Barang">
            </div>
            <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection
