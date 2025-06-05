<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\ColorRepository;

class ColorService {
    private $repository;

    public function __construct(ColorRepository $repository) {
        $this->repository = $repository;
    }

    public function list() {
        return $this->repository->list();
    }
}
