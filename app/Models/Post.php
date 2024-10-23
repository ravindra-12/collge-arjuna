<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $primaryKey = 'PostID';

    protected $fillable = [
        'UserID', 
        'categoryID', 
        'Title', 
        'Content', 
        'meta-title', 
        'meta-description', 
        'og-title', 
        'og-description', 
        'twiter-title', 
        'twiter-description'
    ];

    public static function getApplicationsOpeningSoonPosts()
    {
        return self::whereHas('category', function ($query) {
            $query->where('CategoryName', 'Applications Opening Soon'); // Ensure you're using the correct column name
        })->get();
    }



    public function category()
{
    return $this->belongsTo(Category::class, 'CategoryID', 'CategoryID');
}



    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }



}