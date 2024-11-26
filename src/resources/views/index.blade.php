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
            <form action="" class="form">
                <div class="form__group">
                    <div class="form__group--item">
                        <span>氏名</span>
                    </div>
                    <div class="form__group--content">
                        <input class="form__group--content-text" type="text" value="" placeholder="入力してください">
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
                            <input class="input__radio-button" type="radio" checked>男性
                        </label>
                        <label class="select-button">
                            <input class="input__radio-button"
                                type="radio">女性
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
                        <select class="form__group--content-text" name="" id="" placeholder="選択してください"></select>
                    </div>
                    <div class="form__error">

                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--item">
                        <span>メールアドレス</span>
                    </div>
                    <div class="form__group--content">
                        <input class="form__group--content-text" type="text" placeholder="入力してください">
                    </div>
                    <div class="form__error">

                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--item">
                        <span>ご意見</span>
                    </div>
                    <div class="form__group--content">
                        <textarea class="form__group--content-textarea" name="content" placeholder="入力してください" id=""></textarea>
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