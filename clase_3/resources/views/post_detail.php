<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Platzi Blog in PHP!</title>
</head>
<body>
<ul>
    <?php /** @type \PlatziPHP\Post $post */ ?>
    <h1><?= $post->getTitle() ?></h1>
    <p><?= $post->getBody() ?></p>
    <h5><?= $post->getAuthor(); ?></h5>
</ul>
</body>
</html>