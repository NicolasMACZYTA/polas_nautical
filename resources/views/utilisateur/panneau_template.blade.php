@extends('template')

@section('nav')
    <div id="nav" class="container bg-light" style="height:100%;float:left;width:250px;margin-right: 20px;padding-top:10px;padding-bottom:10px">
        <ul class="nav flex-column float-left" >
            @yield('navcontent')
        </ul>
    </div>
@endsection

@section('contenu')
    <div id="contenu" style="margin-left: 275px">
        <div>
            <h1 class="display-4">@yield('titre')</h1>
        </div>
        @yield('panneau_contenu')
    </div>
@endsection