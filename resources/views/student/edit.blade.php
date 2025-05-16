@extends('layouts.app')
@section('content')
<style>
    /* Bagian utama halaman admin */
    #admin-content {
        padding: 40px 0;
        background: #f0f4f8; /* warna background lembut biru keabu-abuan */
        min-height: 100vh;
    }

    /* Judul halaman */
    .admin-heading {
        font-size: 30px;
        font-weight: 700;
        color: #2c3e50; /* warna biru gelap */
        margin-bottom: 30px;
        border-left: 6px solid #3498db; /* garis kiri warna biru cerah */
        padding-left: 12px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Form container */
    .yourform {
        background: #ffffff;
        padding: 35px 30px;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(52, 152, 219, 0.15); /* shadow lembut warna biru */
        border: 1px solid #d1d9e6;
        transition: box-shadow 0.3s ease;
    }
    .yourform:hover {
        box-shadow: 0 12px 30px rgba(52, 152, 219, 0.3);
    }

    /* Label pada form */
    .form-group label {
        font-weight: 600;
        color: #34495e; /* warna abu gelap kebiruan */
        margin-bottom: 6px;
        font-size: 15px;
    }

    /* Input dan select */
    .form-control {
        border-radius: 6px;
        border: 1.5px solid #bdc3c7;
        box-shadow: none;
        font-size: 15px;
        padding: 8px 12px;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .form-control:focus {
        border-color: #2980b9; /* warna biru fokus */
        box-shadow: 0 0 8px rgba(41, 128, 185, 0.4);
    }

    /* Pesan error */
    .alert-danger {
        margin-top: 5px;
        font-size: 13px;
        background-color: #fdecea;
        color: #c0392b;
        border-radius: 4px;
        padding: 6px 10px;
    }

    /* Tombol submit */
    .btn-submit {
        background-color: #2980b9;
        border-color: #2980b9;
        padding: 12px 28px;
        font-weight: 700;
        border-radius: 8px;
        font-size: 16px;
        color: #fff;
        width: 100%;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .btn-submit:hover {
        background-color: #1c5980;
        border-color: #1c5980;
    }
</style>

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 class="admin-heading">Perbarui Data Siswa</h2>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <form class="yourform" action="{{ route('student.update', $student->id) }}" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" class="form-control" placeholder="Nama Siswa" name="name"
                            value="{{ $student->name }}" required>
                        @error('name')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" placeholder="Alamat" name="address"
                            value="{{ $student->address }}" required>
                        @error('address')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="gender" class="form-control">
                            @if ($student->gneder == 'male')
                                <option value="male" selected>Laki-laki</option>
                                <option value="female">Perempuan</option>
                            @else
                                <option value="male">Laki-laki</option>
                                <option value="female" selected>Perempuan</option>
                            @endif
                        </select>
                        @error('gender')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" class="form-control" placeholder="Kelas" name="class"
                            value="{{ $student->class }}" required>
                        @error('class')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Umur</label>
                        <input type="number" class="form-control" placeholder="Umur" name="age"
                            value="{{ $student->age }}" required>
                        @error('age')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="phone" class="form-control" placeholder="Telepon" name="phone"
                            value="{{ $student->phone }}" required>
                        @error('phone')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email"
                            value="{{ $student->email }}" required>
                        @error('email')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="submit" name="save" class="btn-submit" value="Perbarui Data">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
