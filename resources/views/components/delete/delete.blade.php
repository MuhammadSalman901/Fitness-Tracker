@props(['item', 'route', 'message' => 'Do you want to delete this item?'])

<div x-data="{ open: false }" class="inline-block">
    <!-- Trigger Button -->
    <button
        @click="open = true; $event.stopPropagation()"
        type="button"
        class="px-4 py-2 bg-red-500/20 text-red-300 rounded-md hover:bg-red-500/30 transition-colors">
        Delete
    </button>

    <!-- Dialog -->
    <div
        x-show="open"
        @click.away="open = false"
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4"
        style="display: none;" 
        >
        <div class="bg-gray-800/50 rounded-xl p-8 border border-gray-700 backdrop-blur-sm max-w-sm w-full">
            <!-- Modal Header -->
            <h3 class="text-2xl font-bold bg-gradient-to-r from-emerald-400 to-cyan-300 bg-clip-text text-transparent">
                Confirm Delete
            </h3>

            <!-- Modal Body -->
            <p class="text-gray-400 mt-4">{{ $message }}</p>

            <!-- Modal Footer -->
            <div class="flex justify-end space-x-4 mt-6">
                <!-- Cancel Button -->
                <button
                    @click="open = false"
                    class="px-4 py-2 bg-gray-700/30 text-gray-400 rounded-md hover:bg-gray-700/50 transition-colors">
                    Cancel
                </button>

                <!-- Delete Button -->
                <form method="POST" action="{{ route($route, $item->id) }}">
                    @csrf
                    @method('DELETE')
                    <button
                        type="submit"
                        class="px-4 py-2 bg-red-500/20 text-red-300 rounded-md hover:bg-red-500/30 transition-colors">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>