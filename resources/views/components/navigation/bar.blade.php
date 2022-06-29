<nav
    class="flex flex-col bg-gray-100 px-8 w-1/5"

>
    <a href="{{ route('index') }}" class="mt-4">
        <img
            src="{{ asset('/img/logo-blauw-800x.png') }}"
            alt="Logo Deinte"
        >
    </a>

    <div class="flex flex-col justify-center items-center text-center space-y-4 py-4">

        <x-navigation.link
            :route="route('index')"
            label="Home"
        />

        <x-navigation.link
            :route="route('posts.index')"
            label="Posts"
        />

        <x-navigation.link
            :route="route('posts.index')"
            label="Posts"
        />

    </div>
</nav>
