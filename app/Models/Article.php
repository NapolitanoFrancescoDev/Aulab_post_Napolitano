<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory,Searchable;


    protected $fillable = [
        'title', 'subtitle', 'body', 'image', 'user_id', 'category_id', 'is_accepted', 'slug'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
        
    }

    public function toSearchableArray(){

        return[

            'id' => $this->id,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'category' => $this->category,
        ];
    }
    public function tags(){
        
        return $this->belongsToMany(Tag::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function readDuration(){
        $totalWords = Str::wordCount($this->body); //contiamo il numero delle parole
        $minutesToRead = round($totalWords / 200); //arrotondiamo per eccesso i minuti
        return intval($minutesToRead); //recupera il valore all'interno di una data variabile
    }

   
}
    