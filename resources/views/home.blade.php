@extends('layouts.app')
{{-- usa ed estendi quella pagina in questa --}}

@section('main')
    <main class="mainE">
        <div class="cards">
            @foreach ($comics_info as $key => $item)
                <div class="card">
                    <img src="{{ $item['thumb'] }}" alt="picture">
                    <h6><a href="{{ route('comics.show', $key) }}">{{ $item['title'] }}</a> </h6>
                </div>
            @endforeach
        </div>
        <div class="btl">
            <a href="{{route('comics.create')}}"><button>ADD COMIC</button></a>
        </div>

        <div class="containerY">
            <ul>
                <li>
                    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="comics digital">
                    <a href="#">DIGITAL COMICS</a>
                </li>
                <li>
                    <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="merch">
                    <a href="#">DC MERCHANDISE</a>
                </li>
                <li>
                    <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="sub">
                    <a href="#">SUBSCRIPTION</a>
                </li>
                <li>
                    <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="shop">
                    <a href="#">COMIC SHOP LOCATOR</a>
                </li>
                <li>
                    <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="power">
                    <a href="#">DC POWER VISA</a>
                </li>
            </ul>
        </div>

    </main>
@endsection
