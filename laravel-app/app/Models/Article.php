<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = ['title','body','img','slug'];
    // protected $guarded = [];
    public function comments(){
        $this->hasMany(Comment::class);
    }
}
