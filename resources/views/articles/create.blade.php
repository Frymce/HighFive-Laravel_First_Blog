    <h1>Formulaire d'article</h1>
    <form action="/articles/create" enctype="multipart/form-data" method="POST">
        @csrf
        @include('partials.article-form')
    </form>

