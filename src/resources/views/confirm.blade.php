<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
</head>

<body>
    <main>
        <div class="input-form">
            <div class="input-form__heading">
                <h2>内容確認</h2>
            </div>

            <form action="" class="form">
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">氏名</th>
                            <td class="confirm-table__text"><input type="text" value="サンプルデータ"></td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text"><input type="text" value="サンプルデータ"></td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">年代</th>
                            <td class="confirm-table__text"><input type="text" value="サンプルデータ"></td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text"><input type="text" value="サンプルデータ"></td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">ご意見</th>
                            <td class="confirm-table__text"><input type="textarea" value="サンプルデータ"></td>
                        </tr>
                    </table>
                </div>

                <div class="form-button">
                    <button class="form-button__retype" type="submit">再入力</button>
                    <button class="form-button__send" type="submit">送信</button>
                </div>
            </form>
        </div>
    </main>
</body>