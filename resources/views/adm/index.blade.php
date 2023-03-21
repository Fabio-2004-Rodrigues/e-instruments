@extends('adm.main-adm')
@section('adm-content')
    <style type="text/css">
        #imgpos {
            position: relative;
            left: 39%;
            top: 46%;
            margin-left: -110px;
            margin-top: 110px;
            margin-bottom: 110px
        }
    </style>
    <main>
        <img src="{{ asset('img/logo/logo-central.png') }}" width="600" height="200" alt="" id="imgpos">
    </main>
@endsection
