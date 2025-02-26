<x-layout>
    <x-header.section-heading class="mt-[12vh]">
        Workouts
    </x-header.section-heading>

    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-semibold mt-8">Workouts</h1>
            <a href="{{ route('workout.create') }}"
                class="mt-8 bg-gradient-to-r from-emerald-500 to-cyan-400 text-white font-bold py-2 px-4 rounded hover:from-emerald-600 hover:to-cyan-500 transition-colors">
                Create Workout
            </a>
        </div>

        <!-- Workout Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            @forelse($workouts as $workout)
            <x-card :workout="$workout" />
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-400">No workouts found. Create your first workout!</p>
            </div>
            @endforelse
        </div>

        <!-- Pagination Links -->
        <div class="mt-8 mb-10">
            {{ $workouts->links() }}
        </div>
    </div>
</x-layout>