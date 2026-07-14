<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Sistem Informasi STAI Nurul Abror Al-Robbaniyin</title>
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts: Poppins (Headings) & Inter (Body, Labels, Buttons) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset-login')}}/css/style.css">
</head>
<body>

    <div class="login-wrapper">
        
        <!-- LEFT SECTION - Campus image and branding -->
        <div class="left-section">
            <!-- Animated background image -->
            <div class="campus-bg-image"></div>
            <!-- Green linear gradient overlay -->
            <div class="gradient-overlay"></div>
            <!-- Islamic pattern background -->
            <div class="islamic-pattern"></div>
            
            <div class="left-content">
                <!-- University Logo -->
                <div class="logo-container">
                    <img src="{{ asset('asset-login/logo.png') }}" alt="Logo STAI Nurul Abror Al-Robbaniyin" class="logo">
                </div>
                
                <!-- Center tagline and title -->
                <div class="center-content">
                    <h2 class="academic-title">Sistem Informasi<br>STAI Nurul Abror Al-Robbaniyin</h2>
                    <p class="academic-tagline">“Mewujudkan layanan akademik yang modern, cepat, dan terintegrasi.”</p>
                </div>
                
                <!-- Left footer copyright -->
                <div class="left-footer">
                    <p>&copy; {{ date('Y') }} STAI Nurul Abror Al-Robbaniyin. All Rights Reserved.</p>
                </div>
            </div>
        </div>

        <!-- RIGHT SECTION - Login form -->
        <div class="right-section">
            <div class="form-container">
                
                <!-- Mobile Branding Header (visible only on mobile viewports) -->
                <div class="mobile-header">
                    <img src="{{ asset('asset-login/logo.png') }}" alt="Logo STAI Nurul Abror Al-Robbaniyin" class="mobile-logo">
                    <div class="mobile-title-container">
                        <h3 class="mobile-title">Sistem Informasi</h3>
                        <h4 class="mobile-subtitle">STAI Nurul Abror Al-Robbaniyin</h4>
                    </div>
                </div>

                <!-- Form Header -->
                <div class="form-header">
                    <h1 class="welcome-heading">Selamat Datang</h1>
                    <p class="welcome-subtitle">Silakan masuk menggunakan akun Anda untuk melanjutkan.</p>
                </div>

                <!-- Laravel validation error message list -->
                @if ($errors->any())
                    <div class="alert-container">
                        @foreach ($errors->all() as $error)
                            <div class="alert-message">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                <span>{{ $error }}</span>
                            </div>
                        @endforeach
                    </div>
                @endif

                <!-- Login Form -->
                <form action="{{ route('login') }}" method="POST" id="loginForm">
                    @csrf
                    
                    <!-- Email Input -->
                    <div class="input-group-custom">
                        <label for="email" class="label-custom">Email</label>
                        <input type="email" name="email" id="email" class="input-custom" placeholder="nama@email.com" required autocomplete="email" autofocus value="{{ old('email') }}">
                    </div>

                    <!-- Password Input -->
                    <div class="input-group-custom">
                        <label for="password" class="label-custom">Password</label>
                        <div class="password-wrapper">
                            <input type="password" name="password" id="password" class="input-custom" placeholder="Masukkan password" required autocomplete="current-password">
                            <button type="button" class="password-toggle" id="passwordToggle" aria-label="Tampilkan password">
                                <i class="fa-solid fa-eye" id="toggleIcon"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Options Row -->
                    <div class="options-row">
                        <label class="remember-me">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="checkbox-custom"></span>
                            <span class="label-text">Ingat Saya</span>
                        </label>
                        <a href="#" class="forgot-password-link">Lupa Password?</a>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="login-submit-btn">
                        MASUK
                    </button>
                </form>

                <!-- Footer help text -->
                <div class="form-footer">
                    <p>Butuh bantuan? Hubungi IT Support di<br><a href="mailto:admin@stainaa.ac.id">admin@stainaa.ac.id</a></p>
                </div>

            </div>
        </div>

    </div>

    <!-- JavaScript logic for password show/hide and toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const passwordToggle = document.getElementById('passwordToggle');
            const toggleIcon = document.getElementById('toggleIcon');

            if (passwordToggle && passwordInput) {
                passwordToggle.addEventListener('click', function() {
                    // Check the current type of the input
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    
                    // Toggle FontAwesome classes and aria-label accessibility attributes
                    if (type === 'password') {
                        toggleIcon.classList.remove('fa-eye-slash');
                        toggleIcon.classList.add('fa-eye');
                        passwordToggle.setAttribute('aria-label', 'Tampilkan password');
                    } else {
                        toggleIcon.classList.remove('fa-eye');
                        toggleIcon.classList.add('fa-eye-slash');
                        passwordToggle.setAttribute('aria-label', 'Sembunyikan password');
                    }
                });
            }
        });
    </script>
</body>
</html>