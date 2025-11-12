@extends('layouts.master')

@section('content')
    <form action="{{ route('save') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nom : </label>
            <input type="text" name="name" id="name">
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email : </label>
            <input type="email" name="email" id="email">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password">Mot de passe : </label>
            <input type="password" name="password" id="password">
            @error('password')
                <div>{{ $message }}</div>
            @enderror

        </div>

        <div>
            <label for="password_confirmation">Confirmation du mot de passe</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
            @error('password_confirmation')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Enregistrer</button>
    </form>
@endsection
