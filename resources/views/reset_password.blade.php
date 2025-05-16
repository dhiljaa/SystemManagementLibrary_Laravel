@extends('layouts.app')

@section('content')
<style>
    #admin-content {
        margin-top: 50px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .admin-heading {
        color: #5bc0de;
        font-weight: 700;
        font-size: 28px;
        margin-bottom: 1rem;
        text-align: center;
    }

    form.yourform {
        background-color: #ffffff;
        padding: 30px 35px;
        border-radius: 12px;
        border: 1px solid #dee2e6;
        box-shadow: 0px 6px 14px rgba(0, 0, 0, 0.08);
        max-width: 480px;
        margin: 0 auto;
    }

    form.yourform label {
        font-weight: 600;
        color: #2563EB;
    }

    form.yourform input.form-control {
        border-radius: 8px;
        font-size: 16px;
        padding: 10px 15px;
        border: 1.5px solid #ccc;
        transition: border-color 0.3s ease;
    }

    form.yourform input.form-control:focus {
        border-color: #5bc0de;
        box-shadow: 0 0 8px rgba(91, 192, 222, 0.6);
        outline: none;
    }

    .btn-primary {
        background-color: #5bc0de;
        border-color: #5bc0de;
        width: 100%;
        font-weight: 700;
        padding: 12px;
        font-size: 18px;
        border-radius: 8px;
        transition: background-color 0.3s ease, border-color 0.3s ease;
        cursor: pointer;
    }

    .btn-primary:hover,
    .btn-primary:focus {
        background-color: #31b0d5;
        border-color: #269abc;
        box-shadow: 0 5px 15px rgba(49, 176, 213, 0.6);
        outline: none;
    }

    .alert-danger {
        margin-top: 10px;
        font-size: 14px;
        border-radius: 6px;
        padding: 8px 12px;
    }

    @media (max-width: 576px) {
        form.yourform {
            padding: 20px 20px;
            max-width: 100%;
        }
    }
</style>

<div id="admin-content">
    <div class="container">
        <h2 class="admin-heading">Reset Password</h2>

        <form class="yourform" action="{{ route('change_password') }}" method="post" autocomplete="off">
            @csrf
            <div class="form-group mb-4">
                <label for="c_password">Current Password</label>
                <input type="password" id="c_password" class="form-control" name="c_password" required>
                @error('c_password')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="password">New Password</label>
                <input type="password" id="password" class="form-control" name="password" required>
                @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
