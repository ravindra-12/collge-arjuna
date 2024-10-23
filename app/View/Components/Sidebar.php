<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;
use App\Models\CollegeInfo; // Import the CollegeInfo model

class Sidebar extends Component
{
    public $examsPosts;
    public $newsPosts;
    public $latestColleges;

    public function __construct()
    {
        // Fetch and process data for exams
        $examsCategory = Category::where('CategoryName', 'exams')->first();
        $this->examsPosts = $examsCategory ? $this->fetchPosts($examsCategory) : collect();

        // Fetch and process data for news
        $newsCategory = Category::where('CategoryName', 'news')->first();
        $this->newsPosts = $newsCategory ? $this->fetchPosts($newsCategory) : collect();

        // Fetch and process data for the latest colleges
        $this->latestColleges = CollegeInfo::latest()->take(3)->get()->map(function ($college) {
            $college->imageUrl = $college->image; // Assuming image contains the URL
            $college->shortDescription = strip_tags($college->description); // Extract description

            return $college;
        });
    }

    // Method to fetch and process posts
    protected function fetchPosts($category)
    {
        $posts = $category->posts()->with('user')->latest()->take(3)->get();

        $posts->transform(function ($post) {
            $content = $post->Content;
            preg_match('/<img.*?src=["\'](.*?)["\']/', $content, $matches);
            $imageUrl = $matches[1] ?? null;

            $description = strip_tags($content);
            $descriptionWords = explode(' ', $description);
            $shortDescription = implode(' ', array_slice($descriptionWords, 0, 10));

            $post->imageUrl = $imageUrl;
            $post->shortDescription = $shortDescription;

            return $post;
        });

        return $posts;
    }

    public function render()
    {
        return view('components.sidebar');
    }
}
