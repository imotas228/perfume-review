<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function perfume(Review $review)
    {
        return view('reviews/perfume')->with(['reviews' => $review->getByLimit()]);
        // with 変数名 => 値　でviewにcontroller内で取得した変数を渡す
    }
    public function brand(Review $review)
    {
        return view('reviews/brand')->with(['review' => $review]);
    }
}