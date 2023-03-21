@extends('layout.main')
@section('content')

<style type="text/css">
    #imgpos {
        position: relative;
        left: 20%;
        top: 46%;
        margin-left: -240px;
        margin-top: 10px;
        margin-bottom: 50px
    }
</style>
<main>
    <img src="{{ asset('img/pagseguro.jpg') }}" width="1500" height="700" alt="" id="imgpos">
</main>

@endsection