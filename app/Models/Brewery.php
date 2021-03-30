<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brewery extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'description' , 'img'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
