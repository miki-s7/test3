<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録画面</title>
    <link rel="stylesheet" href="{{ asset('css/registerS1.css') }}" />
</head>
<body>
    <main>
    <div class="">
        <div class="">
            <h1>PiGLy</h1>
        </div>
        <div class="">
            <h2>新規登録画面</h2>
            <p>STEP1 アカウント情報の登録</p>
        </div>
        <form class="form" action="/register/step2" method="post">
            @csrf
            <div class="">
                <div class="">
                    <span class="">お名前</span>
                </div>
                <div class="">
                    <div class="">
                        <input type="text" name="name" placeholder="名前を入力"  value="{{ old('name') }}" />
                    </div>
                    <div class="form__error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="">
                <div class="">
                    <span class="">メールアドレス</span>
                </div>
                <div class="">
                    <div class="">
                        <input type="email" name="email" placeholder="メールアドレスを入力" value="{{ old('email') }}" />
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="">
                <div class="">
                    <span class="">パスワード</span>
                </div>
                <div class="">
                    <div class="">
                        <input type="text" name="pass" placeholder="パスワードを入力" value="{{ old('pass') }}" />
                    </div>
                    <div class="form__error">
                        @error('pass')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="">
                <button class="" type="submit">次へ進む</button>
            </div>
            <div class="">
                <a href='../login'>
                    ログインはこちら
                </a>
            </div>
        </form>
    </div>
    </main>
</body>
</html>