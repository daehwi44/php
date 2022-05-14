<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート（入力画面）</title>
</head>

<body>
  <form action="create.php" method="POST">
    <fieldset>
      <legend>アンケート（入力画面）</legend>
      <a href="read.php">一覧画面</a>
      <div>
        name: <input type="text" name="name">
      </div>
      <div>
        email: <input type="mail" name="email">
      </div>
       <div>
        好きな食べ物: <input type="text" name="food">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>