@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-3">
                    <h2 class="admin-heading">Tambah Data Siswa</h2>
                </div>
                <div class="offset-md-7 col-md-2 text-end">
                    <a class="btn btn-outline-primary" href="{{ route('students') }}">Lihat Semua Siswa</a>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('student.store') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Nama Siswa</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Siswa" name="name"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Alamat</label>
                            <input type="text" class="form-control" placeholder="Masukkan Alamat" name="address"
                                value="{{ old('address') }}" required>
                            @error('address')
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Jenis Kelamin</label>
                            <select name="gender" class="form-control">
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('gender')
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Kelas</label>
                            <input type="text" class="form-control" placeholder="Masukkan Kelas" name="class"
                                value="{{ old('class') }}" required>
                            @error('class')
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Umur</label>
                            <input type="number" class="form-control" placeholder="Masukkan Umur" name="age"
                                value="{{ old('age') }}" required>
                            @error('age')
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Telepon</label>
                            <input type="phone" class="form-control" placeholder="Masukkan Nomor Telepon" name="phone"
                                value="{{ old('phone') }}" required>
                            @error('phone')
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Masukkan Email" name="email"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" name="save" class="btn btn-primary w-100" value="Simpan Data">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
