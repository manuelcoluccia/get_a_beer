<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Brewery extends Model
{   

    use Searchable;
    use HasFactory;

    protected $fillable = ['name' , 'description' , 'city', 'address', 'img'];

    public function toSearchableArray()
    {
        /* $birre = $this->beers->pluck('name')->join(', '); */
        $array =[
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'city' => $this->city,
            'altro' => 'birrerie birra',
            /* 'birre' => $birre */

        ];

        return $array;
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    
}
