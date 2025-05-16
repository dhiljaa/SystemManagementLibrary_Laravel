@extends('layouts.guest')

@section('content')

<style>
    body {
        margin: 0;
        height: 100vh;
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #1e3a8a, #3b82f6);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #login-card {
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 12px 30px rgba(59, 130, 246, 0.3);
        width: 400px;
        max-width: 90vw;
        padding: 40px 35px;
        text-align: center;
        animation: fadeInUp 0.8s ease forwards;
        position: relative;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .logo {
        font-weight: 800;
        font-size: 2.5rem;
        color: #2563EB;
        margin-bottom: 25px;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        user-select: none;
    }

    .subtitle {
        font-weight: 500;
        font-size: 1.125rem;
        margin-bottom: 35px;
        color: #1e40af;
    }

    label {
        display: block;
        text-align: left;
        font-weight: 600;
        color: #374151;
        margin-bottom: 8px;
        font-size: 0.95rem;
        user-select: none;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 14px 18px;
        margin-bottom: 24px;
        border-radius: 12px;
        border: 1.5px solid #cbd5e1;
        font-size: 1rem;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        outline-offset: 2px;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        border-color: #2563EB;
        box-shadow: 0 0 10px rgb(37 99 235 / 0.5);
        outline: none;
    }

    .btn-login {
        background: linear-gradient(90deg, #2563EB, #3b82f6);
        border: none;
        color: white;
        width: 100%;
        padding: 16px;
        border-radius: 12px;
        font-weight: 700;
        font-size: 1.125rem;
        cursor: pointer;
        box-shadow: 0 6px 20px rgb(59 130 246 / 0.4);
        transition: background 0.4s ease, box-shadow 0.4s ease, transform 0.2s ease;
        user-select: none;
    }

    .btn-login:hover {
        background: linear-gradient(90deg, #1e40af, #2563EB);
        box-shadow: 0 8px 30px rgb(37 99 235 / 0.7);
        transform: translateY(-2px);
    }

    .btn-login:active {
        transform: translateY(0);
        box-shadow: 0 4px 15px rgb(37 99 235 / 0.5);
    }

    .alert-danger {
        background-color: #fee2e2;
        border: 1px solid #fca5a5;
        color: #b91c1c;
        padding: 12px 16px;
        border-radius: 10px;
        font-weight: 600;
        margin-bottom: 20px;
        user-select: none;
        text-align: center;
    }

    /* Responsive */
    @media (max-width: 450px) {
        #login-card {
            padding: 30px 20px;
            width: 90vw;
        }
    }
</style>

<div id="login-card" role="main" aria-label="Admin Login Card">
   <img src="{{ asset('images/library.png') }}" alt="Logo Library" style="width: 150px; height: 150px; margin-bottom: 20px;">

    
    <div class="logo" aria-label="Sungokong Book Logo">SUNGOKONG BOOK</div>
    <div class="subtitle">Admin Panel Login</div>

    <form action="{{ route('login') }}" method="post" aria-describedby="login-error-message" novalidate>
        @csrf

        @error('username')
            <div id="login-error-message" role="alert" class="alert-danger">{{ $message }}</div>
        @enderror
        @error('password')
            <div id="login-error-message" role="alert" class="alert-danger">{{ $message }}</div>
        @enderror
        @if(session('error'))
            <div id="login-error-message" role="alert" class="alert-danger">{{ session('error') }}</div>
        @endif

        <label for="username">Username</label>
        <input
            type="text"
            name="username"
            id="username"
            value="{{ old('username') }}"
            required
            autofocus
            autocomplete="username"
            aria-required="true"
        >

        <label for="password">Password</label>
        <input
            type="password"
            name="password"
            id="password"
            required
            autocomplete="current-password"
            aria-required="true"
        >

        <button type="submit" class="btn-login" aria-label="Login to admin panel">Login</button>
    </form>
</div>


@endsection
