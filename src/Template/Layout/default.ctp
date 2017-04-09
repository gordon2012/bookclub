<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Club — <?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bulma.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <div class="columns">
        <div class="column is-10 is-offset-1">

            <nav class="nav">
                <div class="nav-left is-dark">
                    <div class="nav-item">
                        <img src="http://lorempixel.com/300/100/" alt="" />
                    </div>
                    <div class="nav-item">
                        <?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'display', 'landing']) ?>
                    </div>
                </div>

                <span class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <div class="nav-right nav-menu">
                    <div class="nav-item">
                        <?= $this->Html->link('My Books', ['controller' => 'Books', 'action' => 'index']) ?>
                    </div>
                    <div class="nav-item">
                        <?= $this->Html->link('All Books', ['controller' => 'Books', 'action' => 'index']) ?>
                    </div>
                    <div class="nav-item">Options</div>
                </div>

            </nav>
        </div>
    </div>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    <footer>FOOTER</footer>
</body>
</html>
