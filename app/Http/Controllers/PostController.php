<?php

// PostController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\CollegeInfo;

class PostController extends Controller
{
    // Display the form for creating a new post
    public function create()
    {
        $categories = Category::all(); // Fetch all categories
        return view('posts.create', compact('categories')); // Pass categories to the view
    }

    // Store a newly created post in the database
    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'Title' => 'required|string|max:255',
        'Content' => 'required|string',
        'categoryID' => 'required|exists:categories,CategoryID',
        'UserID' => 'required|exists:users,id',
        'meta-title' => 'nullable|string|max:255',
        'meta-description' => 'nullable|string',
        'og-title' => 'nullable|string|max:255',
        'og-description' => 'nullable|string',
        'twiter-title' => 'nullable|string|max:255',
        'twiter-description' => 'nullable|string',
    ]);

    // Create and save the new post
    Post::create($validatedData);

        // Redirect to the post index with a success message
        return redirect('/allblogs')->with('success', 'Post created successfully.');
    }



public function blog(){
    $posts = Post::with('category', 'user')->get();
    $postdata = json_encode($posts, JSON_PRETTY_PRINT);
    // dd($postdata);


    return view('posts.blog', compact('posts'));
}

public function Allblogs(){

    $posts = Post::with('category', 'user')->get();
    $postdata = json_encode($posts, JSON_PRETTY_PRINT);
    //  dd($postdata);
return view('allblogs', compact('posts'));

}


public function GetSingleBlog($id)
{
    // Fetch the post by ID along with its category and user
    $post = Post::with('category', 'user')->findOrFail($id);

    // Optionally, encode the post data to JSON if needed
    $postdata = json_encode($post, JSON_PRETTY_PRINT);
    //  dd($postdata); 
     
    return view('posts.blogsingle', compact('post'));
}



public function DeleteBlog($id){
    $post = Post::find($id);
    $post->delete();
    return redirect('allblogs')->with('success', 'Blog deleted successfully.');
}


public function GetBlogByIdForEdit($id){

    $post = Post::with('category', 'user')->find($id);
    $categories = Category::all();
    $postdata = json_encode($post, JSON_PRETTY_PRINT);
    // dd($postdata); 
     
    return view('posts.editpost', compact('post', 'categories'));


}

public function update(Request $request, $id)
{
    $request->validate([
        'Title' => 'required|string|max:255',
        'categoryID' => 'required|integer',
        'Content' => 'required|string',
        'meta-title' => 'nullable|string|max:255',
        'meta-description' => 'nullable|string',
        'og-title' => 'nullable|string|max:255',
        'og-description' => 'nullable|string',
        'twiter-title' => 'nullable|string|max:255',
        'twiter-description' => 'nullable|string',
    ]);

    $post = Post::findOrFail($id);
    $post->Title = $request->Title;
    $post->categoryID = $request->categoryID;
    $post->Content = $request->Content;
    $post['meta-title'] = $request->input('meta-title');
    $post['meta-description'] = $request->input('meta-description');
    $post['og-title'] = $request->input('og-title');
    $post['og-description'] = $request->input('og-description');
    $post['twiter-title'] = $request->input('twiter-title');
    $post['twiter-description'] = $request->input('twiter-description');
    $post->save();

    return redirect('allblogs')->with('success', 'Post updated successfully');
}

public function AddCategory(Request $request){

    $validatedData = $request->validate([
        'CategoryName' => 'required|string|max:50',
    ]);

    Category::create($validatedData);
    return redirect()->back()->with('success', 'Category added successfully');


}


public function AllCategory(){

    $category = Category::all();
    // dd( $category);


    return view('posts.category', compact('category'));
}

public function DeletCategory($id){

    $category = Category::find($id);
    $category->delete();
    return redirect()->back()->with('success', 'Category deleted successfully');

}


public function GetcategoryById($id){

    $category = Category::find($id);
 
    return view('posts.updatecategory', compact('category'));


}


public function updatecategory(Request $request, $id)
{
    $request->validate([
        'CategoryName' => 'required|string|max:50',
        
    ]);

    $category = Category::findOrFail($id);
    $category->CategoryName = $request->CategoryName;
   $category->save();

    return redirect('category')->with('success', 'Post updated successfully');
}



public function admissionPosts()
{
    $category = Category::where('CategoryName', 'admission')->first();
    $posts = $category ? $category->posts()->with('user')->get() : collect();

    // Iterate through posts to extract the image and truncate the description
    $posts->transform(function ($post) {
        // Extract the first image from the content
        $content = $post->Content;
        preg_match('/<img.*?src=["\'](.*?)["\']/', $content, $matches);
        $imageUrl = $matches[1] ?? null;

        // Extract the text content and truncate to 25 words
        $description = strip_tags($content); // Remove HTML tags
        $descriptionWords = explode(' ', $description); // Split into words
        $shortDescription = implode(' ', array_slice($descriptionWords, 0, 15)); // Get first 25 words

        // Add the extracted image and description to the post object
        $post->imageUrl = $imageUrl;
        $post->shortDescription = $shortDescription;

        return $post;
    });

    return view('admissions', compact('posts'));
}

    public function examPosts()
    {
        $category = Category::where('CategoryName', 'exams')->first();
        $posts = $category ? $category->posts()->with('user')->get() : collect();

        $posts->transform(function ($post) {
            // Extract the first image from the content
            $content = $post->Content;
            preg_match('/<img.*?src=["\'](.*?)["\']/', $content, $matches);
            $imageUrl = $matches[1] ?? null;
    
            // Extract the text content and truncate to 25 words
            $description = strip_tags($content); // Remove HTML tags
            $descriptionWords = explode(' ', $description); // Split into words
            $shortDescription = implode(' ', array_slice($descriptionWords, 0, 8)); // Get first 25 words
    
            // Add the extracted image and description to the post object
            $post->imageUrl = $imageUrl;
            $post->shortDescription = $shortDescription;
    
            return $post;
        });


        return view('exams', compact('posts'));
    }

    public function newsPosts()
    {
        $category = Category::where('CategoryName', 'news')->first();
        $posts = $category ? $category->posts()->with('user')->get() : collect();

        $posts->transform(function ($post) {
            // Extract the first image from the content
            $content = $post->Content;
            preg_match('/<img.*?src=["\'](.*?)["\']/', $content, $matches);
            $imageUrl = $matches[1] ?? null;
    
            // Extract the text content and truncate to 25 words
            $description = strip_tags($content); // Remove HTML tags
            $descriptionWords = explode(' ', $description); // Split into words
            $shortDescription = implode(' ', array_slice($descriptionWords, 0, 15)); // Get first 25 words
    
            // Add the extracted image and description to the post object
            $post->imageUrl = $imageUrl;
            $post->shortDescription = $shortDescription;
    
            return $post;
        });

        return view('news', compact('posts'));
    }


    public function GetSinglePost($id)
{
    // Fetch the post by ID along with its category and user
    $post = Post::with('category', 'user')->findOrFail($id);

    // Optionally, encode the post data to JSON if needed
    $postdata = json_encode($post, JSON_PRETTY_PRINT);
//  dd($postdata); 
     
    return view('postsingle', compact('post'));
}


public function updatePosts()
{
    $category = Category::where('CategoryName', 'news')->first();
    
    // Get the latest 5 posts for the specified category
    $posts = $category ? $category->posts()->with('user')->latest()->take(5)->get() : collect();

    $posts->transform(function ($post) {
        // Extract the first image from the content
        $content = $post->Content;
        preg_match('/<img.*?src=["\'](.*?)["\']/', $content, $matches);
        $imageUrl = $matches[1] ?? 'default-image.jpg'; // Fallback image

        // Extract the text content and truncate to 15 words
        $description = strip_tags($content); // Remove HTML tags
        $descriptionWords = explode(' ', $description); // Split into words
        $shortDescription = implode(' ', array_slice($descriptionWords, 0, 15)); // Get first 15 words

        // Add the extracted image and description to the post object
        $post->imageUrl = $imageUrl;
        $post->shortDescription = $shortDescription;

        return $post;
    });

    $colleges = CollegeInfo::all();
    //  dd($colleges);
    return view('home', compact('posts', 'colleges'));
}

public function showPage()
{
    // Fetch the three most recent posts
    $recentPosts = Post::latest()->take(3)->get();
    $topcolleges = CollegeInfo::latest()->take(3)->get();

 dd( $topcolleges);

    // Pass the posts to the view
    return view('components.footer', compact('recentPosts,  topcolleges'));
}

public function show($id)
{
    $post = Post::findOrFail($id);
    return view('posts.blogsingle', compact('post'));
}

}
