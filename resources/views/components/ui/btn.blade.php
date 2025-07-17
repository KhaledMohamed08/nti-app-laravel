@props([
    'class' => ''
])

<button class="{{ $class }}">{{ $slot }}</button>
