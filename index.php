<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <style>div{padding: 10px;font-size:16px;}
  
header{
  background-color: #135D66;
  color: #E3FEF7;}

  .book{
    border: #E3FEF7;
  background-color: #77B0AA;
  height: 60px;
  width: 60px;
  font-size: 30px;}
  .field{
    background-color: #E3FEF7;
  }
</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">📚登録</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="insert.php" enctype="multipart/form-data">
  <div class="jumbotron">
   <fieldset class="field">
    <legend>積読記録</legend>
     <label>title：<input type="text" name="title"></label><br>
     <label>author:<input type="text" name="author"></label><br>
     <label>image：<input type="file" name="image"></label><br> <!-- 画像アップロードフォーム -->
     <label>text：<textarea name="text" rows="4" cols="40"></textarea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<button class="book" id="book_btn">📚</button>
<!-- Main[End] -->

<script>
  // ページが完全に読み込まれた後にイベントリスナーを設定する
  document.addEventListener('DOMContentLoaded', function() {
    // book_btn要素を取得
    var bookBtn = document.getElementById('book_btn');
    // クリックイベントリスナーを追加
    bookBtn.addEventListener('click', function() {
      // 遷移するURLを指定してリダイレクト
      window.location.href = 'http://localhost/02php_kadai/select.php';
    });
  });
</script>


</body>
</html>
