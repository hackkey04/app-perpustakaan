@extends('layouts.app')

@section('title', 'Profil Petugas')

@section('content')
    <style>
        .profil-form { max-width: 500px; }
        .profil-form label { display: block; margin-top: 12px; font-weight: bold; }
        .profil-form input { width: 100%; padding: 6px; margin-top: 4px; box-sizing: border-box; }
        .profil-form .error { color: #b91c1c; font-size: 14px; margin-top: 4px; }
    </style>
    <h1>Profil Petugas</h1>

    <div style="background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 6px; padding: 20px; max-width: 500px; margin-top: 16px;">
        <p><strong>Nama:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Role:</strong> 
            <span class="badge" style="background: #e0e7ff; color: #3730a3;">
                {{ ucfirst($user->role) }}
            </span>
        </p>
    <h2>Ganti Password</h2>

    <form method="POST" action="{{ route('profile.password.update') }}" class="profil-form">
        @csrf
        @method('PUT')

        <label for="password_lama">Password lama</label>
        <input type="password" name="password_lama" id="password_lama">
        @error('password_lama')
            <div class="error">{{ $message }}</div>
        @enderror
        <break></break>

        <label for="password">Password baru</label>
        <input type="password" name="password" id="password">
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="password_confirmation">Konfirmasi password baru</label>
        <input type="password" name="password_confirmation" id="password_confirmation">

        <p><button type="submit" class="btn">Simpan Password Baru</button></p>
    </form>
    </div>
@endsection
