<!-- index.php -->
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>تعاملات مسافر و راننده</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="overlay">
    <header>
      <h1>از اینکه در این مسیر شما رو همراهی می‌کنم بسیار خرسندم</h1>
    </header>

    <main>
      <p class="description">
        شما هم می‌توانید با بیان نظرات و انتقادات خودتون ضمن مشارکت در این تکامل، یک یادگاری از خودتون به جا بذارید.
      </p>

      <section class="form-section">
        <form action="submit.php" method="POST">
          <textarea name="comment" placeholder="نظر ، انتقاد یا پیشنهاد شما..." required></textarea>
          <button type="submit">ارسال نظر</button>
        </form>
      </section>

      <section id="comments">
        <h2>نظرات دیگر مسافرین:</h2>
        <ul id="commentList">
          <?php
            if (file_exists("comments.txt")) {
              $lines = file("comments.txt");
              foreach (array_reverse($lines) as $line) {
                $safe = htmlspecialchars($line);
                echo "<li>$safe</li>";
              }
            }
          ?>
        </ul>
      </section>
    </main>
  </div>
</body>
</html>
