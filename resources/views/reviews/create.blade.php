<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Brands</title>
    </head>
    <body>
        <h1>Brands Name</h1>
        <form action="/reviews" method="REVIEW">
            @csrf
            <div class="brand">
                <h2>Perfume Review</h2>
                <input type="text" name="review[brand]" placeholder="ブランド名">
                <p class="title__error" style="color:red">{{ $errors->first('review.brand') }}</p>
            </div>
            <div class="goods">
                <h2>Goods</h2>
                <textarea name="review[goods]" placeholder="商品名を入力してください"></textarea>
                <!--textarea使用で長文や改行を許す-->
                <p class="body__error" style="color:red">{{ $errors->first('review.goods') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>