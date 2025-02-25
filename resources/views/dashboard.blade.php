<x-layout>
    @guest
    <x-header.section-heading>Welcome to Gnome</x-header.section-heading>
    @endguest
    @auth
    <x-header.section-heading>Welcome back, {{ auth()->user()->name }}</x-header.section-heading>
    @endauth
</x-layout>
