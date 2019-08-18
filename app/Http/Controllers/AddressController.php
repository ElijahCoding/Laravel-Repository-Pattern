<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\{
    AddressRepository, UserRepository
};

class AddressController extends Controller
{
    protected $users;

    protected $addresses;

    public function __construct(UserRepository $users, AddressRepository $addresses)
    {
        $this->users = $users;
        $this->addresses = $addresses;
    }

    public function index()
    {
        //
    }
}
