@props([
    'type' => 'text',
    'name' => '',
    'id' => '',
    'class' => '',
    'x' => 1,
])

@if ($x > 0)
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}">
@endif
