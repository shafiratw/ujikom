<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - SMKN 4 Bogor</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box !important;
      margin: 0 !important;
      padding: 0 !important;
    }

    body {
      font-family: 'Poppins', sans-serif !important;
      height: 100vh !important;
      width: 100vw !important;
      overflow: hidden !important;
      /* Menggunakan file lokal di folder public/images/lapangan-basket.jpg */
      background-image: url('{{ asset("images/login.jpg") }}') !important;
      background-size: cover !important;
      background-position: center !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      position: relative !important;
    }

    /* Efek gelap / overlay transparan di atas background */
    body::before {
      content: '' !important;
      position: absolute !important;
      top: 0 !important;
      left: 0 !important;
      width: 100% !important;
      height: 100% !important;
      background: rgba(0, 0, 0, 0.45) !important;
      z-index: 1 !important;
    }

    /* Card Putih Mengapung di Tengah (Ukuran ramping dan pas) */
    .login-card-center {
      position: relative !important;
      z-index: 10 !important;
      width: 100% !important;
      max-width: 390px !important;
      background: #ffffff !important;
      padding: 2rem 2rem !important;
      border-radius: 16px !important;
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.1) !important;
    }

    .card-header-center {
      text-align: center !important;
      margin-bottom: 1.35rem !important;
    }

    .card-logo {
      width: 40px !important;
      margin-bottom: 0.35rem !important;
    }

    .card-header-center h2 {
      font-size: 1.5rem !important;
      font-weight: 700 !important;
      color: #1e3a8a !important;
    }

    .form-group {
      margin-bottom: 1rem !important;
    }

    .form-group label {
      display: block !important;
      font-size: 0.8rem !important;
      font-weight: 600 !important;
      color: #334155 !important;
      margin-bottom: 0.3rem !important;
    }

    .input-wrapper {
      position: relative !important;
      display: flex !important;
      align-items: center !important;
    }

    .input-icon {
      position: absolute !important;
      left: 12px !important;
      color: #94a3b8 !important;
      pointer-events: none !important;
    }

    .eye-btn {
      position: absolute !important;
      right: 12px !important;
      background: none !important;
      border: none !important;
      cursor: pointer !important;
      color: #94a3b8 !important;
      display: flex !important;
      align-items: center !important;
    }

    .form-input {
      width: 100% !important;
      padding: 0.6rem 0.75rem 0.6rem 2.5rem !important;
      border: 1px solid #cbd5e1 !important;
      border-radius: 8px !important;
      font-size: 0.825rem !important;
      font-family: inherit !important;
      outline: none !important;
      color: #1e293b !important;
      background-color: #ffffff !important;
      transition: all 0.2s ease !important;
    }

    .form-input:focus {
      border-color: #1e3a8a !important;
      box-shadow: 0 0 0 3px rgba(30, 58, 138, 0.1) !important;
    }

    .form-input::placeholder {
      color: #cbd5e1 !important;
    }

    .form-options {
      display: flex !important;
      justify-content: space-between !important;
      align-items: center !important;
      font-size: 0.75rem !important;
      margin-bottom: 1.15rem !important;
      color: #475569 !important;
    }

    .remember-wrapper {
      display: flex !important;
      align-items: center !important;
      gap: 0.35rem !important;
      cursor: pointer !important;
    }

    .remember-check {
      width: 14px !important;
      height: 14px !important;
      accent-color: #1e3a8a !important;
      cursor: pointer !important;
    }

    .forgot-link {
      color: #2563eb !important;
      text-decoration: none !important;
      font-weight: 500 !important;
    }

    .forgot-link:hover {
      text-decoration: underline !important;
    }

    .btn-submit {
      width: 100% !important;
      background-color: #1e3a8a !important;
      color: #ffffff !important;
      border: none !important;
      padding: 0.65rem !important;
      font-size: 0.875rem !important;
      font-weight: 600 !important;
      border-radius: 8px !important;
      cursor: pointer !important;
      margin-bottom: 1rem !important;
      transition: background-color 0.2s !important;
    }

    .btn-submit:hover {
      background-color: #1d4ed8 !important;
    }

    .divider {
      text-align: center !important;
      position: relative !important;
      margin-bottom: 1rem !important;
    }

    .divider::before {
      content: '' !important;
      position: absolute !important;
      top: 50% !important;
      left: 0 !important;
      width: 100% !important;
      height: 1px !important;
      background-color: #e2e8f0 !important;
    }

    .divider span {
      position: relative !important;
      background-color: #ffffff !important;
      padding: 0 0.5rem !important;
      font-size: 0.675rem !important;
      color: #94a3b8 !important;
      text-transform: lowercase !important;
      letter-spacing: 0.5px !important;
    }

    .btn-back {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 0.4rem !important;
      width: 100% !important;
      background-color: transparent !important;
      color: #334155 !important;
      border: none !important;
      padding: 0.35rem !important;
      font-size: 0.775rem !important;
      font-weight: 500 !important;
      cursor: pointer !important;
      text-decoration: none !important;
    }

    .btn-back:hover {
      color: #1e3a8a !important;
    }
  </style>
</head>
<body>

  <!-- Card Login di Tengah Layar -->
  <div class="login-card-center">
    
    <div class="card-header-center">
      <!-- Menggunakan file lokal logo-smk.png di folder public/images/ -->
      <img src="{{ asset('images/logo.jpg') }}" alt="Logo SMKN 4 Bogor" class="card-logo">
      <h2>Login</h2>
    </div>

    <!-- Form mengarah ke route login POST yang sudah dibikin di AuthController -->
    <form action="{{ url('/login') }}" method="POST">
      @csrf

      <!-- Pesan Error Validasi / Gagal Login -->
      @if ($errors->any())
        <div style="background: #fee2e2; color: #991b1b; padding: 0.5rem; font-size: 0.75rem; border-radius: 6px; margin-bottom: 1rem; text-align: center;">
          {{ $errors->first() }}
        </div>
      @endif

      <!-- Input Email -->
      <div class="form-group">
        <label>Email</label>
        <div class="input-wrapper">
          <svg class="input-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
          <input type="email" name="email" class="form-input" value="{{ old('email') }}" placeholder="Masukan email anda" required>
        </div>
      </div>

      <!-- Input Password -->
      <div class="form-group">
        <label>Password</label>
        <div class="input-wrapper">
          <svg class="input-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          <input type="password" name="password" id="passwordInput" class="form-input" placeholder="Masukan password anda" required style="padding-right: 2.2rem;">
          <button type="button" class="eye-btn" onclick="togglePassword()">
            <svg id="eyeIcon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
          </button>
        </div>
      </div>

      <!-- Ingat Saya & Lupa Password -->
      <div class="form-options">
        <label class="remember-wrapper">
          <input type="checkbox" name="remember" class="remember-check">
          Ingat saya
        </label>
        <a href="#" class="forgot-link">Lupa password?</a>
      </div>

      <!-- Tombol Masuk -->
      <button type="submit" class="btn-submit">Masuk</button>

      <!-- Divider -->
      <div class="divider">
        <span>atau</span>
      </div>

      <!-- Kembali ke Beranda -->
      <a href="{{ url('/') }}" class="btn-back">
        &larr; Kembali ke Beranda
      </a>
    </form>

  </div>

  <script>
    function togglePassword() {
      const passInput = document.getElementById('passwordInput');
      const eyeIcon = document.getElementById('eyeIcon');
      if (passInput.type === 'password') {
        passInput.type = 'text';
        eyeIcon.innerHTML = '<path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/><path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"/><path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"/><line x1="2" x2="22" y1="2" y2="22"/>';
      } else {
        passInput.type = 'password';
        eyeIcon.innerHTML = '<path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/>';
      }
    }
  </script>
</body>
</html>