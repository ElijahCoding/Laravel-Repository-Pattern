<?php

namespace App\Repositories\Eloquent;

use App\Topic;
use App\Repositories\Contracts\TopicRepository;
use App\Repositories\RepositoryAbstract;

class EloquentTopicRepository extends RepositoryAbstract implements TopicRepository
{
    public function findBySlug($slug)
    {
        return $this->findWhereFirst('slug', $slug);
    }

    public function entity()
    {
        return Topic::class;
    }
}
