<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: index.php');
}
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
  
    <title>送信完了</title>
</head>
<body>
<h1>お問い合わせありがとうございました！</h1>
<P><?php echo $nickname; ?></P>
<P><?php echo $email; ?></P>
<P><?php echo $content; ?></P>
    
</body>
</html>