<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;
use App\Repositories\Contracts\{
    TopicRepository, UserRepository
};
use App\Repositories\Eloquent\Criteria\{
    LatestFirst, IsLive, EagerLoad
};

class TopicController extends Controller
{
    protected $topics;

    protected $users;

    public function __construct(TopicRepository $topics, UserRepository $users)
    {
        $this->topics = $topics;
        $this->users = $users;
    }

    public function index()
    {
        $topics = $this->topics->withCriteria([
                new LatestFirst(),
                new IsLive(),
                new EagerLoad(['posts', 'posts.user'])
            ])->all();

            // $topics->load(['posts', 'posts.user']);  Bad way

        return view('topics.index', compact('topics'));
    }

    public function show($slug)
    {
        $topic = $this->topics->withCriteria([
            new EagerLoad(['posts.user'])
            ])->findBySlug($slug);

        return view('topics.show', compact('topic'));
    }
}
