<nav class="flex flex-col bg-gray-100 px-8 w-1/5">
    <a href="{{ route('index') }}" class="mt-4">
        <img
            src="{{ asset('/img/logo-blauw-800x.png') }}"
            alt="Logo Deinte"
        >
    </a>

    <x-navigation.link
        :route="route('posts.index')"
        label="Posts"
    />
</nav>
