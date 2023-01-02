<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;

class ReviewController extends Controller
{
    public function perfume(Review $review)
    {
        return view('reviews/perfume')->with(['reviews' => $review->getPaginateByLimit()]);
        // with 変数名 => 値　でviewにcontroller内で取得した変数を渡す
    }
    public function brand(Review $review)
    {
        return view('reviews/brand')->with(['review' => $review]);
    }
    public function create()
    {
        return view('reviews/create');
    }
    public function store(Request $request, Review $review)
    {
        $input = $request['review']; //$requestのキーはHTMLのFormタグ内で定義した各入力項目のname属性と一致
        $review->fill($input)->save();
        return redirect('/reviews/' . $review->id);
    }
    public function edit(Review $review)
    {
        return view('reviews/edit')->with(['review' => $review]);
    }
    public function update(ReviewRequest $request, Review $review)
    {
        $input_review = $request['review'];
        $review->fill($input_review)->save();
        
        return redirect('/reviews/' . $review->id);
    }
}