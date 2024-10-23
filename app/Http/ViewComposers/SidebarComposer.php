<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;

class SidebarComposer
{
    public function compose(View $view)
    {
        // Fetch and process posts for the 'exams' category
        $examsCategory = Category::where('CategoryName', 'exams')->first();
        $examsPosts = $examsCategory ? $examsCategory->posts()->with('user')->latest()->take(3)->get() : collect();

        $examsPosts->transform(function ($post) {
            $content = $post->Content;
            preg_match('/<img.*?src=["\'](.*?)["\']/', $content, $matches);
            $imageUrl = $matches[1] ?? null;

            $description = strip_tags($content);
            $descriptionWords = explode(' ', $description);
            $shortDescription = implode(' ', array_slice($descriptionWords, 0, 15));

            $post->imageUrl = $imageUrl;
            $post->shortDescription = $shortDescription;

            return $post;
        });

        // Fetch and process posts for the 'news' category
        $newsCategory = Category::where('CategoryName', 'news')->first();
        $newsPosts = $newsCategory ? $newsCategory->posts()->with('user')->latest()->take(3)->get() : collect();

        $newsPosts->transform(function ($post) {
            $content = $post->Content;
            preg_match('/<img.*?src=["\'](.*?)["\']/', $content, $matches);
            $imageUrl = $matches[1] ?? null;

            $description = strip_tags($content);
            $descriptionWords = explode(' ', $description);
            $shortDescription = implode(' ', array_slice($descriptionWords, 0, 15));

            $post->imageUrl = $imageUrl;
            $post->shortDescription = $shortDescription;

            return $post;
        });

        // Pass both collections to the view
        $view->with([
            'examsPosts' => $examsPosts,
            'newsPosts' => $newsPosts,
        ]);
    }
}
