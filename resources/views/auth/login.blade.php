@extends('layouts.auth')
@section('title', 'Login')


@section('form')
    <x-auth-form submit="LOGIN" action="{{ route('auth.login') }}">
        <input type="email" name="email" id="email" placeholder="User Email">
        <input type="password" name="password" id="password" placeholder="User Password">
    </x-auth-form>
@endsection

@section('links')
    <a href="{{ route('register') }}">Register</a>
@endsection
