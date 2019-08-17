<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\TopicRepository;

class TopicController extends Controller
{
    protected $topics;

    public function __construct(TopicRepository $topics)
    {
        $this->topics = $topics;
    }

    public function index()
    {
        return $this->topics->all();
    }
}
