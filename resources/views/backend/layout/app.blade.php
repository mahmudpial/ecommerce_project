<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- {{-- Responsive --}} -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- {{-- Laravel CSRF Token --}} -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- {{-- Bootstrap CSS --}} -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- {{-- Font Awesome CDN --}} -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- {{-- Custom CSS (Page Wise) --}} -->
    @yield('css')

    <!-- {{-- Basic Layout Styling --}} -->
    <style>
        body {
            background: #f4f6f9;
            font-family: 'Segoe UI', sans-serif;
        }

        .sidebar {
            width: 240px;
            min-height: 100vh;
            background: #1f2937;
            transition: all .3s;
        }

        .sidebar a {
            color: #cbd5e1;
            padding: 12px 20px;
            display: block;
            text-decoration: none;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #111827;
            color: #fff;
        }

        .sidebar .logo {
            font-size: 20px;
            font-weight: bold;
            padding: 20px;
            color: #fff;
            text-align: center;
            border-bottom: 1px solid #374151;
        }

        .main-wrapper {
            flex: 1;
        }

        .topbar {
            background: #fff;
            border-bottom: 1px solid #e5e7eb;
        }

        .content {
            padding: 25px;
            min-height: calc(100vh - 120px);
        }

        footer {
            background: #fff;
            border-top: 1px solid #e5e7eb;
            padding: 12px;
            font-size: 14px;
            color: #6b7280;
        }

        .badge-notify {
            position: absolute;
            top: 0;
            right: -5px;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -240px;
                z-index: 1000;
            }

            .sidebar.show {
                left: 0;
            }
        }
    </style>
</head>

<body>

    <div class="d-flex">

        <!-- {{-- ================= Sidebar ================= --}} -->
        <aside class="sidebar" id="sidebar">
            <div class="logo">Admin Panel</div>

            <ul class="list-unstyled mt-3">
                <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-house me-2"></i> Dashboard</a></li>
                <li><a href="{{ route('admin.products.list') }}"><i class="fa fa-box me-2"></i> Products</a></li>
                <li><a href="#"><i class="fa fa-users me-2"></i> Users</a></li>
                <li><a href="#"><i class="fa fa-cart-shopping me-2"></i> Orders</a></li>
                <li><a href="#"><i class="fa fa-chart-line me-2"></i> Analytics</a></li>
                <li><a href="#"><i class="fa fa-gear me-2"></i> Settings</a></li>
            </ul>
        </aside>

        <!-- {{-- ================= Main Wrapper ================= --}} -->
        <div class="main-wrapper d-flex flex-column w-100">

            <!-- {{-- ================= Top Header ================= --}} -->
            <nav class="navbar topbar px-3">
                <div class="d-flex align-items-center">

                    <!-- {{-- Mobile Sidebar Toggle --}} -->
                    <button class="btn btn-light d-md-none me-2" id="toggleSidebar">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- {{-- Page Title --}} -->
                    <h4 class="mb-0">@yield('page-title', 'Dashboard')</h4>
                </div>

                <!-- {{-- Right Notification & User --}} -->
                <div class="d-flex align-items-center">

                    <!-- {{-- Notification --}} -->
                    <div class="dropdown me-3 position-relative">
                        <a href="#" class="text-dark" data-bs-toggle="dropdown">
                            <i class="fa fa-bell fs-5"></i>
                            <span class="badge bg-danger rounded-circle badge-notify">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li class="dropdown-item">New order placed</li>
                            <li class="dropdown-item">User registered</li>
                            <li class="dropdown-item">Server updated</li>
                        </ul>
                    </div>

                    <!-- {{-- User Dropdown --}} -->
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-decoration-none" data-bs-toggle="dropdown">
                            <span class="bg-primary text-white rounded-circle px-2 py-1 me-2">
                                AU
                            </span>
                            <strong>Admin User</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>

                </div>
            </nav>

            <!-- {{-- ================= Page Content ================= --}} -->
            <main class="content">

                <!-- {{-- Session Message --}} -->
                @include('backend.components.session-messages')

                <!-- {{-- Dynamic Page Content --}} -->
                @yield('content')

            </main>

            <!-- {{-- ================= Footer ================= --}} -->
            <footer class="text-center">
                © {{ now()->year }} Admin Dashboard —
                {{ now()->format('h:i A') }}
            </footer>

        </div>
    </div>

    <!-- {{-- Bootstrap JS Bundle --}} -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- {{-- Sidebar Toggle Script --}} -->
    <script>
        document.getElementById('toggleSidebar')?.addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('show');
        });
    </script>

    <!-- {{-- Custom JS --}} -->
    @yield('js')

</body>

</html>