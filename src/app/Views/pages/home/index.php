<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Commentiter</title>
  <link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/style/normalize.css" />
  <link rel="stylesheet" href="/style/home.css">
</head>

<body>
  <template id="comment-template">
    <?= view("components/comment") ?>
  </template>

  <header class="navbar navbar-expand-lg navbar-dark bg-dark flex-shrink-0">
    <div class="container">
      <a href="/" class="navbar-brand">Commentiter</a>
    </div>
  </header>

  <main class="py-3 flex-column d-flex" id="main">
    <section class="overflow-auto flex-fill" id="comment-section">
      <div class="container h-100">
        <ul class="p-0 d-flex flex-column h-100" id="comments-list">
          <?php foreach ([1, 2, 3, 5, 6, 7] as $i): ?>
            <?= view("components/comment") ?>
          <?php endforeach ?>
        </ul>
      </div>
    </section>
    <section class="flex-shrink-0 pt-2">
      <div class="container">
        <nav>
          <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Назад</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Дальше</a></li>
          </ul>
        </nav>
        <div class="form-group">
          <label class="form-label" for="comment-email">Email:</label>
          <input required type="email" id="comment-email" placeholder="Ваш email" class="form-control">
        </div>
        <div class="form-group">
          <label class="form-label" for="comment-text">Текст:</label>
          <textarea minlength="30" required type="text" id="comment-text" class="form-control" placeholder="Ваш текст комментария"></textarea>
        </div>
        <button class="btn btn-primary" id="comment-send">Отправить</button>
      </div>
    </section>
  </main>

  <script src="/lib/jquery-3.7.1.slim.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="/script/home.js"></script>
</body>

</html>