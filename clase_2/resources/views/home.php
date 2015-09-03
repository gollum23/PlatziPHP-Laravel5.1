<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Platzi Blog in PHP!</title>
</head>
<body>
    <ul>
        <?php
        /** @type \PlatziPHP\Post[] $posts */
        foreach ($posts as $post): ?>
            <li>
                <h2><?= $post->getTitle() ?></h2>
                <?php if ($post == $firstPost): ?>
                    <p><?= $post->getBody() ?></p>
                    <h5><?= $post->getAuthor(); ?></h5>
                <?php else: ?>
                    <p>Summary..</p>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>