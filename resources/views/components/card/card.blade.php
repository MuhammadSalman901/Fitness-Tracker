@props(['workout'])

<div class="bg-gray-800/50 rounded-xl p-6 border border-gray-700 hover:border-emerald-500/30 transition-colors duration-300 backdrop-blur-sm">
    <div class="flex justify-between items-start">
        <div>
            <h3 class="text-xl font-semibold bg-gradient-to-r from-emerald-400 to-cyan-300 bg-clip-text text-transparent">
                {{ $workout->workout_name }}
            </h3>
            <p class="text-gray-400 mt-2">{{ $workout->workout_type }}</p>
        </div>
        <span class="text-sm text-cyan-300">{{ $workout->workout_date }}</span>
    </div>

    <div class="mt-4 flex justify-end space-x-3">
        <a href="{{ route('workout.show', $workout) }}"
            class="px-3 py-1.5 text-sm bg-emerald-500/20 text-emerald-300 rounded-md hover:bg-emerald-500/30 transition-colors">
            View Details
        </a>
    </div>
</div>