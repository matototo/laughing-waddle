@extends('master')
@section('title', 'Home')
@section('content')
<main>
    // html article code goes here
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
</main>
@endsection('content')