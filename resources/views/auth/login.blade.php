@extends('layout.main')
@section('content')
    <section class="signin__area po-rel-z1 pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="sign__wrapper white-bg">
                        <div class="sign__header mb-35"></div>
                        <div class="sign__form">
                            <x-slot name="logo"></x-slot>
                            <x-jet-validation-errors class="mb-4" />
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="sign__input-wrapper mb-25">
                                    <h5>E-mail</h5>
                                    <div class="sign__input">
                                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                            :value="old('email')" required autofocus />
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Senha</h5>
                                    <div class="sign__input">
                                        <x-jet-input id="password" class="block mt-1 w-full" type="password"
                                            name="password" required autocomplete="current-password" />
                                    </div>
                                </div>
                                <div class="block mt-4" style="margin-bottom: 10px">
                                    <label for="remember_me" class="flex items-center">
                                        <x-jet-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Lembre de mim') }}</span>
                                    </label>
                                </div>
                                <button class="btn-tp w-100"> <span></span>Login</button>
                                <div class="sign__new text-center mt-20">
                                    <p>Novo na E-Intruments? <a href="/register">Inscreva-se</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
