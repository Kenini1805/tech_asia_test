<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Repositories\UserRepository;


class UserService extends BaseService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createUser($user)
    {
        return $this->userRepository->create($user);
    }

    public function getUsers()
    {
        $users = $this->userRepository->find();

        return $users;
    }
}
