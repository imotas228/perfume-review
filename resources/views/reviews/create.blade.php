<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Brands</title>
    </head>
    <body>
        <h1>Perfume Review</h1>
        <form action="/reviews" method="REVIEW">
            @csrf
            <div class="brand">
                <h5>ブランド名</h5>
                <textarea name="review[brand]" placeholder="可能な限りブランドの正式名称（アルファベット表記や大文字小文字の区別など）でお願いします。"></textarea>
                <!--<input type="text" name="review[brand]" placeholder="可能な限りブランドの正式名称（アルファベット表記や大文字小文字の区別など）でお願いします。">-->
                <p class="title__error" style="color:red">{{ $errors->first('review.brand') }}</p>
            </div>
            <!--<div class="goods">-->
            <!--    <h2>Goods</h2>-->
            <!--    <textarea name="review[goods]" placeholder="商品名を入力してください"></textarea>-->
                <!--textarea使用で長文や改行を許す-->
            <!--    <p class="body__error" style="color:red">{{ $errors->first('review.goods') }}</p>-->
            <!--</div>-->
            <input type="submit" value="登録"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>