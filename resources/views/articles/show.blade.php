<h2>Liste des commentaires</h2>
@if (count($article->comments) != 0)
    @foreach ($article->comments as $comment)
        <p><strong>{{ $comment->user->name }}</strong> a réagi :</p>
        <p>{{ $comment->comment }}</p>
        <p><small>{{ $comment->created_at->diffForHumans() }}</small></p>
        <div>
            <a href="/article/{{ $article->id }}/edit">Editer l'article</a>
            @include('partials.delete')
        </div>
    @endforeach
@else
    <p>Cet article ne dispose pas de commentaires</p>
    <a href="/article/{{ $article->id }}/edit">Editer l'article</a>
    @include('partials.delete')
@endif
