<div class="columns">
    <div class="column box is-10 is-offset-1">
        <p class="title">All Books</p>

        <div class="columns is-mobile is-multiline">
            <?php foreach ($books as $book): ?>
                <div class="column is-one-quarter-desktop is-one-third-tablet is-half-mobile">
                    <div class="card"><?= $book->title ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
