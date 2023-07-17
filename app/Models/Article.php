<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','article_text','image',
    ];

    public function getImageUrlAttribute(){
        if($this->image){
            return Storage::disk('public')->url($this->image);
        }   
        return 'https://placehold.co/600x600';
    }

    public function author(){
        return $this->hasOne(Author::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class)->orderByDesc("created_at");
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
