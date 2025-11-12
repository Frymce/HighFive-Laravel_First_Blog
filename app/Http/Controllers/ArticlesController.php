<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ArticlesController extends Controller implements HasMiddleware
{
    public static function middleware(): array {
        return [
            new Middleware('auth', except: ['index', 'show'])
        ];
    }

    public function index()
    {
        $articles = Article::with('user')->orderBy('created_at', 'DESC')->get()->toArray();
        return view('articles.articles', compact('articles'));
    }

    // public function show(Article $article){
    //     $article = Article::with('user')->where('title', $article->title)->firstOrFail();
    //     //   dd($article);
    //     //   ddd($articles);
    //     return view('articles.show', compact('article'));
    // }

    public function show($id){
        $article = Article::with('user')->with(['comments' => function ($query) {
            $query->with('user');
        }])->findOrFail($id);

        return view('articles.show', compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(Request $request){
        //Vérification des permissions plus tard
        $user = User::find(1);
        $request['user_id'] = $user->id;

        //Vérification
        $validatedData = $request->validate([
            '_token'=> 'required|string',
            'title'=> 'required|string',
            'body'=> 'required|string',
            'user_id'=> 'required|numeric|exists:users,id',
            'image'=> 'required|image|mimes:jpeg,png,gif;svg|max:2048',
        ]);

        //enregistrement dans la base de donnée
        $art = Article::create($validatedData);
        // dd($art);
        return redirect('/articles')->with(['success_message' => 'L\'article a été créé avec succès !']);
    }

    public function edit(Article $article){
        return view('articles.edict', compact('article'));
    }

    public function update(Request $request, Article $article){
        // dd($article, $request->all());
        $article->update($request->all());
        return redirect('articles');
    }

    public function delete(Article $article){
        $article->delete();
        return redirect('articles');
    }
}
