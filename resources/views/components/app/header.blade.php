<header class="w-full bg-gray-100">
    <div class="ui-center flex-between">
        <a href="{{ route('home') }}" aria-label="Home">
            <h1 class="py-2 text-2xl">{{ config('app.name', 'Company Name') }}</h1>
        </a>
        @guest
            <div>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Anmelden</a>
            </div>
        @endguest
    </div>
</header>
