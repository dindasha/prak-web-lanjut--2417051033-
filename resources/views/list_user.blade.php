@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-0">Daftar Pengguna</h2>
        <p class="text-muted mb-0">Kelola data mahasiswa yang terdaftar</p>
    </div>
    <a href="/user/create" class="btn btn-primary shadow-sm">+ Tambah User</a>
</div>

<x-user-table :users="$users" />
@endsection