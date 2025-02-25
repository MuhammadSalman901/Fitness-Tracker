<x-layout>
    <div class="flex flex-col items-center justify-center min-h-[80vh] -mt-16">
        <x-header.section-heading class="mt-[10vh]">
            <h1 class="text-3xl font-bold bg-gradient-to-r from-emerald-400 to-cyan-300 bg-clip-text text-transparent">
                Create Workout
            </h1>
        </x-header.section-heading>

        <div class="w-full max-w-md bg-gray-800/50 mt-5 rounded-lg shadow-xl border border-gray-700 hover:border-emerald-500/30 transition-colors duration-300 backdrop-blur-sm">
            <form method="POST" action="{{ route('workout.store') }}" class="p-8">
                @csrf
                <div class="space-y-6">
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                    <x-form.form-feild>
                        <x-form.form-label for="workout_name" class="block text-sm font-medium text-gray-200 mb-2">
                            Workout Name
                        </x-form.form-label>
                        <div class="mt-2">
                            <x-form.form-input
                                name="workout_name"
                                id="workout_name"
                                type="text"
                                placeholder="Morning Routine"
                                :value="old('workout_name')"
                                class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" />
                            <x-form.form-error name="workout_name" class="text-red-500 text-sm mt-1" />
                        </div>
                    </x-form.form-feild>

                    <x-form.form-feild>
                        <x-form.form-label for="workout_type" class="block text-sm font-medium text-gray-200 mb-2">
                            Workout Type
                        </x-form.form-label>
                        <div class="mt-2">
                            <x-form.form-input
                                name="workout_type"
                                id="workout_type"
                                type="text"
                                placeholder="Strength Training"
                                :value="old('workout_type')"
                                class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" />
                            <x-form.form-error name="workout_type" class="text-red-500 text-sm mt-1" />
                        </div>
                    </x-form.form-feild>

                    <x-form.form-feild>
                        <x-form.form-label for="workout_duration" class="block text-sm font-medium text-gray-200 mb-2">
                            Workout Duration
                        </x-form.form-label>
                        <div class="mt-2">
                            <x-form.form-input
                                name="workout_duration"
                                id="workout_duration"
                                type="integer"
                                placeholder="Only minutes are allowed"
                                :value="old('workout_duration')"
                                class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" />
                            <x-form.form-error name="workout_duration" class="text-red-500 text-sm mt-1" />
                        </div>
                    </x-form.form-feild>

                    <x-form.form-feild>
                        <x-form.form-label for="workout_description" class="block text-sm font-medium text-gray-200 mb-2">
                            Workout Description
                        </x-form.form-label>
                        <div class="mt-2">
                            <x-form.form-input
                                name="workout_description"
                                id="workout_description"
                                type="textarea"
                                placeholder="Describe your workout"
                                :value="old('workout_description')"
                                class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" />
                            <x-form.form-error name="workout_description" class="text-red-500 text-sm mt-1" />
                        </div>
                    </x-form.form-feild>

                    <x-form.form-feild>
                        <x-form.form-label for="workout_date" class="block text-sm font-medium text-gray-200 mb-2">
                            Workout Date
                        </x-form.form-label>
                        <div class="mt-2">
                            <x-form.form-input
                                name="workout_date"
                                id="workout_date"
                                type="date"
                                :value="old('workout_date')"
                                class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" />
                            <x-form.form-error name="workout_date" class="text-red-500 text-sm mt-1" />
                        </div>
                    </x-form.form-feild>

                </div>

                <div class="mt-8 flex justify-end space-x-4">
                    <button type="button" onclick="window.location='/workout';"
                        class="px-4 py-2 rounded-md text-gray-200 hover:bg-red-500 hover:text-white transition-colors duration-300">
                        Cancel
                    </button>
                    <x-form.form-button
                        class="px-4 py-2 bg-gradient-to-r from-emerald-500 to-cyan-400 text-white rounded-md hover:from-emerald-600 hover:to-cyan-500 transition-colors duration-300">
                        Create Workout
                    </x-form.form-button>
                </div>
            </form>
        </div>
    </div>
</x-layout>