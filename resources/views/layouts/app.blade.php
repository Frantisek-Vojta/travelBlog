<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TravelBlog')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .prose {
            max-width: none;
        }
        .prose p {
            margin-bottom: 1rem;
        }
        .prose img {
            border-radius: 0.5rem;
        }
    </style>
</head>
<body class="bg-gray-50">

<header class="bg-green-600 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-bold hover:text-green-200 transition-colors">
                TravelBlog
            </a>

            <div class="flex items-center space-x-4 text-sm">
                @auth
                    <span class="hidden sm:inline">Ahoj, {{ auth()->user()->name }}</span>
                    @if(auth()->user()->isAdmin())
                        <a href="{{ route('admin.dashboard') }}" class="bg-green-700 px-3 py-1 rounded hover:bg-green-800 transition-colors">
                            Admin
                        </a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="hover:text-green-200 transition-colors">
                            Odhlásit se
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="hover:text-green-200 transition-colors">
                        Přihlásit se
                    </a>
                @endauth
            </div>
        </div>
    </div>
</header>

@if(session('success'))
    <div class="max-w-7xl mx-auto px-4 mt-4">
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-sm">
            {{ session('success') }}
        </div>
    </div>
@endif

@if($errors->any())
    <div class="max-w-7xl mx-auto px-4 mt-4">
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg shadow-sm">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    </div>
@endif

<main class="min-h-screen">
    @yield('content')
</main>
</body>
</html>
