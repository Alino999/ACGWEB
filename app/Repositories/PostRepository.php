<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Post;
//use Your Model

/**
 * Class PostRepository.
 */
class PostRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Post::class;
    }

    protected function queryActive()
    {
        return Post::select(
                      'id',
                      'slug',
                      'image',
                      'title',
                      'excerpt',
                      'user_id')
                    ->with('user:id,name')
                    ->whereActive(true);
    }
    protected function queryActiveOrderByDate()
    {
        return $this->queryActive()->latest();
    }
    public function getActiveOrderByDate($nbrPages)
    {
        return $this->queryActiveOrderByDate()->paginate($nbrPages);
    }

    public function getHeros()
    {
        return $this->queryActive()->with('categories')->latest('updated_at')->take(5)->get();
    }
}
