<?php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;

class PostIndexController extends Controller
{
    public function __invoke()
    {
        return PostResource::collection(Post::wherePublished(true)->get());
    }
}
