@extends('layouts.vleugelslayout')
 
@section('content')
<div class="container-fluid" style="width:100%">
    <div class="modal fade" role="dialog" aria-hidden="false">
        <!-- include('cookieConsent::index') -->
    </div>   
    <!-- include('partials.flash') -->
    <!-- include('partials.wissession') -->
    @php
    // dd( session()->all());
    @endphp
    welkom

    <x-test></x-test>
    <hr />
    <div x-data="{ show: false }">
        <button x-on:click="show = true; alert('dag allemaal');">Categorie</button>
        
        <div x-show="show">
            <a href="#">een</a>
            <a href="#">twee</a>
            <a href="#">drie</a>
        </div>
    </div>


    <!-- include('welcome.home') -->
    <!-- include('welcome.hotel') -->
    <!-- include('welcome.dagverblijf') -->
    <!-- include('welcome.therapie') -->
    <!-- include('welcome.footer') -->
</div>
@endsection