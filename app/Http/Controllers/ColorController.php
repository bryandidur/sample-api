<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ColorService;

class ColorController extends Controller
{
    private $service;

    public function __construct(ColorService $service) {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json($this->service->list());
    }
}
