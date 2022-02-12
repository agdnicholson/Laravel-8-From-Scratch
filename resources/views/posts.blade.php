<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8">
        <title>My Blog</title>
        <link rel="stylesheet" href="/app.css" />
    </head>
    <body>
        <?php foreach ($posts as $post) : ?>
            <article>
                <h1>
                    <a href="/posts/<?= $post->slug ?>">
                        <?= $post->title; ?>
                    </a>
                </h1>
                <div>
                    <p>
                        <?= $post->excerpt; ?>
                    </p>
                </div>
            </article>
        <?php endforeach; ?>
    </body>
</html>