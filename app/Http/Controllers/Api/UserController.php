<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class UserController extends Controller
{

    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getUsers();

        return UserResource::collection($users);
    }

    public function store(UserRequest $request)
    {
        $params = $request->only('name', 'email', 'password');
        $params['password'] = bcrypt($params['password']);
        $user = $this->userService->createUser($params);
        
        return new UserResource($user); 
    }
}
