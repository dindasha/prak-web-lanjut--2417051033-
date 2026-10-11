@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white py-3">
                    <h4 class="mb-0">Edit Mata Kuliah</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama_mk" class="form-label fw-bold">Nama Mata Kuliah</label>
                            <input type="text" class="form-control @error('nama_mk') is-invalid @enderror" id="nama_mk" name="nama_mk" value="{{ old('nama_mk', $mk->nama_mk) }}" required>
                            @error('nama_mk')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="sks" class="form-label fw-bold">SKS</label>
                            <input type="number" class="form-control @error('sks') is-invalid @enderror" id="sks" name="sks" value="{{ old('sks', $mk->sks) }}" min="1" max="6" required>
                            @error('sks')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary px-4">Kembali</a>
                            <button type="submit" class="btn btn-success px-4">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection