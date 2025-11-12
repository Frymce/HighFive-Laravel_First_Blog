<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
</head>

<body>
    <h1>Laravel 12</h1>
    <a href="/contact-us">Contactez-nous</a><strong style="padding: 5px">|</strong>
    <a href="/about-us">About</a><strong style="padding: 5px">|</strong>
    <a href="/articles">Articles</a><strong style="padding: 5px">|</strong>

    @auth
        <a href="/articles/create">Creer un articles</a><strong style="padding: 5px">|</strong>
    @endauth

    @guest
        <a href="{{ route('login') }}">Login</a><strong style="padding: 5px">|</strong>
        <a href="{{ route('register') }}">Register</a><strong style="padding: 5px">|</strong>
    @endguest


    @auth
        <a href="{{ route('profile') }}">Votre profil</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <input type="submit" value="Se déconnecter">
        </form>
    @endauth
    
    @yield('content')
    @include('messages.allMessage')

    <br>

    <strong>Un jour viendra nous quitterons la terre, un jour viendra tout le monde <span
            style="color: red;">moura</span> , nous irons tous devant <span
            style="color: blue; text-decoration: underline;">Dieu</span> pour être juger et chacun sera payer selon ses
        oeuvres</strong>
    <h2>Dans le vie il faut pas <span style="color: red;">Bien vivre</span> mais <span style="color: green;">Vivre
            bien</span></h2>
</body>

</html>
