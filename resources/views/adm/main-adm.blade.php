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
    <!-- header area start -->
    <header class="d-none d-lg-block">
        <div class="header__area mb-30">
            <div class="header__middle-2 d-none d-md-block" style="border-bottom: solid black ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-2 col-lg-3 col-md-6">
                            <div class="logo">
                                <a href="/admin">
                                    <img src="{{ asset('img/logo/logo_adm.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-lg-5 col-md-6">
                            <div class="header__search">
                                <div class="main-menu main-menu-2">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="/admin">Inicio</a>
                                            </li>
                                            <li>
                                                <a href="#">Cadastro</a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="/admin/produtos/form">Produtos</a>
                                                    </li>
                                                    <li>
                                                        <a href="/admin/fornecedores/form">Fornecedores</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Consultas e Movimentações</a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="/admin/clientes">Clientes</a>
                                                    </li>
                                                    <li>
                                                        <a href="/admin/produtos">Produtos</a>
                                                    </li>
                                                    <li>
                                                        <a href="/admin/fornecedores">Fornecedores</a>
                                                    </li>
                                                    <li>
                                                        <a href="/admin/promocoes">Promoções</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="/">Sair</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    <main>
        @yield('adm-content')
    </main>
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
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="footer__widget footer-col-4 pb-30">
                                <h3 class="footer__widget-title footer__widget-title-2">Cadastro</h3>
                                <div class="footer__widget-content">
                                    <div class="footer__links footer__links-2">
                                        <ul>
                                            <li>
                                                <a href="/admin/produtos/form">Produtos</a>
                                            </li>
                                            <li>
                                                <a href="/admin/fornecedores/form">Fornecedores</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="footer__widget footer-col-5 pb-30">
                                <h3 class="footer__widget-title footer__widget-title-2">Consultas e Movimentações</h3>
                                <div class="footer__widget-content">
                                    <div class="footer__links footer__links-2">
                                        <ul>
                                            <li>
                                                <a href="/admin/clientes">Clientes</a>
                                            </li>
                                            <li>
                                                <a href="/admin/produtos">Produtos</a>
                                            </li>
                                            <li>
                                                <a href="/admin/fornecedores">Fornecedores</a>
                                            </li>
                                            <li>
                                                <a href="/admin/promocoes">Promoções</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="footer__widget footer-col-5 pb-30">
                                <h3 class="footer__widget-title footer__widget-title-2">Suporte</h3>
                                <div class="footer__widget-content">
                                    <div class="footer__links footer__links-2">
                                        <ul>
                                            <li>
                                                <a href="/adm/contact-adm">Entre em Contato</a>
                                            </li>
                                            <li>
                                                <a href="/">Voltar para Loja</a>
                                            </li>
                                        </ul>
                                    </div>
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
