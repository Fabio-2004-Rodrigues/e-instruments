@extends('layout.main')
@section('content')
    <main style="background-color: white">
        <!-- slider area start -->
        <br>
        <section class="page__title p-relative d-flex align-items-center"
            data-background="{{ asset('img/slider/banner.png') }}">
        </section>
        <!-- slider area end -->
        <!-- product trending area start -->
        <section class="product__area-trending pb-40">
            <div class="container">
                <div class="section__title-line section__title-line-2 mb-30">
                    <div class="row">
                        <div class="col-xxl-6 col-sm-8 col-6">
                            <div class="section__title-wrapper d-flex align-items-center">
                                <h2 class="section__title-3"><br>Categorias</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-xxl-12">
                        <div class="product__tb-slider owl-carousel">
                            <div class="product__item mb-20">
                                <div class="product__thumb w-img fix">
                                    <a href="/products/cordas">
                                        <img src="{{ asset('img/products/cordas.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="product__content text-center">
                                    <h3 class="product__title mt-10">
                                        <a href="/products/cordas">Cordas</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="product__item mb-20">
                                <div class="product__thumb w-img fix">
                                    <a href="/products/percussao">
                                        <img src="{{ asset('img/products/percussao.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="product__content text-center">
                                    <h3 class="product__title mt-10">
                                        <a href="/products/percussao">Percussão</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="product__item mb-20">
                                <div class="product__thumb w-img fix">
                                    <a href="/products/sopro">
                                        <img src="{{ asset('img/products/sopro.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="product__content text-center">
                                    <h3 class="product__title mt-10">
                                        <a href="/products/sopro">Sopro</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="product__item mb-20">
                                <div class="product__thumb w-img fix">
                                    <a href="/products/teclas">
                                        <img src="{{ asset('img/products/teclas.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="product__content text-center">
                                    <h3 class="product__title mt-10">
                                        <a href="/products/teclas">Teclas</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="product__item mb-20">
                                <div class="product__thumb w-img fix">
                                    <a href="/products/eletronico">
                                        <img src="{{ asset('img/products/eletronicos.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="product__content text-center">
                                    <h3 class="product__title mt-10">
                                        <a href="/products/eletronico">Eletrônicos</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product trending area end -->
        <!-- product area start -->
        <section class="product__area pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-line section__title-line-2">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-5">
                                    <div class="section__title-wrapper">
                                        <h2 class="section__title-3">Produtos Populares</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="product__item-wrapper-2 pt-30">
                            <div class="product__tab-content">
                                <div class="tab-content" id="trendingTabContent">
                                    <div class="tab-pane fade show active" id="new-2" role="tabpanel"
                                        aria-labelledby="new-2">
                                        <div
                                            class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                            @foreach ($data as $produto)
                                                <div class="col">
                                                    <div class="product__item-3 mb-40">
                                                        <div class="product__thumb-3 fix p-relative w-img"
                                                            style="border: solid black 1px">
                                                            <a
                                                                href="/products/single/id_produto=<?= $produto->id_produto ?>">
                                                                <img src="{{ asset($produto->img_produto) }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div class="product__content-3">
                                                            <div class="product__tag-3">
                                                                <span>
                                                                    <a href="<?= $produto->categoria ?>"></a>
                                                                </span>
                                                            </div>
                                                            <h3 class="product__title-3">
                                                                <a
                                                                    href="/products/single/id_produto=<?= $produto->id_produto ?>"><?= $produto->nome_do_produto ?></a>
                                                            </h3>
                                                            <div class="product__price-3 fix">
                                                                <span class="price"><?= 'R$ ' . $produto->valor ?></span>
                                                                <div class="product__add-cart-3 transition-3">
                                                                    <form action="/cart/store" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="produto_id"
                                                                            value="{{ $produto->id_produto }}">
                                                                        <input type="hidden" name="quantidade"
                                                                            value="1">
                                                                        <input type="hidden" name="valor"
                                                                            value="{{ $produto->valor }}">
                                                                        <button class="add-to-cart-btn-2"
                                                                            type="submit">Adicionar ao Carrinho</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product area end -->
    </main>
@endsection
