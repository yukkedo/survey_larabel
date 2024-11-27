<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <main>
        <div class="input-form">
            <div class="input-form__heading">
                <h2>システムへのご意見をお聞かせください</h2>
            </div>
            <form class="form" action="/servey/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group--item">
                        <span>氏名</span>
                    </div>
                    <div class="form__group--content">
                        <input class="form__group--content-text" type="text" name="name" value="" placeholder="入力してください">
                    </div>
                    <div class="form__error">

                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--item">
                        <span>性別</span>
                    </div>
                    <div class="form__group--content">
                        <label class="select-button">
                            <input class="input__radio-button" type="radio" name="gender" value="男性" checked>男性
                        </label>
                        <label class="select-button">
                            <input class="input__radio-button"
                                type="radio" name="gender" value="女性">女性
                        </label>
                    </div>
                    <div class="form__error">

                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--item">
                        <span>年代</span>
                    </div>
                    <div class="form__group--content">
                        <select class="form__group--content-text" name="age">
                            <option value="0">選択してください</option>
                            <option value="10">10代以下</option>
                            <option value="20">20代</option>
                            <option value="30">30代</option>
                            <option value="40">40代</option>
                            <option value="50">50代</option>
                            <option value="60">60代</option>
                        </select>
                    </div>
                    <div class="form__error">

                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--item">
                        <span>メールアドレス</span>
                    </div>
                    <div class="form__group--content">
                        <input class="form__group--content-text" type="email" name="email" placeholder="入力してください">
                    </div>
                    <div class="form__error">

                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--item">
                        <span>ご意見</span>
                    </div>
                    <div class="form__group--content">
                        <textarea class="form__group--content-textarea" name="feedback" placeholder="入力してください"></textarea>
                    </div>
                </div>


                <div class="form__button">
                    <button class="form__button--submit" type="submit">確認</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>