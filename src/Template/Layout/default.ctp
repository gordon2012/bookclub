<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Club — <?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bulma.css') ?>
    <?= $this->Html->css('style.css') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body><div class="app ws">


<nav class="nav nav-dark">
    <div class="nav-left" style="padding-left: 16px;">
        <div class="nav-item is-brand"><strong>bookclub</strong></div>
        <div class="nav-item"><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'display', 'landing']) ?></div>
    </div>
    <span class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
    </span>
    <div class="nav-right nav-menu">
        <div class="nav-item"><?= $this->Html->link('My Books', ['controller' => 'Books', 'action' => 'index']) ?></div>
        <div class="nav-item"><?= $this->Html->link('All Books', ['controller' => 'Books', 'action' => 'index']) ?></div>
        <div class="nav-item"><a href="#">Options</a></div>
        <div class="nav-item"><a href="#">Account</a></div>
    </div>
</nav>

<div class="main wrap ws">
    <div class="main inner">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
</div>

<footer class="wrap nav-dark">
    <div class="inner">
        <span><strong>bookclub</strong> by <a href="http://gordondoskas.com" target="_blank">Gordon Doskas</a>. Copyright 2017.</span>
    </div>
</footer>


</div>
<script>

document.addEventListener('DOMContentLoaded', () => {
    document.getElementsByClassName('nav-toggle')[0].addEventListener('click', () => {
        document.getElementsByClassName('nav-menu')[0].classList.toggle('is-active');
    });
})

</script>
</body>
</html>
