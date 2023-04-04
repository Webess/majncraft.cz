@extends('layouts.app')

@section('content')
<header class="hero is-small">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-four-fifth">
                    <h1 class="title">@lang('Chci si s vámi zahrát!')</h1>
                    <p>
                        Těší nás, že se k nám chceš přidat. Náš server je určen pro vlastníky <strong>originální verze hry</strong>. Bez koupené hry Minecraft se k nám nedostaneš.
                        V naší komunitě si potrpíme na dodržování pravidel, proto před příchodem na náš server <strong>musíš splnit whitelist test</strong>.
                        Test se skládá z <strong>deseti otázek</strong>, z nichž musíš odpovědět <strong>správně alespoň na osm</strong>. K dokončení testu máš 10 minut.
                        Po uplynutí času nebo nesplnění testu <strong>budeš muset počkat 1 hodinu</strong>. Během čekání si prosím tě znovu přečti pravidla a CJDZ.
                    </p>
                    <p>
                        Po splnění testu se můžeš připojit k serveru zadáním IP adresy <strong>s.majncraft.cz</strong>. Doporučujeme ti vytvořit si účet na našem
                        <a href="https://forum.majncraft.cz">fóru</a>, abys měl přehled o dění na serveru.
                    </p>
                    <p>Před spuštěním testu si pořádně přečti <a href="#">pravidla</a> a <a href="#">CJDZ</a>.</p>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="container mb-6">
    <whitelist-test></whitelist-test>
</section>
@endsection
