<?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.min.css') ?>

<div id="app">
    <div class="hero">
        <div class="hero-body">
            <Book v-bind:book="book"></Book>
            <div class="container box is-dark">
            <p class="title">
                {{ message }}
            </p>
            <li v-for="num in arr" class="subtitle">
                {{ num }}
            </li></div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/vue"></script>
<script>

var book = <?= $book ?>;
console.log(book);

Vue.component('Book', {
    props: ['book'],
    template: '<h1 class="container box title">{{ book.title }}</h1>'
});

var app = new Vue({
    el: '#app',
    data: {
        book: book,
        message: 'Hello, Vue! Lets read a book.',
        arr: [1, 2, 3, 4]
    }
});

</script>
