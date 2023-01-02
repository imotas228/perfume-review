<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>perfume review</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/reviews/{{ $review->id }}" method="REVIEW">
                @csrf
                @method('PUT')
                <div class='content__brand'>
                    <h2>ブランド</h2>
                    <input type='text' name='review[brand]' value="{{ $review->brand }}">
                </div>
                <div class='content__goods'>
                    <h2>商品</h2>
                    <input type='text' name='review[goods]' value="{{ $review->goods }}">
                </div>
                <input type="submit" value="更新">
            </form>
        </div>
    </body>
</html>