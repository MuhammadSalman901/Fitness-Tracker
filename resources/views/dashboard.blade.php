<x-layout>
    @guest
    <x-header.section-heading>Welcome to Gnome</x-header.section-heading>
    @endguest
    @auth
    <x-header.section-heading>Welcome back, {{ auth()->user()->name }}</x-header.section-heading>
    <div class="mt-10 flex justify-center items-center">
        <blockquote>
            <p>"Champions keep playing until they get it right."</p>
            <footer>—Billie Jean King</footer>
        </blockquote>
    </div>
    @endauth
</x-layout>