@props(['users'])

<div class="table-responsive shadow-sm rounded-3">
    <table class="table table-hover align-middle mb-0 bg-white">
        <thead class="table-dark">
            <tr>
                <th scope="col" class="text-center">ID</th>
                <scope="col">Nama</th>
                <scope="col">NPM</th>
                <scope="col" class="text-center">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td class="text-center fw-bold">{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td><span class="badge bg-secondary">{{ $user->npm }}</span></td>
                <td class="text-center"><span class="badge bg-primary">{{ $user->nama_kelas }}</span></td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center py-4 text-muted">Belum ada data pengguna.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>