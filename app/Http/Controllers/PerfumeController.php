<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfume;

class PerfumeController extends Controller
{
    public function index(Perfume $perfume)
    {
        return $perfume->get();
    }
}