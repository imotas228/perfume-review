<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Brands</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="brand">
            {{ $review->brand }}
        </h1>
        <div class="content">
            <div class="content__review">
                <p>{{ $review->goods }}</p> 
                <!--<p>口コミ</p>-->
            </div>
        </div>
        <div class="footer">
            <div class="edit"><a href="/reviews/{{ $review->id }}/edit">編集</a></div>
            <a href="/">戻る</a>
        </div>
    </body>
</html>