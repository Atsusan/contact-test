<?php
// フォームが送信されたかチェックする
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
  // フォームの値を取得する
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // メール送信処理
  $to = 'as2k_abc@hotmail.com'; // 送信先のメールアドレスを設定する
  $subject = 'お問い合わせ：' . $subject;
  $message = "お名前: {$name}\nメールアドレス: {$email}\n\n{$message}";
  $headers = "From: {$name} <{$email}>";
  $result = mail($to, $subject, $message, $headers);

  // 送信結果に応じたメッセージを表示する
  if ($result) {
    echo 'お問い合わせありがとうございます。';
  } else {
    echo 'お問い合わせの送信に失敗しました。';
  }
}
?>

