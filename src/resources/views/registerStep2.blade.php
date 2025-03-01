<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録画面</title>
    <link rel="stylesheet" href="{{ asset('css/registerS2.css') }}" />
</head>
<body>
    <main>
    <div class="">
        <div class="">
            <h1>PiGLy</h1>
        </div>
        <div class="">
            <h2>新規登録画面</h2>
            <p>STEP2 体重データの入力</p>
        </div>
        <form class="form" action="/weight_logs" method="post">
            <div class="">
                <div class="">
                    <span class="">現在の体重</span>
                </div>
                <div class="">
                    <div class="">
                        <input type="text" name="now_weight" placeholder="現在の体重を入力" />kg
                    </div>
                    <div class="form__error">
                        @error('now_weight')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="">
                <div class="">
                    <span class="">目標の体重</span>
                </div>
                <div class="">
                    <div class="">
                        <input type="text" name="target_weight" placeholder="目標の体重を入力" />kg
                    </div>
                    <div class="form__error">
                        @error('target_weight')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="">
                <button class="" type="submit">アカウント作成</button>
            </div>
        </form>
    </div>
    </main>
</body>
</html>