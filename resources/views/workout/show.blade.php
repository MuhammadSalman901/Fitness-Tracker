<x-layout>
    <x-header.section-heading class="mt-[15vh]">
        Workout Details
    </x-header.section-heading>

    <div class="container mx-auto px-4 mt-10">
        <div class="bg-gray-800/50 rounded-xl p-8 border border-gray-700 backdrop-blur-sm">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h2 class="text-2xl font-bold bg-gradient-to-r from-emerald-400 to-cyan-300 bg-clip-text text-transparent">
                        {{ $workout->workout_name }}
                    </h2>
                    <p class="text-gray-400 mt-4">{{ $workout->workout_description }}</p>
                </div>

                <div class="space-y-4">
                    <div class="flex justify-between items-center p-4 bg-gray-700/30 rounded-lg">
                        <span class="text-gray-400">Type:</span>
                        <span class="text-emerald-400">{{ ucfirst($workout->workout_type) }}</span>
                    </div>
                    <div class="flex justify-between items-center p-4 bg-gray-700/30 rounded-lg">
                        <span class="text-gray-400">Duration:</span>
                        <span class="text-emerald-400">{{ ucfirst($workout->workout_duration) }}</span>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-end space-x-4">
                <a href="{{ route('workout', $workout) }}"
                    class="px-4 py-2 bg-emerald-500/20 text-emerald-300 rounded-md hover:bg-emerald-500/30 transition-colors">
                    Back
                </a>
                <form action="{{ route('workout.destroy', $workout) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="px-4 py-2 bg-red-500/20 text-red-300 rounded-md hover:bg-red-500/30 transition-colors">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>