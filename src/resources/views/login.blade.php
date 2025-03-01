<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録画面</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>
<body>
<main>
    <div class="">
        <div class="">
            <h1>PiGLy</h1>
        </div>
        <div class="">
            <h2>ログイン</h2>
        </div>
        <form class="form">
            <div class="">
                <div class="">
                    <span class="">お名前</span>
                </div>
                <div class="">
                    <div class="">
                        <input type="text" name="name" placeholder="名前を入力" />
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="">
                <div class="">
                    <span class="">メールアドレス</span>
                </div>
                <div class="">
                    <div class="">
                        <input type="email" name="email" placeholder="メールアドレスを入力" />
                    </div>
                    <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="">
                <button class="" type="submit">ログイン</button>
            </div>
            <div class="">
                <a href='./register/step1'>
                    アカウント作成はこちら
                </a>
            </div>
        </form>
    </div>
    </main>
</body>
</html>