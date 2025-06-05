<?php

namespace App\Repositories;

use App\Models\Color;

class ColorRepository {
    public function list() {
        return Color::all();
    }
}
