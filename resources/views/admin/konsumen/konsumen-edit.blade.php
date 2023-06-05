@extends('layouts.admin')

@section('title', 'Page Update Data Konsumen')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4 m-4 fs-3">Update Data Konsumen</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{ route('updatekonsumen', $konsumen->id_konsumen) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="form-label">ID Konsumen</label>
                <input type="text" class="form-control input" id="id_konsumen" name="id_konsumen" value="{{ $konsumen->id_konsumen }}" placeholder="Masukan ID Konsumen">
            </div>
            <div class="mb-4">
                <label class="form-label">Nama Konsumen</label>
                <input type="text" class="form-control input" id="nama_konsumen" name="nama_konsumen" value="{{ $konsumen->nama_konsumen }}" placeholder="Masukan Nama Konsumen">
            </div>
            <div class="mb-4">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control input" id="alamat" name="alamat" value="{{ $konsumen->alamat }}" placeholder="Masukan Alamat">
            </div>
            <div class="mb-4">
                <label class="form-label">Nomer Hp</label>
                <input type="text" class="form-control input" id="no" name="no_hp" value="{{ $konsumen->no_hp }}" placeholder="Masukan Nomer Hp ">
            </div>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
</div>
@endsection
