<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfumepost;

class PerfumepostController extends Controller
{
    public function index(Perfumepost $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return $post->get();//$postの中身を戻り値にする。
    }
}
