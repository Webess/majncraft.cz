@extends('layouts.app')

@section('content')
    <section class="hero ">
        <div class="hero-body pb-0">
            <div class="container">
                <div class="columns">
                    <div class="column is-8 is-offset-2">
                        <figure class="image is-16by9">
                            <img src="{{ asset($cjdz->cover) }}" alt="Pravidla" class="is-rounded-border">
                        </figure>
                    </div>
                </div>

                <section class="section">
                    <div class="columns">
                        <div class="column is-8 is-offset-2">
                            <div class="content" data-editable>
                                <h2 class="subtitle is-5 has-text-grey">{{ $cjdz->category->title }}</h2>
                                <h1 class="title" data-name="title">{{ $cjdz->title }}</h1>
                                <div data-name="content">
                                    {!! $cjdz->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="is-divider"></div>

                <section class="section py-0">
                    <div class="columns is-variable is-8">
                        <div class="column is-5 is-offset-1 has-text-left">
                            <div class="content">

                                <a href="#" class="is-flex is-flex-direction-row is-align-items-center">
                                    <i class="far fa-angle-left is-size-1"></i>
                                    <div class="is-flex is-flex-direction-column pl-5">
                                        <span class="subtitle is-5 has-text-grey">Co je dobré znát</span>
                                        <span class="title has-text-black is-3">Eventy</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="column is-5 has-text-right">
                            <div class="content">

                                <a href="#"
                                    class="is-flex is-flex-direction-row is-align-items-center is-justify-content-flex-end">
                                    <div class="is-flex is-flex-direction-column pr-5">
                                        <span class="subtitle is-5 has-text-grey">Co je dobré znát</span>
                                        <span class="title has-text-black is-3">Vlastní recepty</span>
                                    </div>
                                    <i class="far fa-angle-right is-size-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="hero">
        <div class="hero-body pt-0">
            <div class="container">

                <div class="is-divider"></div>

                <section class="section">
                    <div class="columns is-variable is-8">
                        <div class="column is-5 is-offset-1">
                            <div class="content">
                                <h2 class="subtitle is-5 has-text-grey">Co je dobré znát</h2>
                                <h1 class="title has-text-black is-3">První kroky na serveru</h1>
                                <p class="has-text-dark">Základní průvodce začátkem na našem serveru, aby jsi se rychle
                                    zorientoval a pochopil, jak to tu chodí. Věci, které nenajdeš tady jsou ve zbytku.</p>
                            </div>
                        </div>
                        <div class="column is-5">
                            <div class="content">
                                <h2 class="subtitle is-5 has-text-grey">Co je dobré znát</h2>
                                <h1 class="title has-text-black is-3">Eventy</h1>
                                <p class="has-text-dark">V Majncraft světě znamená slovo event <strong>skupinovou
                                        soutěž</strong>, která je většinou pořádaná za účelem zábavy hráčů. Existuje spoustu
                                    druhů eventů a další stále vznikají. Konají se občasně a mezi hráči se <strong>těší
                                        velké popularitě a účasti.</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </section>
@endsection
