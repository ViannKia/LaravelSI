@extends('layouts.admin')

@section('title', 'Dashboard Data Saran')

@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4 m-4 fs-3">Form Data Saran</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('insertsaran') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="" class="form-label">ID Saran<span></span></label>
                    <input type="text" class="form-control input" id="id_saran" name="id_saran" placeholder="Masukan ID Saran">
                </div>
                <div class="mb-4">
                    <label for="nama" class="form-label">Saran<span></span></label>
                    <textarea class="form-control input" id="saran" name="saran" rows="5" placeholder="Masukkan Saran"></textarea>
                </div>
                <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
