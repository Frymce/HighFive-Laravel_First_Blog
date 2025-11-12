<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* @use HasFactory<\Database\Factories\ArticleFactory>
*/
class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'user_id',
        'image'
    ];

    //Un article n'a qu'un auteur
    public function user(){
        return $this->belongsTo(User::class);
    }
    //un article peut avoir plusieurs commentaires
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    // public function getRouteKeyName(){
    //     return 'title';
    // }
    public function getRouteKeyName(){
        return 'id';
    }
    // protected $appends = [
    //     'author', 'comments'
    // ];
    // public function getCommentsAttribute(){
    //     return $this->comments()->with('user')->get();
    // }
    // public function getAuthorAttribute(){
    //     return $this->user()->name();
    // }
}
