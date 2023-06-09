@extends('layout.main')
@section('content')
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo"></x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="sign__input-wrapper mb-25">
                    <h5>Nome</h5>
                    <div class="sign__input">
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                            required autofocus autocomplete="name" />
                    </div>
                </div>

                <div class="sign__input-wrapper mb-25">
                    <h5>E-mail</h5>
                    <div class="sign__input">
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required />
                    </div>
                </div>

                <div class="sign__input-wrapper mb-25">
                    <h5>Senha</h5>
                    <div class="sign__input">
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />
                    </div>
                </div>
                <div class="sign__input-wrapper mb-25">
                    <h5>Confirme sua Senha</h5>
                    <div class="sign__input">
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                    </div>
                </div>
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" />
                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', ['terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>', 'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>']) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif
                <button type="submit" class="btn-tp w-100"> <span></span>Inscrever-se</button>
                <div class="sign__new text-center mt-20">
                    <p>Já possui conta na E-Instruments?<a href="/login"> Login</a></p>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
@endsection
