<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;

class UserService {
    private $repository;

    public function __construct(UserRepository $repository) {
        $this->repository = $repository;
    }

    public function list(string $per_page) {
        return $this->repository->list($per_page);
    }

    public function findByEmail(string $email) {
        return $this->repository->findByEmail($email);
    }

    public function create($data) {
        return $this->repository->create($data);
    }

    public function update(User $user, $data) {
        return $this->repository->update($user, $data);
    }

    public function delete(User $user) {
        return $this->repository->delete($user);
    }
}
