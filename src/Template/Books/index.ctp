<?php
    $this->layout = false;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Book Club</title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('bookclub.css') ?>
        <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="brand">bookclub</div>
            <nav><button>all books</button><button>my books</button><button>settings</button></nav>
        </header>

        <section>
            <?php foreach ($books as $book): ?>
                <div><strong><?= $book->id ?>: </strong><?= $book->title ?></div>
            <?php endforeach; ?>
        </section>

        <footer>Copyright 2017 Gordon Doskas</footer>
    </body>
</html>
