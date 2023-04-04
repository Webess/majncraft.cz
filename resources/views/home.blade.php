@extends('layouts.app')

@section('content')
    <header class="hero is-small">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-half">
                        <h1 class="title">@lang('Vítej na') <strong
                                class="accent">{{ config('app.name', 'Laravel') }}</strong></h1>
                        <p class="pb-1">@lang('Majncraft.cz je neustále se zvětšující komunita hráčů, kteří mají rádi
                            vanilla-like Minecraft a chtějí ho hrát s více hráči na serveru.') <strong>@lang('Přidej se k
                                nám!')</strong></p>
                        <div class="status">
                            <copy-button></copy-button>
                            <span>
                                @if ($online)
                                    <i class="fas fa-circle has-text-success"></i> {{ $status->Get('numplayers') }}
                                    {{ trans_choice('home.players_online', $status->Get('numplayers')) }}
                                @else
                                    <i class="fa fa-circle has-text-danger"></i> @lang('offline')
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="column has-text-right">
                        <img :src="backgroundImage" alt="@lang('Render hráča')">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="hero-body pt-5">
            <div class="container">
                <h2 class="title has-text-centered pb-3">@lang('Přijď si zahrát na <strong class="accent">jeden z našich
                        serverů</strong>')</h2>
                <p class="subtitle has-text-centered">a připoj se na náš <a href="https://discord.gg/vckSkFC"
                        class="accent is-discord"><i class="fab fa-discord"></i> Discord</a></p>

                <div class="content pt-5">
                    <article class="columns">
                        <div class="column is-7 is-flex is-align-items-center">
                            <img src="{{ asset('images/server/survival.png') }}" alt="Majncraft.cz Survival"
                                class="is-rounded-border">
                        </div>
                        <div class="column is-5 is-flex is-align-items-center">
                            <div>
                                <h3 class="title is-size-3">
                                    <span class="icon is-large is-size-4">
                                        <i class="far fa-axe"></i>
                                    </span>Survival
                                </h3>
                                <p class="mb-0">S naším survival serverem se snažíme být co <strong>nejvěrnější originální
                                        vanilla hře</strong>. Na serveru proto používáme pouze pluginy, které zlepšují
                                    hratelnost základní hry na velké mapě a ve velkém množství hráčů a výrazně ji
                                    neovlivňují. Jednou ze změn oproti základní hře je u nás <strong>možnost obchodovat mezi
                                        hráči prostřednictvím speciálních obchodů</strong> i ve chvíli, kdy jeden z nich
                                    není ve hře.
                                    {{-- Můžeš si u nás zahrát se svými přáteli, postavit si své vysněné budovy, které chceš předvést světu, nebo poznat spoustu nových lidí, ktéré zajímají stejné věci jako tebe. S nimi se pak můžeš <strong>čas od času sejít i v reálném světě</strong> (několikrát ročně pořádáme srazy). --}}
                                    Na serveru <strong>máme relativně přísná pravidla
                                        hraní</strong> a dbáme na jejich dodržování – důležité je pro nás například to, aby
                                    vám nikdo bez dovolení nestavěl v okolí domu. <strong>Nefunguje zde žádné kupování
                                        parcel a pozemků</strong> – můžete volně vyrazit do přírody a začít budovat své
                                    sídla. Velké projekty kvůli přehlednosti a kontrole kvality staveb schvalujeme na našem
                                    <a href="https://forum.majncraft.cz">fóru</a>.
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="columns">
                        <div class="column is-5 is-flex is-align-items-center">
                            <div>
                                <h3 class="title is-size-3">
                                    <span class="icon is-large is-size-4">
                                        <i class="far fa-rocket"></i>
                                    </span>Space
                                </h3>
                                <p>Vesmír není určený na běžné survival hraní. Ve Vesmíru nenajdete žádný generovaný terén,
                                    pouze černou prázdnotu a stavby pouze takové, jaké si je hráči postaví. <strong>Hlavní
                                        náplní staveb ve Vesmíru jsou samozřejmě vesmírné lodě.</strong> Vesmír je rozdělen
                                    na <strong>čtyři kvadranty</strong>, do kterých se lodě řadí. Pokud ovšem nechcete
                                    stavět loď ze <strong>Star Treku, Star Wars či Battlestar Galacticy</strong>, je pro vás
                                    určený kvadrant ostatních. Tam patří <strong>lodě z jiných seriálů, filmů, nebo také
                                        plavidla podle vlastního návrhu</strong>. Pro připojení do vesmíru
                                    <strong>nepotřebujete být na whitelistu Majncraft.cz</strong> a připojíte se přes příkaz
                                    <strong>/space</strong> v herním lobby.
                                </p>
                                {{-- <a href="#" class="button is-primary">Více informací <i
                                        class="far fa-angle-right ml-3"></i></a> --}}
                            </div>
                        </div>
                        <div class="column is-7 is-flex is-align-items-center">
                            <img src="{{ asset('images/server/space.png') }}" alt="Majncraft.cz Space"
                                class="is-rounded-border">
                        </div>
                    </article>
                    <article class="columns">
                        <div class="column is-7 is-flex is-align-items-center">
                            <img src="{{ asset('images/server/skyblock.png') }}" alt="Majncraft.cz Skyblock"
                                class="is-rounded-border">
                        </div>
                        <div class="column is-5 is-flex is-align-items-center">
                            <div>
                                <h3 class="title is-size-3">
                                    <span class="icon is-large is-size-4">
                                        <i class="far fa-island-tropical"></i>
                                    </span>Skyblock
                                </h3>
                                <p><strong>Ocitnete se na malém, hliněném ostrově, který levituje v oblacích nad
                                        voidem.</strong> Ostrov obsahuje jen ty nejzákladnější věci a <strong>vaším úkolem
                                        je kromě přežívání klasicky postupovat hrou</strong>, zjistit jak udělat cobblestone
                                    generátor, jak získat jídlo, jak se dostat do netheru... Vzhledem k tomu, že jsme na
                                    serveru, musí zde být prostor i pro ostatní hráče, proto je tu <strong>pár omezení a na
                                        druhou stranu i nějaká vylepšení</strong>. Na skyblocku je i end, do kterého je
                                    portál na hlavním ostrově. <strong>End není rozdělen na hráčské ostrovy</strong> ale je
                                    standardní, včetně draka nebo end cities. End je také jako jediný svět pravidelně
                                    resetován a to podle potřeby.
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="columns">
                        <div class="column is-5 is-flex is-align-items-center">
                            <div>
                                <h3 class="title is-size-3">
                                    <span class="icon is-large is-size-4">
                                        <i class="fal fa-spray-can"></i>
                                    </span>Creative
                                </h3>
                                <p class="mb-0"><strong>Creative je super flat mapa, která se rozděluje na čtverce o
                                        rozměrech 64m2.</strong> Každý čtverec je parcela, na které mohou hráči stavět.
                                    Každý hráč má možnost mít <strong>až čtyři parcely, které je možné spojit v jednu
                                        velkou</strong> a v případě, že mu nestačí může si <strong>zažádat o
                                        navýšení</strong> na našem discordu a nebo oslovit moderátora ve hře. Samozřejmostí
                                    je kromě herního módu <strong>creative i world edit</strong>, který můžete plně využívat
                                    téměř bez omezení. Na parcele můžete <strong>stavět cokoliv, redstone, entity nebo spawn
                                        mobů jsou povoleny</strong>, můžete tak navrhovat různé farmy nebo trapky,
                                    nejrůznější redstonové zapojení a nebo nějaké stavby.
                                </p>
                            </div>
                        </div>
                        <div class="column is-7 is-flex is-align-items-center">
                            <img src="{{ asset('images/server/creative.png') }}" alt="Majncraft.cz Creative"
                                class="is-rounded-border">
                        </div>
                    </article>
                    <article class="columns">
                        <div class="column is-7 is-flex is-align-items-center">
                            <img src="{{ asset('images/server/technicraft.png') }}" alt="Technicraft.cz"
                                class="is-rounded-border">
                        </div>
                        <div class="column is-5 is-flex is-align-items-center">
                            <div>
                                <h3 class="title is-size-3 is-sr-only">
                                    <span class="icon is-large is-size-">
                                        <i class="fal fa-axe"></i>
                                    </span>Technicraft
                                </h3>
                                <img src="{{ asset('images/technicraft.png') }}" alt="Technicraft.cz"
                                    class="column is-7 p-0 mb-3">
                                <p><strong>TechniCraft je malou a uzavřenou komunitou příznivců modifikované verze
                                        hry.</strong> Základní myšlenkou pak <strong>částá změna modpacků</strong> s tím, že
                                    s každým nový modpack má za cíl poskytnout maximální množství rozličného, nejčastěji
                                    předpřipraveného obsahu <strong>převážně z CurseForge i dalších platforem</strong>. Nové
                                    modpacky vybíráme a nasazujeme relativně často a to v závislosti na aktuální hráčské
                                    populaci a jejich aktuálnímu postupu, často také <strong>při dostatečném zájmu
                                        zprostředkováváme modpacky na přání</strong>. Samotná komunita je pak cíleně malá -
                                    <strong>členy si pečlivě vybíráme</strong>. Lze s námi komunikovat na majncraft.cz fóru,
                                    nicméně naší hlavní komunikační platformou je Discord.
                                </p>
                                {{-- <a href="https://technicraft.cz" class="button is-primary">Více informací <i
                                        class="far fa-angle-right ml-3"></i></a> --}}
                            </div>
                        </div>
                    </article>
                </div>

                {{-- <div class="server-list">
                    <div class="tabs">
                        <ul class="columns">
                            <li class="column" v-bind:class="{ 'is-active': selected == 'survival' }"
                                @click="selected = 'survival'">
                                <img src="{{ asset('images/logo/survival.gif') }}" alt="Survival">
                            </li>
                            <li class="column" v-bind:class="{ 'is-active': selected == 'space' }"
                                @click="selected = 'space'">
                                <img src="{{ asset('images/logo/space.gif') }}" alt="Space">
                            </li>
                            <li class="column" v-bind:class="{ 'is-active': selected == 'skyblock' }"
                                @click="selected = 'skyblock'">
                                <img src="{{ asset('images/logo/skyblock.gif') }}" alt="Skyblock">
                            </li>
                            <li class="column" v-bind:class="{ 'is-active': selected == 'creative' }"
                                @click="selected = 'creative'">
                                <img src="{{ asset('images/logo/creative.gif') }}" alt="Creative">
                            </li>
                            <li class="column" v-bind:class="{ 'is-active': selected == 'technicraft' }"
                                @click="selected = 'technicraft'">
                                <img src="{{ asset('images/technicraft.png') }}" alt="Technicraft">
                            </li>
                        </ul>
                    </div>

                    <div class="content">
                        <div class="hero is-white is-vote">
                            <div class="hero-body p-5">
                                <div v-show="selected == 'survival'">
                                    <h3 class="subtitle">Survival</h3>
                                    <p>Majncraft.cz je hlavně velký survival vanilla-like server. To znamená, že používáme
                                        pouze pluginy, které zlepšují hratelnost základní hry na velké mapě a ve velkém
                                        množství hráčů a výrazně ji neovlivňují. Jednou ze změn oproti základní hře je u nás
                                        virtuální měna, která umožňuje obchodování mezi hráči prostřednictvím speciálních
                                        obchodů i ve chvíli, kdy jeden z nich není ve hře. Můžeš si u nás zahrát se svými
                                        přáteli, postavit si své vysněné budovy, které chceš předvést světu, nebo poznat
                                        spoustu nových lidí, ktéré zajímají stejné věci jako tebe. S nimi se pak můžeš čas
                                        od času sejít i v reálném světě (několikrát ročně pořádáme srazy). Na serveru máme
                                        relativně přísná pravidla hraní a dbáme na jejich dodržování – důležité je pro nás
                                        například to, aby vám nikdo bez dovolení nestavěl v okolí domu. Nefunguje zde žádné
                                        kupování parcel a pozemků – můžete volně vyrazit do přírody a začít budovat své
                                        sídla. Velké projekty kvůli přehlednosti a kontrole kvality staveb schvalujeme na
                                        našem fóru.</p>
                                    <p>Pravděpodobně nejdůležitějším pluginem, sloužícím k sdílení vašich projektů a staveb,
                                        je dynamická mapa. Kromě toho se používá k ulehčení orientace ve světě, hledání
                                        hráčů, ostatních projektů a v neposlední řadě také „čistých“ míst, kde si projekt
                                        můžeš založit právě ty.</p>
                                    <div class="columns">
                                        <div class="column">
                                            <a href="{{ asset('images/gallery/farm.png') }}"
                                                data-lightbox="gallery-survival" data-title="Farma">
                                                <img src="{{ asset('images/gallery/farm.png') }}" alt="Farma"
                                                    class="image">
                                            </a>
                                        </div>
                                        <div class="column">
                                            <a href="{{ asset('images/gallery/spawn.png') }}"
                                                data-lightbox="gallery-survival" data-title="Spawn">
                                                <img src="{{ asset('images/gallery/spawn.png') }}" alt="Spawn"
                                                    class="image">
                                            </a>
                                        </div>
                                        <div class="column">
                                            <a href="{{ asset('images/gallery/vanoce.png') }}"
                                                data-lightbox="gallery-survival" data-title="Vánoce">
                                                <img src="{{ asset('images/gallery/vanoce.png') }}" alt="Vánoce"
                                                    class="image">
                                            </a>
                                        </div>
                                        <div class="column">
                                            <a href="{{ asset('images/gallery/ostrov.png') }}"
                                                data-lightbox="gallery-survival" data-title="Ostrov">
                                                <img src="{{ asset('images/gallery/ostrov.png') }}" alt="Ostrov"
                                                    class="image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div v-show="selected == 'space'">
                                    <h3 class="subtitle">Space</h3>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus laudantium minus
                                        nihil quisquam magni molestias, corporis praesentium repellat ea in. Quos, inventore
                                        cupiditate iusto perspiciatis repellat molestias maxime neque architecto.</p>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta sunt doloremque modi
                                        doloribus provident placeat ea accusamus aut hic reprehenderit natus sit illum quasi
                                        porro deserunt suscipit, molestias facilis! Est.</p>
                                </div>
                                <div v-show="selected == 'skyblock'">
                                    <h3 class="subtitle">Skyblock</h3>
                                    <p>Ocitnete se na malém, hliněném ostrově, který levituje v oblacích nad voidem. Ostrov
                                        obsahuje jen ty nejzákladnější věci a vaším úkolem je kromě přežívání klasicky
                                        postupovat hrou, zjistit jak udělat cobblestone generátor, jak získat jídlo, jak se
                                        dostat do netheru atd. Vzhledem k tomu, že jsme na serveru, musí zde být prostor i
                                        pro ostatní hráče, proto je tu pár omezení a na druhou stranu i nějaká vylepšení.
                                    </p>
                                    <p>Jedno z omezení je velikost ostrova, každý hráč může mít jeden ostrov s obsahem
                                        384m2. Další omezení je ve strukturách. Není možné aby každý hráč měl na svém
                                        ostrově všechny použitelné struktury (ocean monument, pillager outpost, swamp hut,
                                        nether fortress), ale máme zjednodušené jejich vyhledávání pomocí speciálního
                                        kompasu, který se dá koupit od vesničana kartografa. Pokud najdete strukturu mimo
                                        svůj ostrov farmu můžete postavit pouze po schválení na fórum. Mezi vylepšení patří
                                        například možnost změny biomů, které se postupně odemykaj podle úrovně ostrova,
                                        která se počítá podle bloků, ze kterých je ostrov postaven. Na skyblocku je i end,
                                        do kterého je portál na hlavním ostrově. End není rozdělen na hráčské ostrovy ale je
                                        standardní, včetně draka nebo end cities. End je také jako jediný svět pravidelně
                                        resetován a to podle potřeby.</p>
                                    <div class="columns">
                                        <div class="column">
                                            <a href="{{ asset('images/gallery/skyblock-spawn.png') }}"
                                                data-lightbox="gallery-skyblock" data-title="Skyblock spawn">
                                                <img src="{{ asset('images/gallery/skyblock-spawn.png') }}"
                                                    alt="Skyblock spawn" class="image">
                                            </a>
                                        </div>
                                        <div class="column">
                                            <a href="{{ asset('images/gallery/skyblock1.png') }}"
                                                data-lightbox="gallery-skyblock" data-title="Skyblock začátek">
                                                <img src="{{ asset('images/gallery/skyblock1.png') }}"
                                                    alt="Skyblock začátek" class="image">
                                            </a>
                                        </div>
                                        <div class="column">
                                            <a href="{{ asset('images/gallery/skyblock3.png') }}"
                                                data-lightbox="gallery-skyblock" data-title="Skyblock ostrov">
                                                <img src="{{ asset('images/gallery/skyblock3.png') }}"
                                                    alt="Skyblock ostrov" class="image">
                                            </a>
                                        </div>
                                        <div class="column">
                                            <a href="{{ asset('images/gallery/skyblock4.png') }}"
                                                data-lightbox="gallery-skyblock" data-title="Skyblock ostrov">
                                                <img src="{{ asset('images/gallery/skyblock4.png') }}"
                                                    alt="Skyblock ostrov" class="image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div v-show="selected == 'creative'">
                                    <h3 class="subtitle">Creative</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quam tempora nulla.
                                        Architecto, necessitatibus enim doloremque fugiat reiciendis dicta recusandae fugit
                                        placeat rem quas nam quae quis consequuntur, rerum pariatur. Lorem ipsum dolor, sit
                                        amet consectetur adipisicing elit. Aut natus perferendis impedit vero quia sequi
                                        inventore sit doloribus porro eius! Neque eaque aut officia unde. Placeat reiciendis
                                        aspernatur recusandae minima?</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, totam voluptate dolore
                                        debitis et rerum similique quia dolorem eveniet iusto minus. Provident voluptas sint
                                        dolore asperiores autem perferendis repellat mollitia?</p>
                                </div>
                                <div v-show="selected == 'technicraft'">
                                    <h3 class="subtitle">Technicraft</h3>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore molestias dolorem,
                                        suscipit atque culpa optio numquam nemo sit odit ullam vero voluptatibus explicabo
                                        maiores temporibus in nulla soluta quidem quaerat. Lorem ipsum dolor, sit amet
                                        consectetur adipisicing elit. Aut natus perferendis impedit vero quia sequi
                                        inventore sit doloribus porro eius! Neque eaque aut officia unde. Placeat reiciendis
                                        aspernatur recusandae minima?</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nemo reiciendis,
                                        quae vero maxime minus officia. Deleniti ab ad ut cupiditate ipsum optio. Rem
                                        maiores veniam quae ab magni aspernatur!</p>
                                    <a href="https://technicraft.cz" class="button is-primary" target="_blank">Technicraft
                                        web <i class="fas fa-external-link-square-alt ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
            </div>
        </div>
    </section>
@endsection
