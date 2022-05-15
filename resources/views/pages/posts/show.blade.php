<x-layout>
    <div class="p-4">
        <h2 class="text-xl font-bold text-sky-700">{{ $post->title }}</h2>

        <div class="prose">
            {!! $post->text_as_html !!}
        </div>
    </div>
</x-layout>
