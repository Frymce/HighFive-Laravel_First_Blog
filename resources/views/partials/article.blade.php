<article>
    <p>Auteur : <strong>{{ $article['user']['name'] }}</strong></p>

    {{-- <a href="/article/{{ $article['title']}}">Voir plus</a> --}}
    <a href="/article/{{ $article['id']}}">Voir plus</a>

    <p style="text-decoration: underline;">{{ $article['title']}}</p>

    <p>{{ $article['body'] }}</p>

</article>
