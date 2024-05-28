<!-- Con extends andiamo ad estendere la pagina app.blade.php, modificando alcuni valori di essa -->
@extends('layouts.app')
<!-- Con section andiamo a modificare il 'title' in 'Home' -->
@section('title', 'Comics')
<!-- Con section andiamo a modificare il 'content' con una semplice stringa o con un template -->
@section('content')
<div class="bg-black">
    <div class="container bg-black">
        <button class="fd-current-series-btn"><a href="{{ route('comics.index') }}">HOMEPAGE</a>

        </button>
        <div class="p-5 d-flex">
            <img class="f-d-detailImg" src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <div class="f-d-detailText">
                <h1 class="f-d-detailTitle">{{$comic->title}}</h1>
                <p class="f-d-detailSubtitle">{{$comic->author}}</p>
                <p class="f-d-detailDescription">{{$comic->description}}</p>
                <p class="f-d-detailPrice">{{$comic->condition}}</p>
                <p class="f-d-detailSeries">{{$comic->release_date}}</p>
                <p class="f-d-detailSaleDate">{{$comic->rare}}</p>
            </div>
        </div>
        
    </div>
    <div class="fd-style">
        <ul class="containerArticles d-flex align-items-center justify-content-between gap-5">
            <li class="d-flex align-items-center gap-3">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="img1"
                    class="imgArticles">
                <p class="pArticles">DIGITAL COMICS</p>
            </li>
            <li class="d-flex align-items-center gap-3">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="img2" class="imgArticles">
                <p class="pArticles">DC MERCHANDISE</p>
            </li>
            <li class="d-flex align-items-center gap-3">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="img3"
                    class="imgArticles">
                <p class="pArticles">SUBSCRIPTION</p>
            </li>
            <li class="d-flex align-items-center gap-3">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="img4" class="imgArticles">
                <p class="pArticles">COMIC SHOP LOCATOR</p>
            </li>
            <li class="d-flex align-items-center gap-3">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="img5" class="imgArticles">
                <p class="pArticles">DC POWER VISA</p>
            </li>
        </ul>
    </div>
    <!-- Ricordarsi di inserire l'endsection per chiudere la sessione -->
    @endsection