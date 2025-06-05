<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Services\UserService;

class AuthService {
    private $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function signUp(array $data) {
        $user = $this->userService->create($data);

        $this->setUserToken($user);

        return $user;
    }

    public function signIn(array $data) {
        $user = $this->userService->findByEmail($data['email']);

        if (!$user || !Hash::check($data['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $this->setUserToken($user);

        return $user;
    }

    private function setUserToken(User $user) {
        $user->token = $user->createToken('client')->plainTextToken;
    }
}
