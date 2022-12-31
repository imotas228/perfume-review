<?php

namespace App\Http\Controllers;

use App\Models\Perfume;
use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    public function index(Perfume $perfume)
    {
        return view('reviews/index')->with(['reviews' => $perfume->get()]);
        // with 変数名 => 値　でviewにcontroller内で取得した変数を渡す
    }
}