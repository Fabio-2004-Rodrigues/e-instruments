@extends('layout.main')
@section('content')
    <main>
        <!-- tracking area start -->
        <section class="signin__area po-rel-z1 pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="sign__wrapper white-bg">
                            <div class="sign__header mb-35">
                            </div>
                            <div class="sign__form">
                                <form action="#">
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>E-mail</h5>
                                        <div class="sign__input">
                                            <input type="text" placeholder="Endereço de E-mail">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-10">
                                        <h5>Código de Rastreio</h5>
                                        <div class="sign__input">
                                            <input type="text" placeholder="Código">
                                            <i class="fal fa-lock"></i>
                                        </div>
                                    </div>
                                    <button class="btn-tp w-100"> <span></span>Rastrear</button>
                                    <div class="sign__new text-center mt-20">
                                        <p>O código de rastreio foi enviado para o e-mail da compra !!!</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- signin__area end -->
    </main>
@endsection
