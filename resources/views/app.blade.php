@extends('layouts.main')

@section('content')
    <h1>Hello From Layout</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus non aspernatur reiciendis inventore ea natus consequuntur commodi, quae porro, corrupti aperiam corporis veritatis earum. Vel, eum voluptas? Similique porro nihil placeat iusto voluptatem, eius unde earum in perspiciatis labore magni cumque a dolor maxime explicabo sit cum ex dicta! Eaque?</p>
    {{-- <x-ui.btn /> --}}
    <x-ui.btn>Click Me</x-ui.btn>
    <x-ui.btn lol="lhjsdflkjlsdk">Thank You</x-ui.btn>
    <form action="">

        <x-ui.input x='1' type='password' name='test_input' id="test_input" />
    </form>
@endsection
