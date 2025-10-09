# routes/web.php
```
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UIController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [UIController::class, 'home'])->name('home');
Route::get('/about', [UIController::class, 'about'])->name('about');
Route::get('/contact', [UIController::class, 'contact'])->name('contact');
Route::get('/profile', [UIController::class, 'profile'])->name('profile');
Route::get('/switch-theme/{theme}', [UIController::class, 'switchTheme'])->name('switch-theme');

```

# UICONTROLLER
```<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIController extends Controller
{
    public function home(Request $request)
    {
        $theme = session('theme', 'light');
        $alertMessage = 'Selamat datang di Laravel UI Integreted Demo!';
        $features = [
            'Partial Views',
            'Blade Components',
            'Theme Switching',
            'Bootstrap 5',
            'Responsive Design',
        ];

        return view('home', compact('theme', 'alertMessage', 'features'));
    }

    public function about(Request $request)
    {
        $theme = session('theme', 'light');
        $alertMessage = 'Halaman ini menggunakan Partial Views!';
        $team = [
            ['name' => 'Lepi', 'role' => 'OG'],
            ['name' => 'Imam', 'role' => 'Under OG'],
            ['name' => 'Ilham', 'role' => 'President'],
        ];

        return view('about', compact('theme', 'alertMessage', 'team'));
    }

    public function contact(Request $request)
    {
        $theme = session('theme', 'light');
        $departments = [
            'Teknik Informatika',
            'Teknik Elektro',
            'Teknik Mesin',
        ];

        return view('contact', compact('theme', 'departments'));
    }

    public function profile(Request $request)
    {
        $theme = session('theme', 'light');
        $user = [
            'name' =>  'Lepi',
            'email' => 'aauliafahlefi@gmail.com',
            'join-date' => '2025-06-10',
            'preferences' => ['Email Notifications', 'Dark Mode', 'Newsletter']
        ];

        return view('profile', compact('theme', 'user'));
    }

    public function switchTheme(Request $request, $theme)
    {
        if (in_array($theme, ['light', 'dark'])) {
            session(['theme' => $theme]);
        }
        return back();
    }
}
```
# resources/views/layouts/app.blade.php
```
<!doctype html>
<html lang="id" data-bs-theme="{{ $theme }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel UI Integrated Demo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 4rem;
            transition: all 0.3s ease;
            min-height: 100vh;
        }
        .theme-demo {
            border-radius: 10px;
            padding: 20px;
            margin: 10px 0;
            transition: all 0.3s ease;
        }
        .feature-card {
            transition: transform 0.2s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="{{ $theme === 'dark' ? 'bg-dark text light' : 'bg-light text dark' }}">

    @include('partials.navigation')

    <div class="container mt-4">
        @if(isset($allertMessage) && !empty($allertMessage))
            @include('partials.alert', ['message' => $allertMessage, 'type' => 'info'])
        @endif

        @yield('content')
    </div>

    <x-footer :theme="$theme"/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const themeLinks = document.querySelectorAll('a[href*="switch-theme"]');
            themeLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.location.href = this.href;
                });
            });
        });
    </script>
</body>
</html>

```

# resources/views/partials/navigation.blade.php
```
<nav class="navbar navbar-expand-lg {{ $theme === 'dark' ? 'navbar-dark bg-dark' : 'navbar-light bg-light' }} fixed-top shadow">
    <div class="container">
        <a href="{{ route('home') }}">
            Laravel UI Demo
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'action' : '' }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'action' : '' }}" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('profile') ? 'action' : '' }}" href="{{ route('profile') }}">Profile</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Theme : {{ ucfirst($theme) }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('switch-theme', 'light') }}">Light Mode</a></li>
                        <li><a class="dropdown-item" href="{{ route('switch-theme', 'dark') }}">Dark Mode</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

```

# resources/views/partials/alert.blade.php
```
@if(!empty($message))
    <div class="alert alert-{{ $type ?? 'info' }} alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close"  data-bs-dismiss="alert"></button>
    </div>
@endif

```
# Buat Blade Components
```
php artisan make:component Footer
php artisan make:component FeatureCard
php artisan make:component TeamMember
php artisan make:component ContactForm
```

# resources/views/components/footer.blade.php
```
@props(['theme' => 'light'])
<footer class="mt-5 py-4 border-top {{ ($theme ?? 'light') === 'dark' ? 'border-secondary' : '' }}">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Laravel UI Integrated Demo</h5>
                <p class="mb-0">Demontrasi Partial Views, Blade Components, dan Theme Switching</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0">
                    <strong>Current Theme:</strong>
                    <span class="badge {{ $theme === 'dark' ? 'bg-primary' : 'bg-dark' }}">
                        {{ ucfirst($theme) }}
                    </span>
                </p>
                <p class="mb-0">&copy; 2024 Laravel UI Demo. All right reserved.</p>
            </div>
        </div>
    </div>
</footer>

```
# resources/views/components/feature-card.blade.php
```
@props(['title', 'description', 'icon' => null, 'badge' => null, 'theme' => 'light'])
<div class="card feature-card h-100 {{ ($theme ?? 'light') === 'dark' ? 'bg-secondary text-white' : '' }}">
    <div class="card-body">
        <div class="d-flex align-items-center mb-3">
            <span class="fs-2 me-3">{{ $icon ?? '⭐' }}</span>
            <h5 class="card-title mb-0">{{ $title }}</h5>
        </div>
        <p class="card-text">{{ $description }}</p>
        @if(isset($badge))
            <span class="badge {{ $theme === 'dark' ? 'bg-light text-dark' : 'bg-dark' }}"></span>
        @endif
    </div>
</div>

```
# resources/views/components/team-member.blade.php
```
@props(['name', 'role', 'description', 'avatar' => null, 'theme' => 'light'])
<div class="col-md-4 mb-4">
    <div class="card {{ ($theme ?? 'light') === 'dark' ? 'bg-dark border-light' : '' }} h-100">
        <div class="card-body text-center">
            <div class="mb-3">
                <span class="fs-1">{{ $avatar ?? '👤' }}</span>
            </div>
            <h5 class="card-title">{{ $name }}</h5>
            <p class="card-text text-muted">{{ $role }}</p>
            <p class="card-text">{{ $description }}</p>
        </div>
    </div>
</div>

```
# resources/views/home.blade.php
```
@extends('layouts.app')

@section('title', 'Home - Integrated Demo')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="theme-demo {{ $theme === 'dark' ? 'bg-dark border-light' : 'bg-white border' }} mb-5">
                <h1 class="display-4 mb-4">🚀 Laravel UI Integrated Demo</h1>
                <p class="lead">Demonstrasi lengkap Partial Views, Blade Components, dan Theme Switching dalam satu aplikasi terpadu.</p>

                <div class="row mt-5">
                    <div class="col-md-4 mb-4">
                        <x-feature-card
                            :theme="$theme"
                            title="Partial Views"
                            icon="📁"
                            description="Gunakan @include untuk reusable UI components dengan data sederhana."
                            badge="Latihan 13"
                        />
                    </div>
                    <div class="col-md-4 mb-4">
                        <x-feature-card
                            :theme="$theme"
                            title="Blade Components"
                            icon="🧩"
                            description="Komponen Blade dengan props dan slots untuk Ui yang lebih kompleks."
                            badge="Latihan 14"
                        />
                    </div>
                    <div class="col-md-4 mb-4">
                        <x-feature-card
                            :theme="$theme"
                            title="Theme Switching"
                            icon="🎨"
                            description="Toggle antara light dan dark mode dengan session persistence."
                            badge="Latihan 15"
                        />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                      <div class="card {{ $theme === 'dark' ? 'bg-dark border light' : '' }} mb-4">
                          <div class="card-header">
                              <h5>Fitur Utama</h5>
                          </div>
                          <div class="card-body">
                              <ul class="list-group list-group-flush">
                                  @foreach($features as $feature)
                                      <li class="list-group-item {{ $theme === 'dark' ? 'bg-dark text-light' : '' }}">
                                           - {{ $feature }}
                                      </li>
                                  @endforeach
                              </ul>
                          </div>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="card {{ $theme === 'dark' ? 'bg-dark border light' : '' }}">
                        <div class="card-header">
                            <h5>Teknologi yang Digunakan</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-primary">Laravel 12</span>
                                <span class="badge bg-success">Blade Templates</span>
                                <span class="badge bg-info">Bootstrap 5</span>
                                <span class="badge bg-warning">PHP  8.4</span>
                                <span class="badge bg-danger">Session Management</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

```
# resources/views/about.blade.php
```
@extends('layouts.app')

@section('title', 'About - Partial Views Demo')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="theme-demo {{ $theme === 'dark' ? 'bg-dark border light' : 'bg-white border' }} mb-4">
                <h1 class="mb-4">About - Partial Views</h1>
                <p class="lead">Halaman ini mendemonstrasikan penggunaan <strong>Partial Views</strong> dengan <code>@@include</code> directive.</p>
            </div>

            <h3 class="mb-4">Tim Kami</h3>
            <div class="row">
                @foreach($team as $member)
                    <x-team-member
                        :name="$member['name']"
                        :role="$member['role']"
                        :theme="$theme"
                        :avatar="['👨‍💻','👩‍🎨','👨‍💼'][$loop->index]"
                        :description="'Bergabung sejak 2024 dan berkontribusi dalam pengembangan.'"
                    />
                @endforeach
            </div>

            @include('partials.team-stats', ['theme' => $theme])
        </div>
    </div>
@endsection

```
# resources/views/partials/team-stats.blade.php
```
<div class="card {{ $theme === 'dark' ? 'bg-dark border-light' : '' }} mt-4">
    <div class="card-header">
        <h5>Statistik Tim</h5>
    </div>
    <div class="card-body">
        <div class="row text-center">
            <div class="col-md-3">
                <h3>3</h3>
                <p class="text-muted">Anggota</p>
            </div>
            <div class="col-md-3">
                <h3>12+</h3>
                <p class="text-muted">Proyek</p>
            </div>
            <div class="col-md-3">
                <h3>95%</h3>
                <p class="text-muted">Kepuasan</p>
            </div>
            <div class="col-md-3">
                <h3>2+</h3>
                <p class="text-muted">Tahun</p>
            </div>
        </div>
    </div>
</div>

```
# resources/views/contact.blade.php
```
@extends('layouts.app')

@section('title', 'Contact - Components Demo')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="theme-demo {{ $theme === 'dark' ? 'bg-dark border-light' : 'bg-white border' }} mb-4">
                <h1 class="mb-4">Contact- Blade Components</h1>
                <p class="lead">Halaman ini mendemonstrasikan penggunaan <strong>Blade Components</strong> dengan props dan slots.</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card {{ $theme === 'dark' ? 'bg-dark border-light' : '' }} h-100">
                        <div class="card-header">
                            <h5>Informasi Kontak</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Email:</strong> aauliafahlefi@gmail.com</p>
                            <p><strong>Telepon:</strong> +62 853 2162 5936</p>
                            <p><strong>Alamat:</strong> Aceh, Indonesia</p>

                            <h6 class="mt-4">Department Tersedia:</h6>
                            <ul>
                                @foreach($departments as $dept)
                                    <li>{{ $dept }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

```
# resources/views/components/contact-form.blade.php
```
<div class="card {{ $theme === 'dark' ? 'bg-dark border-light' : '' }} h-100">
    <div class="card-header">
        <h5>Form Kontak</h5>
    </div>
    <div class="card-body">
        <form>
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control {{  $theme === 'dark' ? 'bg-dark text-light border-light' : '' }}" placeholder="Masukkan nama Anda">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control {{ $theme  === 'dark' ? 'bg-dark text-light border-light' : '' }}" placeholder="nama@example.com">
            </div>

            <div class="mb-3">
                <label class="form-label">Department</label>
                <select class="form-select {{ $theme === 'dark' ? 'bg-dark text-light border-light' : '' }}">
                    <option selected>Pilih department...</option>
                    @foreach($departments as $dept)
                        <option value="{{ $dept }}">{{ $dept }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Pesan</label>
                <textarea class="form-control {{ $theme === 'dark' ? 'bg-dark text-light border-light' : '' }}" rows="4" placeholder="Tulis Pesan Anda..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
    </div>
</div>

```
# resources/views/profile.blade.php
```
@extends('layouts.app')

@section('title', 'Profile - Theme Demo')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="theme-demo {{ $theme === 'dark' ? 'bg-dark border-light' : 'bg-white border' }} mb-4">
                <h1 class="mb-4">Profile - Theme Demo</h1>
                <p class="lead">Halaman ini menunjukkan implementasi <strong>Theme Switching</strong> dengan session persistence.</p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card {{  $theme === 'dark' ? 'bg-dark border-light' : '' }} text-center">
                        <div class="card-body">
                            <div class="mb-3">
                                <span class="fs-1">👤</span>
                            </div>
                            <h4>{{ $user['name'] }}</h4>
                            <p class="text-muted">{{ $user['email'] }}</p>
                            <p class="text-muted">Bergabung: {{ date('d M Y', strtotime($user['join-date'])) }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card {{ $theme === 'dark' ? 'bg-dark border-light' : '' }}">
                        <div class="card-header">
                            <h5>Preferensi Pengguna</h5>
                        </div>
                        <div class="card-body">
                            <h6>Theme Saat Ini:</h6>
                            <div class="alert alert-{{ $theme === 'dark' ? 'dark' : 'info' }} d-flex align-items-center">
                                <span class="me-2 fs-4">{{ $theme === 'dark' ? '🌙' : '☀️' }}</span>
                                <div>
                                    <strong>Mode {{ ucfirst($theme) }}</strong>
                                    @if($theme === 'dark')
                                        Nyaman di malam hari dan menguarangi ketegangan mata.
                                    @else
                                        Cerah dan jelas, cocok untuk siang hari.
                                    @endif
                                </div>
                            </div>

                            <h6 class="mt-4">Preferensi Lainnya:</h6>
                            <div class="d-flex flex-wrap gap-2">
                                @foreach($user['preferences'] as $pref)
                                    <span class="badge bg-secondary">{{ $pref }}</span>
                                @endforeach
                            </div>

                            <div class="mt-4">
                                <h6>Ubah Tema:</h6>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('switch-theme', 'light') }}"
                                    class="btn btn-{{ $theme === 'light' ? 'primary' : 'outline-primary' }}">
                                        Light Mode
                                    </a>
                                    <a href="{{ route('switch-theme', 'dark') }}"
                                    class="btn btn-{{ $theme === 'dark' ? 'primary' : 'outline-primary' }}">
                                        Dark Mode
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

















```
