<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk — Event Sekolah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>body { font-family: 'Poppins', sans-serif; }</style>
</head>
<body
    class="min-h-screen flex flex-col items-center justify-center px-4"
    style="
        background-color:hsla(19,23%,94%,1);
        background-image:
        radial-gradient(at 36% 16%, hsla(16,98%,62%,0.16) 0px, transparent 50%),
        radial-gradient(at 80% 100%, hsla(16,98%,62%,0.17) 0px, transparent 50%),
        radial-gradient(at 0% 0%, hsla(16,98%,62%,0.35) 0px, transparent 50%);
    "
>
    <a href="{{ route('welcome') }}" class="text-gray-800 text-2xl font-extrabold mb-6">
        Event Sekolah<span class="text-orange-400">.</span>
    </a>

    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-gray-800 text-xl font-bold mb-1">Login User</h1>

        @if (session('status'))
            <div class="mb-4 rounded-lg bg-green-100 p-4 text-sm text-green-700">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 rounded-lg bg-red-200 p-4 text-sm text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-800 font-medium mb-1">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="border-2 border-sky-900 text-gray-800 rounded-md w-full p-2" placeholder="nama@email.com" required autofocus>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-800 font-medium mb-1">Password</label>
                <input type="password" name="password" id="password" class="border-2 border-sky-900 text-gray-800 rounded-md w-full p-2" placeholder="Masukkan Password" required>
            </div>

            <button type="submit" class="w-full bg-orange-400 text-white rounded-md py-2 font-bold hover:bg-orange-400/80 transition-colors duration-300">
                Masuk
            </button>
        </form>

        @if (Route::has('register'))
            <p class="text-center text-sm text-gray-500 mt-6">
                Belum punya akun?
                <a href="{{ route('register') }}" class="text-orange-400 font-bold hover:underline">Daftar</a>
            </p>
        @endif
    </div>
</body>
</html>