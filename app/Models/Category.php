<?php

// Category.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'CategoryID'; // Correct primary key


    protected $fillable = [
        'CategoryID', 'CategoryName'
    ];
    // public function posts()
    // {
    //     return $this->hasMany(Post::class, 'categoryID', 'CategoryID');
    // }

    public function posts()
{
    return $this->hasMany(Post::class, 'CategoryID', 'CategoryID');
}
}
