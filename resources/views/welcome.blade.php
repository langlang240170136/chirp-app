<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper - Home</title>

    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" />

   {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body class="min-h-screen flex flex-col bg-base-200 font-sans">

<!-- NAVBAR -->
<nav class="navbar bg-base-100 shadow">
    <div class="navbar-start">
        <a href="/" class="btn btn-ghost text-xl">🌸 Chirper</a>
    </div>

    <div class="navbar-end gap-2">
        <a href="#" class="btn btn-ghost btn-sm">Sign In</a>
        <a href="#" class="btn btn-primary btn-sm">Sign Up</a>
    </div>
</nav>

<!-- MAIN -->
<main class="flex-1 container mx-auto px-4 py-8">

    <!-- HEADER (SUDAH DISESUAIKAN DENGAN GAMBAR) -->
    <div class="max-w-2xl mx-auto">
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <h1 class="text-3xl font-bold">Welcome to Chirper!</h1>
                <p>This is your brand new Laravel app. Time to make it sing (or chirp)!</p>
                <p class="mt-2 text-sm text-gray-600">Now this is live on the internet! 🎉</p>
            </div>
        </div>
    </div>

    <!-- CHIRP LIST -->
    <div class="max-w-2xl mx-auto space-y-4 mt-6">

        @forelse ($chirps as $chirp)
            <div class="card bg-base-100 shadow hover:shadow-lg transition">
                <div class="card-body">
                    
                    <div class="flex justify-between items-center mb-2">
                        <span class="badge badge-primary">Chirp</span>
                        <span class="text-xs text-gray-400">Baru saja</span>
                    </div>

                    <p class="text-lg">{{ $chirp }}</p>

                </div>
            </div>
        @empty
            <div class="alert alert-info">
                Belum ada chirp 😢
            </div>
        @endforelse

    </div>

</main>

<!-- FOOTER -->
<footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
    <div>
        <p>© 2026 Chirper - Built with Laravel and ❤️</p>
    </div>
</footer>

</body>
</html>