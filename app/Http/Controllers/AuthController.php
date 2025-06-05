<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\{
    SignUpRequest,
    SignInRequest,
};
use App\Services\AuthService;

class AuthController extends Controller
{
    private $service;

    public function __construct(AuthService $service) {
        $this->service = $service;
    }

    /**
     * Sign up an user.
     *
     * @param  \App\Http\Requests\SignUpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function signUp(SignUpRequest $request)
    {
        return response()->json($this->service->signUp($request->all()), 201);
    }

    /**
     * Sign in an user.
     *
     * @param  \App\Http\Requests\SignInRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function signIn(SignInRequest $request)
    {
        return response()->json($this->service->signIn($request->all()));
    }
}
