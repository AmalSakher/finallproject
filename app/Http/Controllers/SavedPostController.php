<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;

use Illuminate\Http\Request;


    use Illuminate\Support\Facades\Auth;
class SavedPostController extends Controller
{
    // public function index()
    // {
    //     // Retrieve the saved posts from the database
    //     $savedPosts = auth()->user()->savedPosts;

    //     // Return the saved posts view with the retrieved data
    //     dd($savedPosts);

    //     return view('saved-posts.index', compact('savedPosts'));

    // }



    public function savePost(Request $request)
    {
        $user = auth()->user(); // Retrieve the current user
        $post = new Post();
        $post->title = 'عنوان المنشور';
        $post->content = 'محتوى المنشور';

     $savedPosts = $user->savedPosts; // الوصول إلى المنشورات المحفوظة

     return view('saved-posts.index', compact('savedPosts'));

        // Perform any additional actions or redirect to the appropriate page
    }
}
