<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $comment = trim($_POST["comment"]);

  if (!empty($comment)) {
    $comment = strip_tags($comment); // حذف کدهای HTML برای امنیت
    $comment .= "\n";

    file_put_contents("comments.txt", $comment, FILE_APPEND | LOCK_EX);
  }

  // برگشت به صفحه اصلی
  header("Location: index.php");
  exit;
}
?>
