@extends('temp_admin')
@section('konten')
    <div class="page-content container-xxl">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">{{ $title }}</h4>
            </div>
        </div>

        <!-- Welcome Banner -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm overflow-hidden" style="background: linear-gradient(135deg, #0A5C35 0%, #0F8B4C 100%); border-radius: 15px;">
                    <div class="card-body p-4 position-relative">
                        <!-- Islamic geometric pattern background with 4% opacity -->
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: url(&quot;data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M40 0 L80 40 L40 80 L0 40 Z' fill='none' stroke='%23ffffff' stroke-width='0.75'/%3E%3Cpath d='M0 0 L80 80 M80 0 L0 80' fill='none' stroke='%23ffffff' stroke-width='0.75'/%3E%3Crect x='23.43' y='23.43' width='33.14' height='33.14' fill='none' stroke='%23ffffff' stroke-width='0.75' transform='rotate%2845 40 40%29'/%3E%3Crect x='23.43' y='23.43' width='33.14' height='33.14' fill='none' stroke='%23ffffff' stroke-width='0.75'/%3E%3C/svg%3E&quot;); opacity: 0.04; pointer-events: none; z-index: 1;"></div>
                        
                        <div class="row align-items-center position-relative" style="z-index: 2;">
                            <div class="col-md-9 text-white">
                                <h3 class="fw-bold mb-2">Selamat Datang Kembali, {{ auth()->user()->name ?? 'Admin E-KKN' }}! 👋</h3>
                                <p class="mb-0 opacity-75 fs-6" style="line-height: 1.6;">
                                    Di portal Sistem Informasi Kuliah Kerja Nyata (E-KKN) STAI Nurul Abror Al-Robbaniyin. Pantau perkembangan registrasi mahasiswa, sebaran lokasi posko KKN, log harian, hingga penilaian akhir secara cepat, transparan, dan terintegrasi.
                                </p>
                            </div>
                            <div class="col-md-3 text-end d-none d-md-block">
                                <img src="{{ asset('asset-login/logo.png') }}" alt="Logo STAI" class="img-fluid" style="max-height: 95px; filter: drop-shadow(0 6px 12px rgba(0, 0, 0, 0.25)); transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

@push('scripts')
    <script>
        // 
    </script>
@endpush
