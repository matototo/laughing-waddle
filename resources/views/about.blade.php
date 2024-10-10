@extends('master')
@section('title', 'Home')
@section('content')
<main>
    <!-- // html about code goes here -->
    <section class="hero">
     <picture><img src="{{ asset('img/city.jpg')}}" alt="Picture of the sea by Reynaldo #brigworkz Brigantty" class="img-hero"></picture>
     </section>
    <!-- À PROPOS DU LORD -->
    <section>
        <div class="flex-row-lord lord">
            <div class="text-lord">
                <h2>Qui somme nous?</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione asperiores nemo recusandae incidunt esse mollitia magni molestiae quos quaerat vero. Vel hic fugiat dicta! Necessitatibus illum ullam voluptate numquam? Vero deleniti temporibus eius ullam! Ut corporis maiores repellat tempore!</p>
            </div>

        </div>
    </section>
   <!-- ACTUALITES -->
   <header class="title">
        <h2>Liste des employées</h2>
    </header>
    <div class="news-grid">
        <!-- DEBUT ACTUALITE 01 -->
        <article>
            <small>Rôle</small>
            <h3>Nom / Prenom</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis, enim alias molestiae
                recusandae
                officia nostrum repellat, culpa nulla ea consequuntur iure? Veritatis eos qui ducimus at consectetur
                maxime pariatur!</p>
        </article>
        <!-- FIN ACTUALITE 01 -->
        <!-- DEBUT ACTUALITE 02 -->
        <article>
            <small>Rôle</small>
            <h3>Nom / Prenom</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis, enim alias molestiae
                recusandae
                officia nostrum repellat, culpa nulla ea consequuntur iure? Veritatis eos qui ducimus at consectetur
                maxime pariatur!</p>
        </article>
        <!-- FIN ACTUALITE 02 -->
        <!-- DEBUT ACTUALITE 03 -->
        <article>
            <small>Rôle</small>
            <h3>Nom / Prenom</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis, enim alias molestiae
                recusandae
                officia nostrum repellat, culpa nulla ea consequuntur iure? Veritatis eos qui ducimus at consectetur
                maxime pariatur!</p>
        </article>
        <!-- FIN ACTUALITE 03 -->
        <!-- DEBUT ACTUALITE 04 -->
        <article>
            <small>Rôle</small>
            <h3>Nom / Prenom</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facilis, enim alias molestiae
                recusandae
                officia nostrum repellat, culpa nulla ea consequuntur iure? Veritatis eos qui ducimus at consectetur
                maxime pariatur!</p>
        </article>
        <!-- FIN ACTUALITE 04 -->
    </div>
</main>
@endsection('content')