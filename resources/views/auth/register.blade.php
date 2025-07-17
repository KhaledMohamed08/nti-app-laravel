@extends('layouts.auth')
@section('title', 'Register')

{{-- @section('title')
    Register
@endsection --}}

@section('form')
    <x-auth-form submit="REGISTER" action="{{ route('auth.register') }}">
        <input type="text" name="name" id="name" placeholder="User Name">
        @error('name')
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <input type="email" name="email" id="email" placeholder="User Email">
        @error('email')
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <input type="password" name="password" id="password" placeholder="User Password">
        @error('password')
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
    </x-auth-form>
@endsection

@section('links')
    <a href="{{ route('login') }}">Login</a>
@endsection
