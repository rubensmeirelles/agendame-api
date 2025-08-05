<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\InvalidAuthenticationException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request): UserResource
    {
        $input = $request->validated();

        if (!Auth::attempt($input)){
            throw new InvalidAuthenticationException();
        }
        return new UserResource(Auth::user());
    }
}
