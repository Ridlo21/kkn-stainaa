<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>E-KKN | {{ $title }}</title>

    <!-- color-modes:js -->
    <script src="{{ asset('asset-admin') }}/js/color-modes.js"></script>
    <!-- endinject -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('asset-admin') }}/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('asset-admin') }}/vendors/flatpickr/flatpickr.min.css">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('asset-admin') }}/css/demo1/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset('asset-admin') }}/images/favicon.png" />
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="{{route('admin.dashboard')}}" class="sidebar-brand">
                    E-<span><strong>KKN</strong></span>
                </a>
                <div class="sidebar-toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav" id="sidebarNav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a href="{{route('admin.dashboard')}}" class="nav-link">
                            <i class="link-icon" data-lucide="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">web apps</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button"
                            aria-expanded="false" aria-controls="emails">
                            <i class="link-icon" data-lucide="mail"></i>
                            <span class="link-title">Email</span>
                            <i class="link-arrow" data-lucide="chevron-down"></i>
                        </a>
                        <div class="collapse" data-bs-parent="#sidebarNav" id="emails">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="pages/email/inbox.html" class="nav-link">Inbox</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/email/read.html" class="nav-link">Read</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/email/compose.html" class="nav-link">Compose</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            <nav class="navbar">
                <div class="navbar-content">

                    <div class="logo-mini-wrapper">
                        <img src="{{ asset('asset-admin') }}/images/logo-mini-light.png"
                            class="logo-mini logo-mini-light" alt="logo">
                        <img src="{{ asset('asset-admin') }}/images/logo-mini-dark.png"
                            class="logo-mini logo-mini-dark" alt="logo">
                    </div>

                    <ul class="navbar-nav">
                        <li class="theme-switcher-wrapper nav-item">
                            <input type="checkbox" value="" id="theme-switcher">
                            <label for="theme-switcher">
                                <div class="box">
                                    <div class="ball"></div>
                                    <div class="icons">
                                        <i data-lucide="sun"></i>
                                        <i data-lucide="moon"></i>
                                    </div>
                                </div>
                            </label>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex" href="#" id="languageDropdown"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('asset-admin') }}/images/flags/us.svg" class="w-20px"
                                    title="us" alt="flag">
                                <span class="ms-2 d-none d-md-inline-block">English</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="languageDropdown">
                                <a href="javascript:;" class="dropdown-item py-2 d-flex"><img
                                        src="{{ asset('asset-admin') }}/images/flags/us.svg" class="w-20px"
                                        title="us" alt="us"> <span class="ms-2"> English </span></a>
                                <a href="javascript:;" class="dropdown-item py-2 d-flex"><img
                                        src="{{ asset('asset-admin') }}/images/flags/fr.svg" class="w-20px"
                                        title="fr" alt="fr"> <span class="ms-2"> French </span></a>
                                <a href="javascript:;" class="dropdown-item py-2 d-flex"><img
                                        src="{{ asset('asset-admin') }}/images/flags/de.svg" class="w-20px"
                                        title="de" alt="de"> <span class="ms-2"> German </span></a>
                                <a href="javascript:;" class="dropdown-item py-2 d-flex"><img
                                        src="{{ asset('asset-admin') }}/images/flags/pt.svg" class="w-20px"
                                        title="pt" alt="pt"> <span class="ms-2"> Portuguese </span></a>
                                <a href="javascript:;" class="dropdown-item py-2 d-flex"><img
                                        src="{{ asset('asset-admin') }}/images/flags/es.svg" class="w-20px"
                                        title="es" alt="es"> <span class="ms-2"> Spanish </span></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-lucide="bell"></i>
                                <div class="indicator">
                                    <div class="circle"></div>
                                </div>
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                                    <p>6 New Notifications</p>
                                    <a href="javascript:;" class="text-secondary">Clear all</a>
                                </div>
                                <div class="p-1">
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="w-30px h-30px d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-lucide="gift"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>New Order Recieved</p>
                                            <p class="fs-12px text-secondary">30 min ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="w-30px h-30px d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-lucide="alert-circle"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>Server Limit Reached!</p>
                                            <p class="fs-12px text-secondary">1 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="w-30px h-30px d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <img class="w-30px h-30px rounded-circle"
                                                src="{{ asset('asset-admin') }}/images/faces/face6.jpg"
                                                alt="userr">
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>New customer registered</p>
                                            <p class="fs-12px text-secondary">2 sec ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="w-30px h-30px d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-lucide="layers"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>Apps are ready for update</p>
                                            <p class="fs-12px text-secondary">5 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div
                                            class="w-30px h-30px d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-lucide="download"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>Download completed</p>
                                            <p class="fs-12px text-secondary">6 hrs ago</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="w-30px h-30px ms-1 rounded-circle"
                                    src="{{ asset('asset-admin') }}/images/faces/face1.jpg" alt="profile">
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                                    <div class="mb-3">
                                        <img class="w-80px h-80px rounded-circle"
                                            src="{{ asset('asset-admin') }}/images/faces/face1.jpg" alt="">
                                    </div>
                                    <div class="text-center">
                                        <p class="fs-16px fw-bolder">Amiah Burton</p>
                                        <p class="fs-12px text-secondary">amiahburton@gmail.com</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled p-1">
                                    <li>
                                        <a href="pages/general/profile.html"
                                            class="dropdown-item py-2 text-body ms-0">
                                            <i class="me-2 icon-md" data-lucide="user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="dropdown-item py-2 text-body ms-0">
                                            <i class="me-2 icon-md" data-lucide="edit"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="dropdown-item py-2 text-body ms-0">
                                            <i class="me-2 icon-md" data-lucide="repeat"></i>
                                            <span>Switch User</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="dropdown-item py-2 text-body ms-0">
                                            <i class="me-2 icon-md" data-lucide="log-out"></i>
                                            <span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <a href="#" class="sidebar-toggler">
                        <i data-lucide="menu"></i>
                    </a>

                </div>
            </nav>
            <!-- partial -->

            @yield('konten')

            <!-- partial:partials/_footer.html -->
            <footer
                class="footer d-flex flex-row align-items-center justify-content-between px-4 py-3 border-top small">
                <p class="text-secondary mb-1 mb-md-0">Copyright © 2026 <a href="https://nobleui.com"
                        target="_blank">NobleUI</a>.</p>
                <p class="text-secondary">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm"
                        data-lucide="heart"></i></p>
            </footer>
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('asset-admin') }}/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('asset-admin') }}/vendors/flatpickr/flatpickr.min.js"></script>
    <script src="{{ asset('asset-admin') }}/vendors/apexcharts/apexcharts.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('asset-admin') }}/js/app.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="{{ asset('asset-admin') }}/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    @stack('scripts')

</body>

</html>
