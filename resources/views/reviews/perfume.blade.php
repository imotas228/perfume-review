<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>perfume review</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Perfume review</h1>
        <a href='/reviews/create'>ブランド追加</a>
        <div class='reviews'>
            @foreach ($reviews as $review)
                <div class='review'>
                    <h2 class='brand'>
                        <a href="/reviews/{{ $review->id }}">{{ $review->brand }}</a>
                    </h2>
                    <p class='goods'>{{ $review->goods }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $reviews->links() }}
        </div>
    </body>
</html>