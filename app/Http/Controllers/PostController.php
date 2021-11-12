<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;

class PostController extends Controller
{
    protected $postRepository;
    protected $nbrPages;
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
        $this->nbrPages = config('app.nbrPages.posts');
    }
    public function index()
    {
        $posts = $this->postRepository->getActiveOrderByDate($this->nbrPages);
        $heros = $this->postRepository->getHeros();
        return view('frontend.casaroyal.blog-big-cards-left-sidebar', compact('posts', 'heros'));
    }
}
