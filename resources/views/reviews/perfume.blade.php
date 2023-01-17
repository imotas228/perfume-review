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
        <a href='/reviews/create'>香水追加</a>
        <div class='reviews'>
            @foreach ($reviews as $review)
                <div class='review'>
                    <h2 class='brand'>
                        <a href="/reviews/{{ $review->id }}">{{ $review->brand }}</a>
                    </h2>
                    <p class='goods'>{{ $review->goods }}</p>
                <form action="/reviews/{{ $review->id }}" id="form_{{ $review->id }}" method="review">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $review->id }})">delete</button>
                </form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $reviews->links() }}
        </div>
        <script>
            function deletePost(id){
                'use strict'
                
                if (confirm('削除すると復元できません。　\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>