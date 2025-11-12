@extends('layouts.master')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div style="margin: 15px;">
            <label for="email">Email : </label>
            <input type="email" name="email" id="email">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div style="margin: 15px;">
            <label for="password">Mot de passe : </label>
            <input type="password" name="password" id="password">
            @error('password')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" style="margin: 15px; padding:10px;">Se connecter</button>
    </form>
@endsection
