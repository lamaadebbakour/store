@props(['active' => false])

@php
    $classes = 'block text-left px-3 text-sm leading-6 hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-black';

    if ($active) $classes .= ' bg-blue-500 text-white ';
@endphp

<a style="color:#000000;" {{
    $attributes(['class' => $classes])
    }}
>
<br>
{{--    <a ></a>--}}
    {{ $slot }}
</a>
