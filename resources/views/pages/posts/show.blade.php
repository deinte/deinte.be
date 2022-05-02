<x-layout>

    <div>{{ $post->title }}</div>

    <div class="prose">
        {!! $post->text_as_html !!}
    </div>
</x-layout>
