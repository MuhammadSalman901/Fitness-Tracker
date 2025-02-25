<header class="bg-gray-800 font-sm font-bold bg-center fixed top-0 left-0 right-0 z-50 border-b border-gray-700">
    <div class="flex justify-between items-center px-10 py-3 bg-gray-900/90 backdrop-blur-sm">
        <div class="flex items-center">
            <h1 class="text-3xl uppercase bg-gradient-to-r from-emerald-500 to-cyan-400 bg-clip-text text-transparent">Gnome</h1>
        </div>
        <div class="flex gap-x-3">
            @guest
            <a class="px-5 py-2 text-sm text-cyan-400 rounded-lg border border-cyan-400/20 hover:border-cyan-400 hover:bg-cyan-400/10 transition-colors duration-300" href="{{ route('register') }}">Register</a>
            <a class="px-5 py-2 text-sm text-emerald-400 rounded-lg border border-emerald-400/20 hover:border-emerald-400 hover:bg-emerald-400/10 transition-colors duration-300" href="{{ route('login') }}">Login</a>
            @endguest
            @auth
            <a class="px-5 py-2 text-sm text-gray-300 rounded-lg border border-gray-600 hover:border-emerald-500 hover:bg-emerald-500/10 transition-colors duration-300 cursor-pointer" href="{{ route('profile') }}">{{ auth()->user()->name }}</a>
            @endauth
        </div>
    </div>
</header>