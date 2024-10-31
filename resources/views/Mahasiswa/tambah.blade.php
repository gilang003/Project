@extends('admin.dashboard')
@section('content')

<div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Tambah Pegawai</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('createDataPegawai') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nip">Nip</label>
                        <input type="text" class="form-control" id="nip" name="nip" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <a href="{{ url('index') }}"><button class="btn btn-danger">Batal</button></a>
                </form>
            </div>
        </div>

@endsection