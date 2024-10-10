@extends('master')
@section('title', 'Home')
@section('content')
<main>
    <!-- // html home code goes here -->
     <section class="hero">
     <picture><img src="{{ asset('img/sea.jpg')}}" alt="Picture of the sea by Clem Onojeghuo" class="img-hero"></picture>
     </section>
     <!-- À PROPOS DU LORD -->
     <section>
        <div class="flex-row-lord lord">
            <div class="text-lord">
                <h2>Notre mission</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, repellat? Saepe, nesciunt laborum dolore maiores nostrum minus illo molestias autem aspernatur quo, ullam laboriosam qui impedit, optio voluptatum expedita officia. Tempora, et maiores at molestias qui nemo sequi similique quae, officiis non, rem possimus nihil ex temporibus saepe mollitia quia sed quos soluta excepturi atque consequatur placeat. Sed tempore aliquid totam possimus quisquam quis fugiat officia cupiditate molestias doloremque?</p>
            </div>
            

        </div>
    </section>
   <!-- ACTUALITES -->
   <header class="title">
        <h2>Actualités</h2>
    </header>
    <div class="news-grid">
        <!-- DEBUT ACTUALITE 01 -->
        <article>
            <small>05 septembre 2024</small>
            <h3>Lorem Impsum</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis, enim alias molestiae
                recusandae
                officia nostrum repellat, culpa nulla ea consequuntur iure? Veritatis eos qui ducimus at consectetur
                maxime pariatur!</p>
        </article>
        <!-- FIN ACTUALITE 01 -->
        <!-- DEBUT ACTUALITE 02 -->
        <article>
            <small>01 septembre 2024</small>
            <h3>Lorem Impsum</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis, enim alias molestiae
                recusandae
                officia nostrum repellat, culpa nulla ea consequuntur iure? Veritatis eos qui ducimus at consectetur
                maxime pariatur!</p>
        </article>
        <!-- FIN ACTUALITE 02 -->
        <!-- DEBUT ACTUALITE 03 -->
        <article>
            <small>31 aout 2024</small>
            <h3>Lorem Impsum</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis, enim alias molestiae
                recusandae
                officia nostrum repellat, culpa nulla ea consequuntur iure? Veritatis eos qui ducimus at consectetur
                maxime pariatur!</p>
        </article>
        <!-- FIN ACTUALITE 03 -->
        <!-- DEBUT ACTUALITE 04 -->
        <article>
            <small>28 aout 2024</small>
            <h3>Lorem Impsum</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis, enim alias molestiae
                recusandae
                officia nostrum repellat, culpa nulla ea consequuntur iure? Veritatis eos qui ducimus at consectetur
                maxime pariatur!</p>
        </article>
        <!-- FIN ACTUALITE 04 -->
    </div>

   
</main>
@endsection('content')