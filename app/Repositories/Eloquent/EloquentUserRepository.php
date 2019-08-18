<?php

namespace App\Repositories\Eloquent;

use App\User;
use App\Repositories\Contracts\UserRepository;
use App\Repositories\RepositoryAbstract;

class EloquentUserRepository extends RepositoryAbstract implements UserRepository
{
    public function createAddress($userId, array $properties)
    {
        return $this->find($userId)->addresses()->create($properties);
    }

    public function deleteAddress($userId, $addressId)
    {
        return $this->find($userId)->addresses()->findOrFail($addressId)->delete();
    }

    public function entity()
    {
        return User::class;
    }
}
