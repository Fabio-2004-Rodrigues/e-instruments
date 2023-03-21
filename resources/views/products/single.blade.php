@extends('layout.main')
@section('content')
    <main>
        <!-- product-details-start -->
        <section class="product-details pt-90 pb-50">
            @foreach ($data as $psingle)
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="product__modal-box d-flex">
                                <div class="product__modal-nav mr-20">
                                    <nav>
                                        <div class="nav nav-tabs" id="product-details" role="tablist">
                                            <div class="w-img">
                                                <img style="border: solid black 1px ; width: 150%"
                                                    src="{{ asset($psingle->img_produto) }}" alt="">
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="product__modal-content-2">
                                <h4><a href="#"><?= $psingle->nome_do_produto ?></a></h4>

                                <div class="product__price mb-25">
                                    <span><?= 'R$ ' . $psingle->valor ?></span>
                                    <span class="old-price"></span>
                                </div>
                                <div class="product__modal-des mb-30">
                                    <p><?= $psingle->descricao ?></p>
                                </div>
                                <div class="pro-quan-area d-sm-flex align-items-center">
                                    <div class="pro-cart-btn">
                                        <form action="/cart/store" method="POST">
                                            @csrf
                                            <input type="hidden" name="produto_id" value="{{ $psingle->id_produto }}">
                                            <input type="hidden" name="quantidade" value="1">
                                            <input type="hidden" name="valor" value="{{ $psingle->valor }}">
                                            <button class="add-cart-btn mb-20" type="submit">Comprar já</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="product__tag mb-25">
                                    <label>Categoria:</label>
                                    <label><?= $psingle->categoria ?></label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
        <!-- product-details-end -->
    </main>
@endsection
