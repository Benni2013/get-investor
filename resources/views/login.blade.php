@extends('layout.template')

@section('konten')
    <div class="bg-login">
      <div class="login-container">
            <img src="/assets/images/gambarTopi.png" alt="University Logo" class="university-logo" />
            <h2 class="attendance-title">Rekapitulasi Kehadiran Kuliah</h2>
            <form action="" method="post">
              <label for="email-input" class="email-label">Email Universitas</label>
              <input type="text" id="email-input" placeholder="Enter your university email" class="email-input" required />
              <label for="password-input" class="password-label">Password</label>
              <div class="password-input-container">
                <input type="password" id="password-input" placeholder="Enter your password" class="password-input" required />
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="eye-icon" id="eye-icon">
                  <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/>
                </svg>
              </div>
              <div class="options-container">
                <a href="#" class="forgot-password-link">Lupa Password</a>
                <label class="remember-me-label">
                  <input type="checkbox" class="remember-me-checkbox" />
                  <span class="remember-me-text">Ingat saya</span>
                </label>
              </div>
              <div class="btn-login">
                <button name="submit" type="submit" class="login-button" >Login</button>
              </div>
              
            </form>
            
          </div>
    </div>
    

    <script>
      document.getElementById('eye-icon').addEventListener('click', function() {
          var icon = document.getElementById('eye-icon');
          icon.classList.toggle('active'); // Toggle class 'active' saat ikon diklik
          var passwordInput = document.getElementById('password-input');
          if (passwordInput.type === 'password') {
              passwordInput.type = 'text'; // Ubah tipe input menjadi teks jika sebelumnya adalah password
          } else {
              passwordInput.type = 'password'; // Ubah tipe input menjadi password jika sebelumnya adalah teks
          }
      });

    </script>
    
@endsection