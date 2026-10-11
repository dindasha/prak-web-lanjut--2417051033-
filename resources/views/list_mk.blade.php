@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row mb-4">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
            <h2>Daftar Mata Kuliah</h2>
            <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Mata Kuliah Baru
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="py-3 px-4">ID (UUID)</th>
                            <th class="py-3">Nama Mata Kuliah</th>
                            <th class="py-3">SKS</th>
                            <th class="py-3 text-center" style="width: 160px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mks as $mk)
                        <tr>
                            <td class="px-4 text-muted small" style="max-width: 180px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                {{ $mk->id }}
                            </td>
                            <td class="fw-semibold">{{ $mk->nama_mk }}</td>
                            <td>
                                <span class="badge bg-secondary px-2 py-1">{{ $mk->sks }} SKS</span>
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-sm btn-warning text-white px-3">
                                        Edit
                                    </a>
                                    <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger px-3" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">Belum ada data mata kuliah yang tersimpan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection