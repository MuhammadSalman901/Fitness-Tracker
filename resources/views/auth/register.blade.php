<x-layout>
    <div class="flex flex-col items-center justify-center min-h-[80vh] -mt-16">
        <x-header.section-heading class="mt-[10vh]">
            <h1 class="text-3xl font-bold bg-gradient-to-r from-emerald-400 to-cyan-300 bg-clip-text text-transparent">
                Register
            </h1>
        </x-header.section-heading>

        <div class="w-full max-w-md bg-gray-800/50 mt-5 rounded-lg shadow-xl border border-gray-700 hover:border-emerald-500/30 transition-colors duration-300 backdrop-blur-sm">
            <form method="post" action="/register" class="p-8" enctype="multipart/form-data">
                @csrf
                <div class="space-y-6">
                    <x-form.form-feild>
                        <x-form.form-label for="name" class="block text-sm font-medium text-gray-200 mb-2">
                            Name
                        </x-form.form-label>
                        <div class="mt-2">
                            <x-form.form-input
                                name="name"
                                id="name"
                                type="text"
                                placeholder="Jane Doe"
                                :value="old('name')"
                                class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" />
                            <x-form.form-error name="name" class="text-red-500 text-sm mt-1" />
                        </div>
                    </x-form.form-feild>

                    <x-form.form-feild>
                        <x-form.form-label for="email" class="block text-sm font-medium text-gray-200 mb-2">
                            Email
                        </x-form.form-label>
                        <div class="mt-2">
                            <x-form.form-input
                                name="email"
                                id="email"
                                type="email"
                                placeholder="JaneDoe@xyz.com"
                                :value="old('email')"
                                class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" />
                            <x-form.form-error name="email" class="text-red-500 text-sm mt-1" />
                        </div>
                    </x-form.form-feild>

                    <x-form.form-feild>
                        <x-form.form-label for="password" class="block text-sm font-medium text-gray-200 mb-2">
                            Password
                        </x-form.form-label>
                        <div class="mt-2">
                            <x-form.form-input
                                name="password"
                                id="password"
                                type="password"
                                placeholder="Password"
                                class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" />
                            <x-form.form-error name="password" class="text-red-500 text-sm mt-1" />
                        </div>
                    </x-form.form-feild>

                    <x-form.form-feild>
                        <x-form.form-label for="Bio" class="block text-sm font-medium text-gray-200 mb-2">
                            Bio
                        </x-form.form-label>
                        <div class="mt-2">
                            <x-form.form-input
                                name="Bio"
                                id="Bio"
                                placeholder="Tell us about yourself"
                                class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" />
                            <x-form.form-error name="Bio" class="text-red-500 text-sm mt-1" />
                        </div>
                    </x-form.form-feild>

                    <x-form.form-feild>
                        <x-form.form-label for="image_path" class="block text-sm font-medium text-gray-200 mb-2">
                            Profile Image
                        </x-form.form-label>
                        <div class="mt-2">
                            <div class="flex items-center gap-4">
                                <x-form.form-input
                                    type="file"
                                    name="image_path"
                                    id="image_path"
                                    class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 text-white file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-gradient-to-r file:from-emerald-500 file:to-cyan-400 file:text-white hover:file:from-emerald-600 hover:file:to-cyan-500 transition-colors duration-300" />
                            </div>
                            <x-form.form-error name="image_path" class="text-red-500 text-sm mt-1" />
                        </div>
                    </x-form.form-feild>
                </div>

                <div class="mt-8 flex justify-end space-x-4">
                    <button
                        type="button"
                        class="px-4 py-2 rounded-md text-gray-200 hover:bg-red-500 hover:text-white transition-colors duration-300"
                        onclick="window.location='/'">
                        Cancel
                    </button>
                    <x-form.form-button
                        class="px-4 py-2 bg-gradient-to-r from-emerald-500 to-cyan-400 text-white rounded-md hover:from-emerald-600 hover:to-cyan-500 transition-colors duration-300">
                        Register
                    </x-form.form-button>
                </div>
            </form>
        </div>
    </div>
</x-layout>