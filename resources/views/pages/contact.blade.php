@extends('layout.main')
@section('content')
    <main>
        <!-- contact-area start -->
        <section class="contact-area pt-120 pb-50 fix" style="margin-left: 600px">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-lg-6">
                        <div class="sec-wrapper">
                            <h5>Entre em Contato</h5>
                            <h2 class="absection-title">Converse com um Especialista</h2>
                        </div>
                        <div class="contact-info mr-50 mr-xs-0  mr-md-0 mb-30">
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-info-icon">
                                    <img src="{{ asset('img/zap.png') }}" style="width: 70px" height="70px"
                                        alt="">
                                </div>
                                <div class="contact-info-text>
                                    <span>Entre em Contato Pelo WhatsApp</span>
                                    <h5><a href="tell:(11)
                                    94478-0936">(11) 94478-0936</a></h5>
                                </div>
                            </div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-info-icon">
                                    <a href="#"><i class="fal fa-envelope"></i></a>
                                </div>
                                <div class="contact-info-text mt-10">
                                    <span>Mande um e-mail</span>
                                    <h5><a href="einstruments@contato.com">einstruments@contato.com</a> </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area end -->
    </main>
@endsection
