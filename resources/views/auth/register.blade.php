<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow p-4" style="width: 100%; max-width: 500px;">
        <h3 class="text-center mb-4">Register</h3>

        <form method="POST" action="{{ route('register.simpan') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror"
                id="name" name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                       id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                       id="password" name="password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                       id="password_confirmation" name="password_confirmation" required>
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <p class="mb-1">Pilih peran Anda:</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pengguna" id="user" value="user"
                        {{ old('pengguna') == 'user' || old('pengguna') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="user">Pengguna Biasa</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pengguna" id="kontributor" value="kontributor"
                        {{ old('pengguna') == 'kontributor' ? 'checked' : '' }}>
                    <label class="form-check-label" for="kontributor">Kreator (Bisa Membuat Resep)</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pengguna" id="admin" value="admin"
                        {{ old('pengguna') == 'admin' ? 'checked' : '' }}>
                    <label class="form-check-label" for="admin">Admin (Hanya untuk yang mendapat izin)</label>
                </div>
                <small class="text-danger d-block mt-1">* Pilih Admin hanya jika Anda mendapat izin dari sistem.</small>

                @error('pengguna')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror

            </div>

            <div class="d-flex justify-content-between align-items-center mt-4">
                <a href="{{ route('login') }}" class="text-decoration-none">Sudah punya akun?</a>
                <button type="submit" class="btn btn-success">Register</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
