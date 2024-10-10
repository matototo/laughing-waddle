@extends('master')
@section('title', 'Home')
@section('content')
<main>
    <!-- // html article code goes here -->
    <section class="hero">
     <picture><img src="{{ asset('img/blueberry.jpg')}}" alt="Picture of blueberries by veeterzy" class="img-hero"></picture>
     </section>
    <header class="header-page">
        <div>
            <h2>Catalogue d’articles</h2>
        </div>
        <div class="top_tri">
            <p>Trier par: </p>
            <select name="sort-order" class="custom-select" aria-label="Sort By">
                <option value="personal">Pertinence</option>
                <option value="new">Nouveautés</option>
            </select>
        </div>
    </header>
    <div class="filtres flex-row">
            <aside class="filtres">
                <div class="flex-article">
                    <h4>Filtres:</h4>
                    <p class="effacer">Réinitialiser</p>
                </div>
                <section class="accordion">
                    <div class="tab">
                        <input type="checkbox" name="accordion-1" id="cb1" checked>
                        <label for="cb1" class="tab__label">Status</label>
                        <div class="tab__content">
                            <p>En cours</p>
                            <p>Archivées</p>
                        </div>
                    </div>
                    <div class="tab">
                        <input type="checkbox" name="accordion-1" id="cb2">
                        <label for="cb2" class="tab__label">Catégories</label>
                        <div class="tab__content">
                            <p>Catégorie 1</p>
                            <p>Catégorie 2</p>
                            <p>Catégorie 3</p>
                            <p>Catégorie 4</p>
                        </div>
                    </div>
                </section>

            </aside>
            <div class="grille">
                <!-- CARTE DEBUT-->
                <article class="carte">
                    <header class="status flex-article">
                        <div class="status"><span class="status-rouge">Status</span></div>
                        <div class="date">Date</div>
                    </header>
                    <div class="contenu">
                        <div class="produit-titre">
                            <small>Auteur : </small>
                            <h3>NOM DE L'ARTICLE</h3>
                        </div>
                        <div class="flex-column produit-info border">
                            
                            <div class="mises">Quantité d'articles : 3</div>
                        </div>
                        <div class="flex-column produit-info border">
                            <div class="flex-article">
                                <div>Refferences :</div>
                                <div>NOM DE LA REFFERENCE</div>
                            </div>
                        </div>
                    </div>
                    <div class="offre flex-article">
                        <div>
                        <button><a href="#">Plus d'information</a></button>
                    </div>
                </article>
                <!-- CARTE FIN-->
                 <!-- CARTE DEBUT-->
                <article class="carte">
                    <header class="status flex-article">
                        <div class="status"><span class="status-rouge">Status</span></div>
                        <div class="date">Date</div>
                    </header>
                    <div class="contenu">
                        <div class="produit-titre">
                            <small>Auteur : </small>
                            <h3>NOM DE L'ARTICLE</h3>
                        </div>
                        <div class="flex-column produit-info border">
                            
                            <div class="mises">Quantité d'articles : 3</div>
                        </div>
                        <div class="flex-column produit-info border">
                            <div class="flex-article">
                                <div>Refferences :</div>
                                <div>NOM DE LA REFFERENCE</div>
                            </div>
                        </div>
                    </div>
                    <div class="offre flex-article">
                        <div>
                        <button><a href="#">Plus d'information</a></button>
                    </div>
                </article>
                <!-- CARTE FIN-->
                 <!-- CARTE DEBUT-->
                <article class="carte">
                    <header class="status flex-article">
                        <div class="status"><span class="status-rouge">Status</span></div>
                        <div class="date">Date</div>
                    </header>
                    <div class="contenu">
                        <div class="produit-titre">
                            <small>Auteur : </small>
                            <h3>NOM DE L'ARTICLE</h3>
                        </div>
                        <div class="flex-column produit-info border">
                            
                            <div class="mises">Quantité d'articles : 3</div>
                        </div>
                        <div class="flex-column produit-info border">
                            <div class="flex-article">
                                <div>Refferences :</div>
                                <div>NOM DE LA REFFERENCE</div>
                            </div>
                        </div>
                    </div>
                    <div class="offre flex-article">
                        <div>
                        <button><a href="#">Plus d'information</a></button>
                    </div>
                </article>
                <!-- CARTE FIN-->
                 <!-- CARTE DEBUT-->
                <article class="carte">
                    <header class="status flex-article">
                        <div class="status"><span class="status-rouge">Status</span></div>
                        <div class="date">Date</div>
                    </header>
                    <div class="contenu">
                        <div class="produit-titre">
                            <small>Auteur : </small>
                            <h3>NOM DE L'ARTICLE</h3>
                        </div>
                        <div class="flex-column produit-info border">
                            
                            <div class="mises">Quantité d'articles : 3</div>
                        </div>
                        <div class="flex-column produit-info border">
                            <div class="flex-article">
                                <div>Refferences :</div>
                                <div>NOM DE LA REFFERENCE</div>
                            </div>
                        </div>
                    </div>
                    <div class="offre flex-article">
                        <div>
                        <button><a href="#">Plus d'information</a></button>
                    </div>
                </article>
                <!-- CARTE FIN-->
                 <!-- CARTE DEBUT-->
                <article class="carte">
                    <header class="status flex-article">
                        <div class="status"><span class="status-rouge">Status</span></div>
                        <div class="date">Date</div>
                    </header>
                    <div class="contenu">
                        <div class="produit-titre">
                            <small>Auteur : </small>
                            <h3>NOM DE L'ARTICLE</h3>
                        </div>
                        <div class="flex-column produit-info border">
                            
                            <div class="mises">Quantité d'articles : 3</div>
                        </div>
                        <div class="flex-column produit-info border">
                            <div class="flex-article">
                                <div>Refferences :</div>
                                <div>NOM DE LA REFFERENCE</div>
                            </div>
                        </div>
                    </div>
                    <div class="offre flex-article">
                        <div>
                        <button><a href="#">Plus d'information</a></button>
                    </div>
                </article>
                <!-- CARTE FIN-->
                 <!-- CARTE DEBUT-->
                <article class="carte">
                    <header class="status flex-article">
                        <div class="status"><span class="status-rouge">Status</span></div>
                        <div class="date">Date</div>
                    </header>
                    <div class="contenu">
                        <div class="produit-titre">
                            <small>Auteur : </small>
                            <h3>NOM DE L'ARTICLE</h3>
                        </div>
                        <div class="flex-column produit-info border">
                            
                            <div class="mises">Quantité d'articles : 3</div>
                        </div>
                        <div class="flex-column produit-info border">
                            <div class="flex-article">
                                <div>Refferences :</div>
                                <div>NOM DE LA REFFERENCE</div>
                            </div>
                        </div>
                    </div>
                    <div class="offre flex-article">
                        <div>
                        <button><a href="#">Plus d'information</a></button>
                    </div>
                </article>
                <!-- CARTE FIN-->
            </div>
    
</main>
@endsection('content')