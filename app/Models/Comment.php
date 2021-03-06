<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment','user_id'];

    public function brewery()
    {
        return $this->belongsTo(Brewery::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
