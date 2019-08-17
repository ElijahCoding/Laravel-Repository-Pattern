<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\{
    TopicRepository, UserRepository
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
        return $this->users->all();
    }
}
