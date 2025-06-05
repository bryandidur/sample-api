<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository {
    public function list(string $per_page) {
        return User::with('colors')->paginate($per_page);
    }

    public function findByEmail(string $email) {
        return User::where('email', $email)->first();
    }

    public function create(array $data) {
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        $user->colors()->sync($data['colorIds']);

        $user->colors;

        return $user;
    }

    public function update(User $user, array $data) {
        $data['password'] = isset($data['password']) ? bcrypt($data['password']) : $user->password;

        $user->update($data);

        $user->colors()->sync($data['colorIds']);

        $user->colors;

        return $user;
    }

    public function delete(User $user) {
        $user->delete();

        return $user;
    }
}
