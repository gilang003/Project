@extends('admin.dashboard')
@section('content')

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        <h1 class="text-center">Data Pegawai</h1>
        <div class="text-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NAMA</th>
                        <th>NIP</th>
                        <th>ALAMAT</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->nip }}</td>
                        <td>{{ $d->alamat }}</td>
                        <td>
                            <a href="{{ route('getDataByIdPegawai', $d->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('deleteDataPegawai', $d->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection