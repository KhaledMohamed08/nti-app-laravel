@props([
    'submit' => 'SUBMIT',
    'action' => '',
    'method' => 'POST',
])


<form action="{{ $action }}" method="{{ $method }}">
    @csrf
    {{ $slot }}
    <button class="opacity">{{ $submit }}</button>
</form>


{{-- <input type="text" placeholder="USERNAME" />
    <input type="password" placeholder="PASSWORD" />
    <button class="opacity">SUBMIT</button> --}}
