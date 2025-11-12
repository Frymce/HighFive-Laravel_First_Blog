{{-- <p>Créer un article</p>
<p><strong>Titre :</strong></p>
<input type="text" name="title" placeholder="Titre de l'article" value="{{old('title')}}">

<p><strong>Body :</strong></p>
<textarea id="" cols="30" rows="10" name="body" placeholder="Contenu de l'article">{{old('body'), isset($article->body) ? $article->body : null}}</textarea>

<p><strong>Image :</strong></p>
<input type="file" name="image">

<button type="submit">Enregistrer</button> --}}

<p><strong>Titre :</strong></p>
<input type="text" name="title" value="{{ old('title',  isset($article->title) ? $article->title : null) }}">
@error('title')
    <div>{{ $message }}</div>
@enderror

<p><strong>Contenu :</strong></p>
<textarea name="body" id="" cols="30" rows="10">{{ old('body',  isset($article->body) ? $article->body : null) }}</textarea>
@error('body')
    <div>{{ $message }}</div>
@enderror

<p><strong>Choisir un fichier :</strong></p>
<input type="file" name="image">
@error('image')
    <div>{{ $message }}</div>
@enderror


<button type="submit">Enregistrer</button>
