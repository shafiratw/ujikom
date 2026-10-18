<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin - PT Solusi Koneksi Anda</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1rem;
      background: #eaf3ff;
    }

    .login-card {
      width: 100%;
      max-width: 380px;
      background: #ffffff;
      padding: 2rem;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(30, 58, 138, .12);
    }

    .login-header {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .login-header img {
      height: 56px;
      width: auto;
      margin-bottom: .75rem;
    }

    .login-header h2 {
      font-size: 1.4rem;
      font-weight: 700;
      color: #1e3a8a;
    }

    .login-header p {
      font-size: .8rem;
      color: #64748b;
      margin-top: .2rem;
    }

    .alert-error {
      background: #fee2e2;
      color: #991b1b;
      padding: .6rem .75rem;
      font-size: .78rem;
      border-radius: 8px;
      margin-bottom: 1rem;
      text-align: center;
    }

    .form-group { margin-bottom: 1rem; }

    .form-group label {
      display: block;
      font-size: .8rem;
      font-weight: 600;
      color: #334155;
      margin-bottom: .3rem;
    }

    .input-wrapper { position: relative; }

    .form-input {
      width: 100%;
      padding: .7rem .8rem;
      border: 1px solid #cbd5e1;
      border-radius: 8px;
      font-size: .85rem;
      font-family: inherit;
      color: #1e293b;
      outline: none;
      transition: border-color .2s, box-shadow .2s;
    }

    .form-input:focus {
      border-color: #0085ff;
      box-shadow: 0 0 0 3px rgba(0, 133, 255, .15);
    }

    .form-input::placeholder { color: #cbd5e1; }

    /* Tombol ikon mata */
    .toggle-pass {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      padding: 4px;
      display: flex;
      align-items: center;
      color: #94a3b8;
      cursor: pointer;
      transition: color .2s;
    }

    .toggle-pass:hover { color: #0085ff; }

    .remember {
      display: flex;
      align-items: center;
      gap: .4rem;
      font-size: .78rem;
      color: #475569;
      cursor: pointer;
      margin-bottom: 1.25rem;
    }

    .remember input { accent-color: #1e3a8a; }

    .btn-submit {
      width: 100%;
      background: #0085ff;
      color: #ffffff;
      border: none;
      padding: .75rem;
      font-size: .9rem;
      font-weight: 600;
      font-family: inherit;
      border-radius: 8px;
      cursor: pointer;
      transition: background .2s;
    }

    .btn-submit:hover { background: #0069cc; }

    .btn-back {
      display: block;
      text-align: center;
      margin-top: 1.1rem;
      font-size: .8rem;
      color: #64748b;
      text-decoration: none;
    }

    .btn-back:hover { color: #1e3a8a; }
  </style>
</head>
<body>

  <div class="login-card">

    <div class="login-header">
      <img src="{{ asset('images/logo2.jpg') }}" alt="Logo" onerror="this.style.display='none'">
      <h2>Login Admin</h2>
      <p>PT Solusi Koneksi Anda</p>
    </div>

    <form action="{{ route('login') }}" method="POST">
      @csrf

      @if ($errors->any())
        <div class="alert-error">{{ $errors->first() }}</div>
      @endif

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-input" value="{{ old('email') }}" placeholder="Masukkan email" required>
      </div>

      <div class="form-group">
        <label>Password</label>
        <div class="input-wrapper">
          <input type="password" name="password" id="passwordInput" class="form-input" placeholder="Masukkan password" required style="padding-right: 2.8rem;">
          <button type="button" class="toggle-pass" onclick="togglePassword()" aria-label="Tampilkan atau sembunyikan password">
            <svg id="eyeIcon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
              <circle cx="12" cy="12" r="3"/>
            </svg>
          </button>
        </div>
      </div>

      <label class="remember">
        <input type="checkbox" name="remember"> Ingat saya
      </label>

      <button type="submit" class="btn-submit">Masuk</button>
    </form>

    <a href="{{ route('home') }}" class="btn-back">&larr; Kembali ke Beranda</a>

  </div>

  <script>
    function togglePassword() {
      const input = document.getElementById('passwordInput');
      const icon = document.getElementById('eyeIcon');

      if (input.type === 'password') {
        input.type = 'text';
        // ikon mata dicoret = password sedang terlihat
        icon.innerHTML = '<path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/><path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"/><path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"/><line x1="2" x2="22" y1="2" y2="22"/>';
      } else {
        input.type = 'password';
        // ikon mata biasa = password tersembunyi
        icon.innerHTML = '<path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/>';
      }
    }
  </script>
</body>
</html>