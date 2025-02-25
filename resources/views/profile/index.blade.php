<x-layout>
    <x-header.section-heading class="mt-[7vh]">Profile</x-header.section-heading>

    <div class="mt-10 flex items-center p-8 rounded-xl border border-gray-700 bg-gray-800/50 hover:border-emerald-500/30 transition-colors duration-300 group backdrop-blur-sm">
        <div class="h-64 flex gap-x-16">
            <!-- Profile Image with Gradient Border -->
            <div class="relative h-[250px] w-[250px]">
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-500 to-cyan-400 rounded-full p-1">
                    <img class="rounded-full h-full w-full border-4 border-gray-800"
                        src="{{ asset('storage/' . Auth::user()->profile['image_path']) }}"
                        alt="Profile picture">
                </div>
            </div>

            <!-- Vertical Divider -->
            <div class="border-r border-gray-600 h-full"></div>
        </div>

        <!-- Profile Details -->
        <div class="px-10 space-y-6">
            <!-- Name -->
            <div class="pb-4 border-b border-gray-700">
                <h1 class="text-3xl font-bold bg-gradient-to-r from-emerald-400 to-cyan-300 bg-clip-text text-transparent">
                    {{ Auth::user()->name }}
                </h1>
            </div>

            <!-- Completed Workouts -->
            <div class="space-y-2">
                <h3 class="text-lg font-semibold text-cyan-400">Fitness Enthusiast • {{ Auth::user()->workouts()->count() }} Sessions Completed</h3>
            </div>

            <!-- Membership & Streak -->
            <div class="flex gap-x-32">
                <!-- Skills -->
                <div class="space-y-2">
                    <h3 class="text-lg font-semibold text-emerald-400">Member Since:</h3>
                    <p class="text-2xl font-bold text-cyan-300">
                        {{ Auth::user()->profile->created_at->format('Y') }}
                    </p>
                </div>

                <!-- Streak -->
                <div class="space-y-2">
                    <h3 class="text-lg font-semibold text-emerald-400">Streak:</h3>
                    <p class="text-2xl font-bold text-cyan-300">
                        {{ Auth::user()->workouts->count() }}<span class="text-sm font-normal text-gray-400"> days streak</span>
                    </p>
                </div>
            </div>

            <!-- Total Duration -->
            <div class="space-y-2">
                <h3 class="text-lg font-semibold text-emerald-400">Total Duration:</h3>
                <p class="text-2xl font-bold text-cyan-300">
                    {{ Auth::user()->workouts->sum('workout_duration') }}<span class="text-sm font-normal text-gray-400"> minutes</span>
                </p>
            </div>

            <!-- Bio -->
            <div class="space-y-2">
                <h3 class="text-lg font-semibold text-emerald-400">Bio:</h3>
                <p class="text-gray-300 leading-tight">
                    {{ Auth::user()->profile->Bio }}
                </p>
            </div>
        </div>
    </div>
</x-layout>