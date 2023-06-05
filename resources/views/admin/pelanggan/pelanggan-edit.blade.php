@extends('layouts.admin')

@section('title', 'Page Update Data Pelanggan')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4 m-4 fs-3">Update Data Pelanggan</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('updatepelanggan', $pelanggan->id_pelanggan) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="form-label">ID Pelanggan<span></span></label>
                <input type="text" class="form-control input" id="id" name="id_pelanggan" value="{{ $pelanggan->id_pelanggan }}" placeholder="Masukan ID Pelanggan">
            </div>
            <div class="mb-4">
                <label class="form-label">Nama Pelanggan<span></span></label>
                <input type="text" class="form-control input" id="nama_pelanggan" name="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}" placeholder="Masukan Nama Pelanggan">
            </div>
            <div class="mb-4">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control input" id="alamat" name="alamat" value="{{ $pelanggan->alamat }}" placeholder="Masukan Alamat">
            </div>
            <div class="mb-4">
                <label class="form-label">Nomer Hp</label>
                <input type="text" class="form-control input" id="no_hp" name="no_hp" value="{{ $pelanggan->no_hp }}" placeholder="Masukan Nomer Hp ">
            </div>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
</div>
@endsection
