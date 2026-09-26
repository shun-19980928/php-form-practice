<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザー登録　ー　入力</title>
</head>
<body>
    <h1>ユーザー登録(1/3)</h1>

    <form action="confirm.php" method="post"
    <p>
     <label>名前:</label>
     <input type="text" name="name" required>
    </p>
    <p>
    <label>年齢</label>
    <input type="number" name="age" required>
    </p>
    <p>
    <label>メールアドレス</label>
    <input type="email" name="email" required>
    </p>

    <button type="submit">確認画面へ</button>
    </form>
</body>
</html>

