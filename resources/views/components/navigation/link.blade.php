@props(['route', 'label'])

<a
    @class([
        'transition-all block font-semibold border-b border-gray-700 text-gray-700 hover:text-gray-500'
    ])
    href="{{ $route }}"
>{{ $label }}</a>