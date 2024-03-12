<?php
$h1 = 'Basic of PHP';
$pageTitle = 'Martin Practice 1';
$author = 'Martin';
$htmlBody = '
  PHP (Hypertext Preprocessor) is a widely used server-side     scripting language that has revolutionized web development. With its simplicity, flexibility, and vast community support, PHP has become the backbone of countless dynamic websites and web applications.
  '
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "$pageTitle | Variables" ?></title>
</head>

<body>
  <h1><?= $h1 ?></h1>
  <p>by: <?= $author ?></p>
  <p>
    <?= $htmlBody ?>
  </p>
</body>

</html>