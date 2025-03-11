<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Sidebar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #2c3e50;
            position: fixed;
            top: 0;
            left: 0;
            overflow: auto;
            padding-top: 20px;
        }
        .sidebar .user-panel {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            color: #ecf0f1;
            border-bottom: 1px solid #34495e;
        }
        .sidebar .user-panel .info a {
            color: #ecf0f1;
            font-weight: bold;
        }
        .sidebar nav ul {
            list-style: none;
            padding: 0;
        }
        .sidebar nav ul li {
            margin: 0;
            padding: 0;
        }
        .sidebar nav ul li a {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            color: #ecf0f1;
            text-decoration: none;
            transition: background 0.3s, color 0.3s;
        }
        .sidebar nav ul li a:hover, .sidebar nav ul li a.active {
            background: #1abc9c;
            color: #2c3e50;
        }
        .sidebar nav ul li a i {
            margin-right: 10px;
        }
        .sidebar nav ul li a p {
            margin: 0;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="{{ route('admin.profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>{{ __('Users') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.types.index') }}" class="nav-link {{ request()->is('admin/types*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-inbox"></i>
                        <p>{{ __('Kategori') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.cars.index') }}" class="nav-link {{ request()->is('admin/cars*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-car"></i>
                        <p>{{ __('Mobil') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.testimonials.index') }}" class="nav-link {{ request()->is('admin/testimonials*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-quote-left"></i>
                        <p>{{ __('Testimonial') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.blogs.index') }}" class="nav-link {{ request()->is('admin/blogs*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-rss"></i>
                        <p>{{ __('Blog') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.teams.index') }}" class="nav-link {{ request()->is('admin/teams*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>{{ __('Team') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.settings.index') }}" class="nav-link {{ request()->is('admin/settings*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>{{ __('Setting') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.contacts.index') }}" class="nav-link {{ request()->is('admin/contacts*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>{{ __('Pesan') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.bookings.index') }}" class="nav-link {{ request()->is('admin/bookings*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>{{ __('Booking') }}</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</body>
</html>
