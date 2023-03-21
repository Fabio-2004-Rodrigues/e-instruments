<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-Intruments</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- mobile-header-area start -->
    <div class="mobile-header-area pt-20 pb-20 d-lg-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mobile-logo">
                        <a href="/"><img src="{{ asset('img/logo/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-bar d-xl-none text-end">
                        <button type="button" class="header-bar-btn" data-bs-toggle="modal"
                            data-bs-target="#offCanvasModal">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-header-area end -->
    <!-- sidebar area start -->
    <section class="offcanvas__area">
        <div class="modal fade" id="offCanvasModal" tabindex="-1" aria-labelledby="offCanvasModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="offcanvas__wrapper">
                        <div class="offcanvas__top d-flex align-items-center mb-60 justify-content-between">
                            <div class="logo">
                                <a href="/instruments/index.php">
                                    <img src="{{ asset('img/logo/logo.png') }}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="offcanvas__content p-relative z-index-1">
                            <div class="canvas__menu">
                                <div class="mobile-menu fix"></div>
                            </div>
                            <div class="offcanvas__action mt-40 mb-15">
                                <a href="/users/sign-in">Login</a>
                                <a href="/products/cart" class="has-tag">
                                    <i class="far fa-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar area end -->
    <header class="d-none d-lg-block">
        <div class="header__area mb-30">
            <div class="header__middle-2 d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-2 col-lg-3 col-md-6">
                            <div class="logo">
                                <a href="/">
                                    <img src="{{ asset('img/logo/logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-lg-5 col-md-6">
                            <div class="header__search">
                                <div class="main-menu main-menu-2">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="/">Ínicio</a>
                                            </li>
                                            <li>
                                                <a href="/products/">Catálogo</a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="/products/cordas">Cordas</a>
                                                    </li>
                                                    <li>
                                                        <a href="/products/percussao">Percussão</a>
                                                    </li>
                                                    <li>
                                                        <a href="/products/sopro">Sopro</a>
                                                    </li>
                                                    <li>
                                                        <a href="/products/teclas">Teclas</a>
                                                    </li>
                                                    <li>
                                                        <a href="/products/eletronico">Eletrônico</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="https://rastreamento.correios.com.br/app/index.php">Rastreie
                                                    seu Pedido</a>
                                            </li>
                                            <li>
                                                <a href="/pages/contact">Entre em Contato</a>
                                            </li>
                                            <li>
                                                <a href="/pages/about">Sobre Nós</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-lg-4 col-md-12">
                            <div class="header__middle-right-2">
                                <div class="header__action ml-30">
                                    <div class="main-menu main-menu-2">
                                        <ul>
                                            @auth
                                                <li class="nav-item">
                                                    <form action="/logout"method="POST">
                                                        @csrf
                                                        <a href="/logout" class="nav-link"
                                                            onclick="event.preventDefault();  this.closest('form').submit();"
                                                            style="margin-right: 20px">
                                                            Sair
                                                        </a>
                                                    </form>
                                                </li>
                                            @endauth
                                            @guest
                                                <li class="has-dropdown">
                                                    <a href="#"><i class="fal fa-user-circle"
                                                            style="font-size: 25px; padding: 1px";"></i></a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="/login">Entrar</a>
                                                        </li>
                                                        <li>
                                                            <a href="/register">Cadastre-se</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            @endguest
                                            <li>
                                                <a href="/cart"><i class="fal fa-shopping-basket"
                                                        style="font-size: 25px; padding: 1px""></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__bottom-2 black-bg-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-4 col-lg-4 col-md-4">
                            <div class="header__bottom-offer header__bottom-offer-border text-center">
                                <p> Promoção na loja toda !!! </p>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-lg-4 col-md-4">
                            <div class="header__bottom-offer header__bottom-offer-border text-center">
                                <p> Frete Gratis na primeira compra !!! </p>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-lg-4 col-md-4">
                            <div class="header__bottom-offer text-center">
                                <p> Compra segura pelo PagSeguro </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
        <section style="text-align: right ; margin: -30px 50px 50px 0px">
            <input type='button' onclick="window.history.back();" value="Voltar" class="btn-tp "
                style="background-color: red">
        </section>
    </main>
    <section class="features__area-2 footer-bg pt-35">
        <div class="container">
            <div class="features__wrapper">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="features__item features__item-2 mb-20">
                            <div class="features__icon mr-20">
                                <i class="flaticon-truck" style="color: rgb(60, 60, 131)"></i>
                            </div>
                            <div class="features__content">
                                <h3 class="features__title features__title-2">Frete Grátis para Qualquer Compra </h3>
                                <p>Melhores Opções de Frete</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="features__item features__item-2 mb-20">
                            <div class="features__icon mr-20">
                                <i class="flaticon-credit-card" style="color: rgb(60, 60, 131)"></i>
                            </div>
                            <div class="features__content">
                                <h3 class="features__title features__title-2">Pagamento 100% Seguro</h3>
                                <p>Garantia da PagSeguro</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="features__item features__item-2 mb-20">
                            <div class="features__icon mr-20">
                                <i class="flaticon-exchange" style="color: rgb(60, 60, 131)"></i>
                            </div>
                            <div class="features__content">
                                <h3 class="features__title features__title-2">Qualidade Garantida</h3>
                                <p>Embalagens Resistentes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features__area-2-end -->

    <!-- footer area start -->
    <footer>
        <div class="footer__area footer-bg">
            <div class="footer__top footer__top-space-2 pb-25">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="footer__widget pb-30">
                                <h3 class="footer__widget-title footer__widget-title-2">Políticas da Loja</h3>
                                <div class="footer__widget-content">
                                    <div class="footer__links footer__links-2">
                                        <ul>
                                            <li>
                                                <a href="/policy/privacy_policy">Política de
                                                    Privacidade</a>
                                            </li>
                                            <li>
                                                <a href="/policy/refund_policy">Política de Reembolso</a>
                                            </li>
                                            <li>
                                                <a href="/policy/terms_conditions">Termos e Condições</a>
                                            </li>
                                            <li>
                                                <a href="/adm/contact-adm">Administração</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="footer__widget footer-col-4 pb-30">
                                <h3 class="footer__widget-title footer__widget-title-2">Categorias</h3>
                                <div class="footer__widget-content">
                                    <div class="footer__links footer__links-2">
                                        <ul>
                                            <li>
                                                <a href="/products/cordas">Cordas</a>
                                            </li>
                                            <li>
                                                <a href="/products/percussao">Percussão</a>
                                            </li>
                                            <li>
                                                <a href="/products/sopro">Sopro</a>
                                            </li>
                                            <li>
                                                <a href="/products/teclas">Teclas</a>
                                            </li>
                                            <li>
                                                <a href="/products/eletronico">Eletrônico</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="footer__widget footer-col-5 pb-30">
                                <h3 class="footer__widget-title footer__widget-title-2">Navegue pela Loja</h3>
                                <div class="footer__widget-content">
                                    <div class="footer__links footer__links-2">
                                        <ul>
                                            <li>
                                                <a href="/">Ínicio</a>
                                            </li>
                                            <li>
                                                <a href="/products/">Catálogo</a>
                                            </li>
                                            <li>
                                                <a href="https://rastreamento.correios.com.br/app/index.php">Rastreie seu Pedido</a>
                                            </li>
                                            <li>
                                                <a href="/pages/about">Sobre Nós</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="footer__widget footer-col-5 pb-30">
                                <h3 class="footer__widget-title footer__widget-title-2">Links Úteis</h3>
                                <div class="footer__widget-content">
                                    <div class="footer__links footer__links-2">
                                        <ul>
                                            <li>
                                                <a href="/cart">Carrinho</a>
                                            </li>
                                            <li>
                                                <a href="/login">Login</a>
                                            </li>
                                            <li>
                                                <a href="/register">Inscrever-se</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div
                                class="footer__widget footer__widget-border footer__widget-border-2 footer-col-1 pb-30">
                                <h3 class="footer__widget-title footer__widget-title-2">Receba Nossas Promoções</h3>
                                <div class="footer__subscribe footer__subscribe-2 mb-25">
                                    <p>Coloque seu email<a href="#"> para receber promoções exclusivas !!!</a>
                                    </p>
                                    <form action="/promocoes" method="POST">
                                        <div class="footer__subscribe-input">
                                            @csrf
                                            <input type="email" placeholder="Coloque seu email aqui"
                                                name="email">
                                            <button type="submit"><i class="fab fa-telegram-plane"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->


    <!-- JS here -->
    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('js/meanmenu.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/parallax.js') }}"></script>
    <script src="{{ asset('js/nice-select.js') }}"></script>
    <script src="{{ asset('js/counterup.js') }}"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('js/ajax-form.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>
</body>

</html>
