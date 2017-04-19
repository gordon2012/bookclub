<div class="columns">
    <div class="column is-6"><button class="button is-success is-fullwidth">Your trade requests (0 outstanding)</button></div>
    <div class="column is-6"><button class="button is-info is-fullwidth">Trade requests for you (0 unapproved)</button></div>
</div>
<hr/>
<p class="title">All Books</p>
<hr/>
<div class="columns is-mobile is-multiline">
    <?php foreach ($books as $book): ?>
        <div class="column is-one-quarter-desktop is-one-third-tablet is-half-mobile">
            <div class="card"><?= $book->title ?></div>
        </div>
    <?php endforeach; ?>
</div>

<div class="columns is-multiline">
    <?php $colors = array('g', 'm', 'y'); ?>
    <?php foreach(array(0,1,2,3,4,5,6,7,8,9,10,11,12) as $num): ?>
        <div class="column is-6">
            <div class="box <?= $colors[$num % 3] ?>" style="height: 300px;"><h1><?= $num ?></h1></div>
        </div>
    <?php endforeach; ?>
</div>
