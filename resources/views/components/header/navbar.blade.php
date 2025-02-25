<!-- component -->
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

<div class="min-h-screen flex flex-col w-64 bg-gray-800 border-r border-gray-700">
    <ul class="flex flex-col py-4 space-y-5 px-4">
        <li>
            <a href="{{ route('dashboard') }}"
                class="flex items-center gap-x-3 px-3 py-3 rounded-lg text-gray-400 hover:bg-gray-700/50 hover:text-cyan-400 transition-all duration-200">
                <i class="bx bx-home text-2xl text-cyan-400"></i>
                <span class="font-medium">Dashboard</span>
            </a>
        </li>
        @auth
        <li>
            <a href="{{ route('workout') }}"
                class="flex items-center gap-x-3 px-3 py-3 rounded-lg text-gray-400 hover:bg-gray-700/50 hover:text-emerald-400 transition-all duration-200">
                <i class="bx bx-run text-2xl text-emerald-400"></i>
                <span class="font-medium">Workouts</span>
            </a>
        </li>
        <li>
            <a href="{{ route('profile') }}"
                class="flex items-center gap-x-3 px-3 py-3 rounded-lg text-gray-400 hover:bg-gray-700/50 hover:text-cyan-400 transition-all duration-200">
                <i class="bx bx-user text-2xl text-cyan-400"></i>
                <span class="font-medium">Profile</span>
            </a>
        </li>
        <form method="post" action="{{ route('logout') }}" class="mt-auto">
            @csrf
            <button type="submit"
                class="w-full flex items-center gap-x-3 px-3 py-3 rounded-lg text-gray-400 hover:bg-gray-700/50 hover:text-red-400 transition-all duration-200">
                <i class="bx bx-log-out text-2xl text-red-400"></i>
                <span class="font-medium">Logout</span>
            </button>
        </form>
        @endauth
    </ul>
</div>