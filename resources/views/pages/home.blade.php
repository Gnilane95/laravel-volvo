@php
    
    $arrayCardsS2 = [
        [
            "img"=>"11.webp",
            "name"=>"Xc 40 Recharge",
            "title"=>"Débranchez, à vous de jouer",
            "price"=>"A partir de 52 050€",
            "link1"=>"Découvrez",
            "link2"=>"Choisir"
        ],
        [
            "img"=>"7.webp",
            "name"=>"Xc 60 Recharge",
            "title"=>"La route vous appartient.Découvrez le monde",
            "price"=>"A partir de 72 130€",
            "link1"=>"Découvrez",
            "link2"=>"Choisir"
        ],
];

    $arrayCardsS3 = [
        [
            "img"=>"2.webp",
            "name"=>"Xc 60 Recharge",
            "title"=>"La route vous appartient.Découvrez le monde",
            "price"=>"A partir de 72 130€",
            "link1"=>"Découvrez",
            "link2"=>"Choisir" 
        ],
        [   
            "img"=>"6.webp",
            "name"=>"Xc 60 Recharge",
            "title"=>"La route vous appartient.Découvrez le monde",
            "price"=>"A partir de 72 130€",
            "link1"=>"Découvrez",
            "link2"=>"Choisir" 
        ],
    ]

@endphp

@extends('layout.layout')
@section('title', 'Accueil')

@section("content")
    @include("partials.homepage._hero")
    @include("partials.homepage._section1")
    <div>
        @php
            $titleh2 = "Models disponibles ";
            $spanh2 = ""
        @endphp
        @include("partials.homepage._h2")
        <div class="flex ">
            @foreach($arrayCardsS2 as $arrCardS2)
                @include("partials.homepage._section2")
            @endforeach
        </div>
    </div>
    
    <div class="p-28 flex space-x-5">
        @foreach ($arrayCardsS3 as $arrayCardS3 )
            @include("partials.showpage._card") 
        @endforeach
    </div>
@endsection